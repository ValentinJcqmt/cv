<?php

namespace App\Console\Commands;

use App\Contact;
use App\UsedCar;
use App\UsedCarsImage;
use Chumper\Zipper\Zipper;
use League\Csv\Reader;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CollectSelsiaProvider extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:collect-selsia-provider';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get FTP files from SELSIA then process then to insert informations into BDD';

    protected $pathToZip = 'app/public/assets/providers/selsia/photos.txt.zip';

    protected $pathToCsv = 'app/public/assets/providers/selsia/list.csv';

    protected $publicImagePath;

    protected $usedCarModel;

    protected $usedCarImageModel;

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        $this->usedCarModel = new UsedCar();
        $this->usedCarImageModel = new UsedCarsImage();
        $this->publicImagePath = 'assets/providers/selsia/images/';
        parent::__construct();
    }

    /**
     * Execute the console command.
     * Selsia is also called cardiff by client ...
     *
     * @return mixed
     */
    public function handle()
    {
        //Get FTP files and save them localy
        $this->info('Processing datas from SELSiA (aka Cardiff)');
        $this->getFilesFromSelsia();

        //process informations to bdd
        $this->importCsvToBdd();
        $this->info(' Datas imported.');

        //cleaning outdated data
        $this->cleanOutdatedUsedCar();
        $this->info(' Datas cleaned.');
    }

    private function getFilesFromSelsia()
    {
        //save files
        $csv = Storage::disk('ftp-selsia')->get('datas/stockvo.csv');
        $image = Storage::disk('ftp-selsia')->get('datas/photos.txt.zip');

        Storage::disk('selsia')->put('list.csv', $csv);
        Storage::disk('selsia')->put('photos.txt.zip', $image);
    }

    private function loadPhotosTxtZip(Zipper $zipper)
    {
        $zipper->make(storage_path($this->pathToZip));

        return $zipper->getFileContent('photos.txt');
    }

    /**
     * Return datas from selsia photos.txt.zip in array.
     *
     * @return array
     */
    private function getFormatedPhotosTxtZip()
    {
        $photosRaw = explode("\r\n", $this->loadPhotosTxtZip(new Zipper()));
        array_pop($photosRaw);

        foreach ($photosRaw as $photo) {
            $photos[] = explode("\t", $photo);
        }

        return $photos;
    }

    private function loadCsv()
    {
        $csv = Reader::createFromPath(storage_path($this->pathToCsv));
        $csv->setDelimiter(';');

        return $csv->fetchAssoc();
    }

    private function countCsvLines()
    {
        $i = 0;
        foreach ($this->loadCsv() as $item) {
            $i++;
        }

        return $i;
    }

    private function importCsvToBdd()
    {
        $photos = $this->getFormatedPhotosTxtZip();

        $csv = $this->loadCsv();
        $bar = $this->createBarProgress($this->countCsvLines());

        foreach ($csv as $item) {
            if ($usedCar = $this->findUsedCar($item['IdentifiantVehicule'])) {
                $this->updateUsedCar($usedCar, $item);
            } else {
                $usedCar = $this->createUsedCar($item);
            }
            $this->processUsedCarImages($item, $photos, $usedCar);
            $bar->advance();
        }
    }

    private function findUsedCar($providerCarId)
    {
        return $this->usedCarModel->where('provider_car_id', $providerCarId)->where('provider', 'selsia')->first();
    }

    private function updateUsedCar(UsedCar $usedCar, $item)
    {
        $usedCar->update([
            'marque'       => $item['Marque'],
            'model'        => $item['Modele'],
            'version'      => $item['Version'],
            'price'        => $item['PrixVenteTTC'],
            'status_stock' => $item['StatutStock'],
            'energy'       => $item['EnergieLibelle'],
            'km'           => $item['Kilometrage'],
            'transmission' => $item['NbRapports'],
            'cylinder'     => $item['Cylindree'],
            'horsepower'   => $item['PuissanceReelle'],
            'nb_doors'     => $item['NbPortes'],
            'color'        => $item['Couleur'],
            'co2'          => $item['Co2'],
            'options'      => $item['EquipementsSerieEtOption'],
        ]);

        $separator = null;
        if (isset($item['ContactsTelephones']) && isset($item['ContactsTelephones2']))
            $separator = '|';

        if ($item['ContactsTelephones'] || $item['ContactsTelephones2']) {
            $attributes = new Contact([
                'names'  => $item['ContactsNoms'],
                'phones' => $item['ContactsTelephones'].$separator.$item['ContactsTelephones2'],
                'emails' => $item['ContactsEmails'],
            ]);
            $usedCar->contacts()->save($attributes);
        }

        return $usedCar;
    }

    private function createUsedCar($item)
    {
        $usedCar = $this->usedCarModel->create([
            'provider_car_id' => $item['IdentifiantVehicule'],
            'provider'        => 'selsia',
            'marque'          => $item['Marque'],
            'model'           => $item['Modele'],
            'version'         => $item['Version'],
            'price'           => $item['PrixVenteTTC'],
            'status_stock'    => $item['StatutStock'],
            'energy'          => $item['EnergieLibelle'],
            'km'              => $item['Kilometrage'],
            'transmission'    => $item['NbRapports'],
            'cylinder'        => $item['Cylindree'],
            'horsepower'      => $item['PuissanceReelle'],
            'nb_doors'        => $item['NbPortes'],
            'color'           => $item['Couleur'],
            'co2'             => $item['Co2'],
            'options'         => $item['EquipementsSerieEtOption'],
        ]);

        $separator = null;
        if (isset($item['ContactsTelephones']) && isset($item['ContactsTelephones2']))
            $separator = '|';

        if ($item['ContactsTelephones'] || $item['ContactsTelephones2']) {
            $attributes = new Contact([
                'names'  => $item['ContactsNoms'],
                'phones' => $item['ContactsTelephones'].$separator.$item['ContactsTelephones2'],
                'emails' => $item['ContactsEmails'],
            ]);
            $usedCar->contacts()->save($attributes);
        }

        return $usedCar;
    }

    private function createBarProgress($totalItem)
    {
        return $this->output->createProgressBar($totalItem);
    }

    /**
     *  Clean database against old data not provided by Selsia.
     */
    private function cleanOutdatedUsedCar()
    {
        $csv = $this->loadCsv();
        $targets = array();

        foreach ($csv as $item) {
            $targets[] = $item['IdentifiantVehicule'];
        }

        $usedCarsToDelete = $this->usedCarModel->where('provider', 'selsia')->whereNotIn('provider_car_id', $targets)->get();

        $bar = $this->createBarProgress(count($usedCarsToDelete));
        foreach ($usedCarsToDelete as $car) {
            $car->images()->delete();
            $car->delete();
            $bar->advance();
        }
    }

    private function processUsedCarImages($csv, $photos, UsedCar $usedCar)
    {
        if (!$csv['Photos'])
            return;

        $images = explode("|", $csv['Photos']);

        foreach ($images as $image) {
            /*
             * Index of photo
             * [0] => photoName.jpg
             * [1] => lien ftp
             * [2] => hash
             */
            foreach ($photos as $photo) {
                if ($photo[0] == $image) {
                    $ftpPath = $photo[1];
                    //image exist, same hash => continue or download and update
                    if ($query = $this->isImageExist($image, $usedCar['id'])) {
                        if ($query['hash'] != $photo[2]) {
                            //telechargement + update
                            if ($this->downloadImage($ftpPath, $image)) {
                                //Insert image in database
                                $this->usedCarImageModel->update([
                                    'name' => $image,
                                    'path' => public_path($this->publicImagePath).$image,
                                    'hash' => $photo[2],
                                ]);
                                echo 'Update row in BDD for image '.$image.' HASH = '.$photo[2];
                            }
                        }
                        continue;
                    }
                    if ($this->downloadImage($ftpPath, $image)) {
                        //echo 'Create row in BDD for image '.$image;
                        $this->usedCarImageModel->create([
                            'used_car_id' => $usedCar['id'],
                            'name'        => $image,
                            'path'        => public_path($this->publicImagePath).$image,
                            'hash'        => $photo[2],
                        ]);
                    }
                }
            }
        }
    }

    /**
     * Check if an image already exist in database.
     *
     * @param               $imageName
     * @param               $usedCarId
     * @return mixed
     */
    private function isImageExist($imageName, $usedCarId)
    {
        return $this->usedCarImageModel->where('name', $imageName)->where('used_car_id', $usedCarId)->first();
    }

    /**
     * Attempt to download image and store it. Return true if success or false.
     *
     * @param $ftpPath
     * @param $imageName
     * @return bool
     */
    private function downloadImage($ftpPath, $imageName)
    {
        $handle = fopen(public_path('assets/providers/selsia/').'images/'.$imageName, 'w');

        // Mise en place d'une connexion basique
        $conn_id = ftp_connect(env('FTP_SELSIA_SERVER'));

        // Identification avec un nom d'utilisateur et un mot de passe
        ftp_login($conn_id, env('FTP_SELSIA_USERNAME'), env('FTP_SELSIA_PASSWORD'));

        // Tente de téléchargement le fichier $remote_file et de le sauvegarder dans $handle
        $dl = ftp_nb_fget($conn_id, $handle, $ftpPath, FTP_BINARY, 0);

        while ($dl == FTP_MOREDATA) {
            // Continue le téléchargement...
            $dl = ftp_nb_continue($conn_id);
        }
        //echo('Downloaded '.$imageName);
        return true;
    }
}
