<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class IniciarAplicacion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:run_aplication';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'run migration and seeders';

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
        $this->call('migrate:refresh',['--seed' => true,]);
        $this->call('voyager:install',['--with-dummy' => true,]);
        echo 'successful command';
        $this->call('queue:work');
        echo 'services queque successfull';
    }
}
