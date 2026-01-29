<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use DB;
use App\Models\Admins;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker=Faker::create();
        Admins::create([
            "name"=>"A",
            "email"=>"a@gmail.com",
            "password"=>base64_encode("a"),
        ]);
    }
}
