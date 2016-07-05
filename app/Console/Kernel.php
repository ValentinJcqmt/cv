<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\CollectSelsiaProvider::class,
        Commands\CollectConceptAutoProvider::class,
        Commands\CleanOutdatedSelsiaImages::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('command:collect-conceptauto-provider')
            ->daily()->at('01:00');

        //SELSiA (Cardiff) refresh there datas each days at 06:00
        $schedule->command('command:collect-selsia-provider')
            ->daily()->at('06:30');

        $schedule->command('clean-outdated-selsia-images')
            ->daily()->at('08:00');
    }
}
