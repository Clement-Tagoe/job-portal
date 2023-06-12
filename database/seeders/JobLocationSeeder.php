<?php

namespace Database\Seeders;

use App\Models\JobLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobLocation::create([
            'name' => 'Accra & Tema Region'
        ]);

        JobLocation::create([
            'name' => 'Kumasi & Ashanti Region'
        ]);

        JobLocation::create([
            'name' => 'Takoradi & Western Region'
        ]);

        JobLocation::create([
            'name' => 'Tamale & Northern Region'
        ]);

        JobLocation::create([
            'name' => 'Rest of Ghana'
        ]);

        JobLocation::create([
            'name' => 'Outside Ghana'
        ]);

        JobLocation::create([
            'name' => 'Remote (Work From Home)'
        ]);
    }
}
