<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory as Faker;
use App\Models\User;

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
        User::create([
            "name"=>$faker->name,
            "email"=>$faker->email,
            "password"=>$faker->randomElement(["123456","456789","987410"]),
        ]);
        $this->info("User Created");
    }
}
