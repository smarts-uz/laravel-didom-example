<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class QuickStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quick:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $quickStart = new \App\Services\QuickStart();
        $quickStart->quick();
    }
}
