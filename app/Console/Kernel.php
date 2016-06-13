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
        // Commands\Inspire::class,
        Commands\CollectDadAutoProvider::class,
        Commands\CollectSelsiaProvider::class,
        Commands\CollectConceptAutoProvider::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('command:collect-dadauto-provider')
            ->daily()->at('01:00');

        //SELSiA (Cardiff) refresh there datas each days at 06:00
        $schedule->command('command:collect-selsia-provider')
            ->daily()->at('06:30');
    }
}
