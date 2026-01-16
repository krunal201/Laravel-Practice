<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class FakeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table("user")->insert([
            "name"=>$faker->name,
            "email"=>$faker->email,
            "password"=>Hash::make($faker->randomElement(["12354"])),
            // "password"=>$faker->randomElement(["12354","8541297","845632"])->hashed(),
        ]);
    }
}
