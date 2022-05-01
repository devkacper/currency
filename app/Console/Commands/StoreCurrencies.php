<?php

namespace App\Console\Commands;

use App\Http\Controllers\Api\CurrencyController;
use Illuminate\Console\Command;

class StoreCurrencies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currencies:store';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Store or update currencies from NBP API to database.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $controller = new CurrencyController();

            $controller->store();

            $this->info( __('alerts.success') );

        } catch (\Exception $e) {
            $this->error( __('alerts.error') );
        }
    }
}
