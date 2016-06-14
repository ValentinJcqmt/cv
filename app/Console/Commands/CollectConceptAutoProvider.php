<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CollectConceptAutoProvider extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:collect-conceptauto-provider';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Collect data for provider conceptauto.fr the old dad-auto.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Set the world
        $this->url = 'http://www.conceptauto.fr/societe/ConceptAutoCarcassone/listerVoitures/';
        $this->pathXml = '/list.xml';
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
        $this->info('Processing XML file...');
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
     * Get the raw json
     *
     * @return string
     */
    private function getSource()
    {
        $username = 'ConceptAutoCarcassone';
        $password = 'CACarcaSSone';

        $context = stream_context_create(array(
            'http' => array(
                'header' => "Authorization: Basic ".base64_encode("$username:$password")
            )
        ));

        return file_get_contents($this->url, false, $context);

    }

    /**
     * Store file into disk.
     *
     * @param $file
     * @return mixed
     */
    private function storeFile($file)
    {
        return Storage::disk('concept-auto')->put($this->pathXml, $file);
    }

    /**
     * Get images from remote server then store them.
     */
    private function processImages()
    {
        $cars = simplexml_load_string(Storage::disk('concept-auto')->get($this->pathXml));

        foreach ($cars as $car) {
            $this->cleanCurrentDirectory($car->id);

            $images = $car->photo;

            foreach ($images as $image) {
                $this->storeImages($image);
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
    private function storeImages($image)
    {
        $img = @file_get_contents($image);
        $fragments = explode('/', $image);
        $carId = $fragments[4];
        $filename = $fragments[5];

        Storage::disk('concept-auto-public')->makeDirectory($this->pathImage.$carId);
        Storage::disk('concept-auto-public')->put($this->pathImage.$carId.'/'.$filename, $img);
    }

    /**
     * Remove target image directory.
     *
     * @param $carId
     * @return mixed
     */
    private function cleanCurrentDirectory($carId)
    {
        return Storage::disk('concept-auto-public')->deleteDirectory($this->pathImage.$carId);
    }

    /**
     * Removes local directories if we have a difference between local directories and ids in Json
     * Making free space on disk
     */
    private function removeOldImages()
    {
        $directories = Storage::disk('concept-auto-public')->allDirectories($this->pathImage);
        $olds = array();
        $news = array();

        //Format array for olds cars (what we have localy)
        foreach ($directories as $file) {
            $infos = explode('/', $file);
            $olds[] = array_pop($infos);
        }

        $xml = simplexml_load_string(Storage::disk('concept-auto')->get($this->pathXml));

        //Format array for new cars
        foreach ($xml as $car) {
            $news[] = $car->id;
        }

        //Compare arrays and delete old cars.
        $diffs = array_diff($olds, $news);

        //Delete all diff files
        foreach ($diffs as $diff) {
            Storage::disk('concept-auto-public')->deleteDirectory($this->pathImage.$diff);
        }
    }

}

