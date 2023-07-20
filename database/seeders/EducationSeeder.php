<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'user_id' => 1,
            'school_name' => 'University of Ghana',
            'minimum_qualification' => 'Degree',
            'qualification' => 'MBA',
            'start_month' => 'October',
            'start_year' => '2010', 
            'end_month' => 'June',
            'end_year' => '2013',
            'description' => 'BSc Marketing'
        ]);
    }
}
