<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InsertUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        $faker = Faker::create();
        $password=$faker->randomElement(["123456","456789","987410"]);
        $hasedpassword=hash::make($password);
        User::create([
            "name"=>$faker->name,
            "email"=>$faker->email,
            "password"=>$hasedpassword
        ]);
        $this->info("User Created");
    }
}
