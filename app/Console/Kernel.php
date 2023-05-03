<?php

namespace App\Console;

use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Filesystem\Filesystem;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $file = new Filesystem;
            $file->cleanDirectory('storage/app/pdf/livraisonsToSign');
            DB::table("stock")
                ->select()
                ->where("startAt", new Carbon("2000-01-01"))
                ->update(["startAt",  new Carbon("2020-01-01")]);

            DB::table("files")
                ->select()
                ->update(["publicAccess",  0]);

        })->twiceDailyAt(2, 12, 0);

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
