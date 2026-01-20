<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class TestingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:testing {id?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Currenty Testing';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if($this->argument('id')){
            $user=User::where('id',$this->argument('id'))->get(['id','name']);
            $this->table(['id',"name"],$user);
        }else{
            $user=User::orderBy("id")->get(['id','name']);
            $this->table(['id','name'],$user);
            $this->info("All Users");
        }
    }
}
