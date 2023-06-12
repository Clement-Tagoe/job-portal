<?php

namespace Database\Seeders;

use App\Models\JobFunction;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobFunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobFunction::create([
            'name' => 'Accounting, Auditing & Finance'
        ]);

        JobFunction::create([
            'name' => 'Admin & Office'
        ]);

        JobFunction::create([
            'name' => 'Building & Architecture'
        ]);

        JobFunction::create([
            'name' => 'Community & Social Services'
        ]);

        JobFunction::create([
            'name' => 'Consulting & Strategy'
        ]);

        JobFunction::create([
            'name' => 'Creative & Design'
        ]);

        JobFunction::create([
            'name' => 'Customer Service & Support'
        ]);

        JobFunction::create([
            'name' => 'Driver & Transport Services'
        ]);

        JobFunction::create([
            'name' => 'Engineering & Technology'
        ]);

        JobFunction::create([
            'name' => 'Farming & Agriculture'
        ]);

        JobFunction::create([
            'name' => 'Food Services & Catering'
        ]);

        JobFunction::create([
            'name' => 'Health & Safety'
        ]);

        JobFunction::create([
            'name' => 'Hospitality & Leisure'
        ]);

        JobFunction::create([
            'name' => 'Human Resources'
        ]);

        JobFunction::create([
            'name' => 'Legal Services'
        ]);

        JobFunction::create([
            'name' => 'Management & Business Development'
        ]);

        JobFunction::create([
            'name' => 'Marketing & Communications'
        ]);

        JobFunction::create([
            'name' => 'Medical & Pharmaceutical'
        ]);

        JobFunction::create([
            'name' => 'Product & Project Management'
        ]);

        JobFunction::create([
            'name' => 'Quality Control & Assurance'
        ]);

        JobFunction::create([
            'name' => 'Research, Teaching & Training'
        ]);

        JobFunction::create([
            'name' => 'Sales'
        ]);

        JobFunction::create([
            'name' => 'Software & Data'
        ]);

        JobFunction::create([
            'name' => 'Supply Chain & Procurement'
        ]);
        

        
    }
}
