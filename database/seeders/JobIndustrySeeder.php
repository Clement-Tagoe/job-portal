<?php

namespace Database\Seeders;

use App\Models\JobIndustry;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobIndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobIndustry::create([
            'name' => 'Advertising, Media & Communications'
        ]);

        JobIndustry::create([
            'name' => 'Agriculture, Fishing & Forestry'
        ]);

        JobIndustry::create([
            'name' => 'Automotive & Aviation'
        ]);

        JobIndustry::create([
            'name' => 'Banking, Finance & Insurance'
        ]);


        JobIndustry::create([
            'name' => 'Construction'
        ]);

        JobIndustry::create([
            'name' => 'Education'
        ]);

        JobIndustry::create([
            'name' => 'Energy & Utilities'
        ]);

        JobIndustry::create([
            'name' => 'Enforcement & Security'
        ]);

        JobIndustry::create([
            'name' => 'Entertainment, Events & Sport'
        ]);

        JobIndustry::create([
            'name' => 'Government'
        ]);

        JobIndustry::create([
            'name' => 'Healthcare'
        ]);

        JobIndustry::create([
            'name' => 'Hospitality & Hotel'
        ]);

        JobIndustry::create([
            'name' => 'IT & Telecoms'
        ]);

        JobIndustry::create([
            'name' => 'Law & Compliance'
        ]);
        JobIndustry::create([
            'name' => 'Manufacturing & Warehousing'
        ]);

        JobIndustry::create([
            'name' => 'Mining, Energy & Metals'
        ]);

        JobIndustry::create([
            'name' => 'NGO, NPO & Charity'
        ]);

        JobIndustry::create([
            'name' => 'Real Estate'
        ]);

        JobIndustry::create([
            'name' => 'Recruitment'
        ]);
        JobIndustry::create([
            'name' => 'Retail, Fashion & FMCG'
        ]);

        JobIndustry::create([
            'name' => 'Shipping & Logistics'
        ]);

        JobIndustry::create([
            'name' => 'Tourism & Travel'
        ]);

    }
}
