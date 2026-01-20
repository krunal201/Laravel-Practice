<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class FakeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::create();
        for($i=0;$i<10;$i++){
            DB::table("users")->insert([
                "name"=>$faker->name,
                // "email"=>$faker->randomElement(["abc@gmail.com","asqw@gmail.com","oper@gmail.com"]),
                "email"=>$faker->email,
                "password"=>$faker->randomElement(["125478","562145","851269"]),
            ]);
        }
    }
}
