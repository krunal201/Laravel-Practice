<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
         User::create([
            "name"=>$faker->name,
            "email"=>$faker->email,
            "password"=>base64_encode($faker->randomElement(['123456','789546','852123'])),
        ]);
    }
}
