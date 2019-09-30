<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DatabaseReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import database & migrate';

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
     * @return mixed
     */
    public function handle() {
        //$this->warn('This command import the file "db.sql" and launch migrations. All recent data will be deleted.');
        //if($this->confirm('Are you sure ?')) {
            $databaseName = env('DB_DATABASE');
            $databasePassword = env('DB_PASSWORD');
            $databaseUser = env('DB_USERNAME');
            $this->info('Dropping database...');
            exec("mysql --user=$databaseUser --password=$databasePassword -e 'DROP DATABASE $databaseName;'");
            $this->info('Database dropped');
            $this->info('Creating database...');
            exec("mysql --user=$databaseUser --password=$databasePassword -e 'CREATE DATABASE $databaseName;'");
            $this->info('Database created');
            //$this->info('Importing database...');
            //exec("mysql --user=homestead --password=$databasePassword $databaseName < db.sql");
            //$this->info('Database imported');
            $this->info('Migrating database...');
            Artisan::call('migrate');
            $this->info(Artisan::output());
            $this->info('Database migrated');
        //}
    }
}
