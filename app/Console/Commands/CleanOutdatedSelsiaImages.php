<?php

namespace App\Console\Commands;

use App\UsedCarsImage;
use Chumper\Zipper\Zipper;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CleanOutdatedSelsiaImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:clean-outdated-selsia-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command delete outdated images for selsia provider';

    protected $pathToZip = 'app/public/assets/providers/selsia/photos.txt.zip';

    protected $usedCarImageModel;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->usedCarImageModel = new UsedCarsImage();
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $photosRaw = $this->getFormatedPhotosTxtZip();
        $photos = array();
        foreach ($photosRaw as $photo) {
            $photos[] = $photo[0];
        }

        $publicImages = Storage::disk('selsia-public')->allFiles('images/');

        foreach ($publicImages as $publicImage) {
            //Cleaning file name
            $images[] = substr($publicImage, 7);
        }

        foreach ($images as $image) {
            $guard = array_search($image, $photos);
            if ($guard === false){
                Storage::disk('selsia-public')->delete('images/'.$image);
                $this->usedCarImageModel->where('name', $image)->delete();
                //echo 'Clean photo '.$image;
            }
        }
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

    private function loadPhotosTxtZip(Zipper $zipper)
    {
        $zipper->make(storage_path($this->pathToZip));

        return $zipper->getFileContent('photos.txt');
    }

}
