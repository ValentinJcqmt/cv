<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CollectDadAutoProvider extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:collect-dadauto-provider';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command who get the last informations from dad auto';

    protected $url;

    protected $urlImages;

    protected $path;

    protected $pathJson;

    protected $pathImage;

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        //Set the world
        $this->url = 'http://www.dad-auto.fr/liste.php';
        $this->urlImages = 'http://www.dad-auto.fr/gallery/';
        $this->pathJson = '/list.json';
        $this->pathImage = '/images/';
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Processing JSON file...');
        $this->storeFile($this->getSource());
        $this->info('Step 1/3 ::: Json import complete :::');
        $this->info('Processing images...');
        $this->processImages();
        $this->info('Step 2/3 ::: Images import complete :::');
        $this->info('Processing old images...');
        $this->removeOldImages();
        $this->info('Step 3/3 ::: Old images remove complete :::');
        $this->info(' *** Process complete ! ***');
    }

    /**
     * Remove target image directory.
     *
     * @param $carId
     * @return mixed
     */
    private function cleanCurrentDirectory($carId)
    {
        return Storage::disk('dad-auto-public')->deleteDirectory($this->pathImage.$carId);
    }

    /**
     * Get the raw json
     *
     * @return string
     */
    private function getSource()
    {
        return file_get_contents($this->url);
    }

    /**
     * Store file into disk.
     *
     * @param $file
     * @return mixed
     */
    private function storeFile($file)
    {
        return Storage::disk('dad-auto')->put($this->pathJson, $file);
    }

    /**
     * Get images from remote server then store them.
     */
    private function processImages()
    {
        $cars = json_decode(Storage::disk('dad-auto')->get($this->pathJson));

        foreach ($cars as $car) {
            $this->cleanCurrentDirectory($car->id);

            $i = 1;
            $k = true;

            while ($k == true) {
                if ($file = @file_get_contents($this->urlImages.$car->id.'/'.$i.'.png')) {
                    $this->storeImages($file, $car->id, $i);
                    $i++;
                }
                $k = $file;
            }
        }
    }

    /**
     * Store images into disk.
     *
     * @param $image
     * @param $carId
     * @param $i
     */
    private function storeImages($image, $carId, $i)
    {
        Storage::disk('dad-auto-public')->makeDirectory($this->pathImage.$carId);
        Storage::disk('dad-auto-public')->put($this->pathImage.$carId.'/'.$i.'.png', $image);
    }

    /**
     * Removes local directories if we have a difference between local directories and ids in Json
     * Making free space on disk
     */
    private function removeOldImages()
    {
        $directories = Storage::disk('dad-auto-public')->allDirectories($this->pathImage);
        $olds = array();
        $news = array();

        //Format array for olds cars (what we have localy)
        foreach($directories as $file){
            $infos = explode('/', $file);
            $olds[] = array_pop($infos);
        }

        $json = json_decode(Storage::disk('dad-auto')->get($this->pathJson));

        //Format array for new cars
        foreach($json as $car){
            $news[] = $car->id;
        }

        //Compare arrays and delete old cars.
        $diffs=array_diff($olds, $news);

        //Delete all diff files
        foreach($diffs as $diff){
            Storage::disk('dad-auto-public')->deleteDirectory($this->pathImage.$diff);
        }
    }
}
