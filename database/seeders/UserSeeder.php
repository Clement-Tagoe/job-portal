<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Clement',
            'last_name' => 'Tagoe',
            'email' => 'clementtagoe110@gmail.com',
            'password' => bcrypt('12345678'),
            'date_of_birth' => '1990-02-02',
            'gender' => 'Male',
            'nationality' => 'Ghanaian',
            'location_id' => 1,
            'country_code' => 'Ghana (+233)',
            'mobile_number' => '0201234567',
            'highest_qualification' => 'Degree',
            'current_jobFunction_id' => 3,
            'experience' => '3-years',
            'availability' => 'Immediately',
            'career_tips' => 0,
            'job_alerts' => 0,
        ]);
    }
}
