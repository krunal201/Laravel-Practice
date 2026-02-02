<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Registration::create([
            "user_id"=> 4,
            "event_id"=>2,
            "name"=>"Dale Lockman",
            "email"=>"mills.mina@bins.info",
            "phone"=>"9301285410",
        ]);
    }
}
