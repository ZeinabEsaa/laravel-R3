<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Console\Command;

class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expiration';

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
   $users=User::where('Expired',1)->get();
     foreach($users as $row){
     $row->update(['Expired'=>0]);
     }    
    }
}
