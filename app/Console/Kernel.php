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
        //
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule) {
        $schedule->command('check-news')
            ->everyMinute();
        $schedule->command('check-sales')
<<<<<<< HEAD
                ->everyMinute();
        $schedule->command('clean-donations')
            ->everyMinute();

=======
            ->everyMinute();
        $schedule->command('check-pet-drops')
            ->everyMinute();
        $schedule->command('reset-stamina')
            ->daily();
        $schedule->exec('rm public/images/avatars/*.tmp')
            ->daily();
        $schedule->command('update-extension-tracker')
            ->daily();
        $schedule->command('update-staff-reward-actions')
            ->daily();
        $schedule->command('restock-shops')
            ->daily();
        $schedule->command('update-timed-stock')
            ->everyMinute();
        $schedule->command('check-pet-drops')
            ->everyMinute();
>>>>>>> 0e64f5bf38b88c74c42555e1a3de7429f927474e
    }

    /**
     * Register the commands for the application.
     */
    protected function commands() {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
