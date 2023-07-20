<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\WorkExperience;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkExperience::create([
            'user_id' => 1,
            'jobIndustry_id' => 2,
            'jobFunction_id' => 3,
            'employer' => 'Wilmar Ghana Limited',
            'no_work_experience' => false,
            'job_title' => 'Accountant',
            'job_level' => 'Mid Level',
            'country' => 'Ghana',
            'monthly_salary' => '4,000',
            'work_type' => 'Full Time',
            'city' => 'Accra',
            'start_month' => 'January',
            'start_year' => '2020',
            'end_month' => 'October',
            'end_year' => '2022',
            'currently_work_here' => true,
            'job_responsibilities' => '<ul>
                                        <li>Complying with the company, state, and country&rsquo;s accounting and financial regulations.&nbsp;</li>
                                        <li>Compiling, analyzing, and reporting financial data.</li>
                                        <li>Creating financial reports like profit and loss statements and balance sheets, etc.</li>
                                        <li>Presenting data to investors, managers, and other entities.</li>
                                        <li>Maintaining accurate financial reports. Performing audits and solving errors.</li>
                                        <li>Computing taxes. Being updated about changes related to finance and accounting. Helping management in decision-making</li>
                                        </ul>',
        ]);
    }
}
