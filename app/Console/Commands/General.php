<?php

namespace App\Console\Commands;

use App\Services\GeneralService;
use Illuminate\Console\Command;

class General extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:general';

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
        $general = new GeneralService();

        //$general->search();
        //$general->verify();
        //$general->searchInElement();
        //$general->supportedSelectors();
        $general->output();
    }
}
