<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\EmployerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // 
        $this->call([
            JobFunctionSeeder::class,
            JobIndustrySeeder::class,
            JobLocationSeeder::class,
            EmployerSeeder::class,
            JobSeeder::class,
            UserSeeder::class,
            WorkExperienceSeeder::class,
            EducationSeeder::class,
        ]);

    }
}
