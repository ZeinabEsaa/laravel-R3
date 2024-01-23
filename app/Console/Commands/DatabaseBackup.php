<?php

namespace App\Console\Commands;
 
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;
 
class DatabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';
 
    /**
     * Execute the console command.
     */
    public function handle()
    {
        

        $filename = carbon::now()->format('y-m-d-H-i_s')  . ".sql";

        $command = "mysqldump --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD')
                . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE') 
                . "  > " . storage_path() ."/app/backup/" . $filename;

 
        exec($command);
     

    }
}
