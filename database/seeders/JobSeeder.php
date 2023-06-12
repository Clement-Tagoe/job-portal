<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create([
            'employer_id' => 1,
            'jobFunction_id' => 1,
            'jobIndustry_id' => 5,
            'jobLocation_id' => 1,
            'title' => 'Financial Analyst',
            'type' => 'Full Time',
            'qualification' => 'Degree',
            'experience' => '2 years',
            'level' => 'Senior Level',
            'salary_currency' => 'ghs',
            'monthly_salary' => '3,000 - 3,600',
            'days_online' => '45',
            'available_openings' => '1',
            'summary' => 'We are looking for a trustworthy accountant to manage all our financial transactions, from fixed and variable expenses to budgets and bank deposits. They are expected to work with huge amounts of numerical data, manage multiple tasks with deadlines, and provide complete reports to the management. You should have a good grip on accounting, financial regulations, strong computer skills, and written communication skills.',
            'responsibilities' => '<ul>
                                    <li>Complying with the company, state, and country&rsquo;s accounting and financial regulations.&nbsp;</li>
                                    <li>Compiling, analyzing, and reporting financial data.</li>
                                    <li>Creating financial reports like profit and loss statements and balance sheets, etc.</li>
                                    <li>Presenting data to investors, managers, and other entities.</li>
                                    <li>Maintaining accurate financial reports. Performing audits and solving errors.</li>
                                    <li>Computing taxes. Being updated about changes related to finance and accounting. Helping management in decision-making</li>
                                    </ul>',
            'requirements' => '<ul>
                                <li>Complying with the company, state, and country&rsquo;s accounting and financial regulations.&nbsp;</li>
                                <li>Compiling, analyzing, and reporting financial data.</li>
                                <li>Creating financial reports like profit and loss statements and balance sheets, etc.</li>
                                <li>Presenting data to investors, managers, and other entities.</li>
                                <li>Maintaining accurate financial reports. Performing audits and solving errors.</li>
                                <li>Computing taxes. Being updated about changes related to finance and accounting. Helping management in decision-making</li>
                                </ul>',

        ]);

        Job::create([
            'employer_id' => 2,
            'jobFunction_id' => 3,
            'jobIndustry_id' => 5,
            'jobLocation_id' => 1,
            'title' => 'Architect',
            'type' => 'Full Time',
            'qualification' => 'Degree',
            'experience' => '2 years',
            'level' => 'Senior Level',
            'salary_currency' => 'ghs',
            'monthly_salary' => '5,400 - 6,000',
            'days_online' => '45',
            'available_openings' => '1',
            'summary' => 'We are looking for a trustworthy accountant to manage all our financial transactions, from fixed and variable expenses to budgets and bank deposits. They are expected to work with huge amounts of numerical data, manage multiple tasks with deadlines, and provide complete reports to the management. You should have a good grip on accounting, financial regulations, strong computer skills, and written communication skills.',
            'responsibilities' => '<ul>
                                    <li>Complying with the company, state, and country&rsquo;s accounting and financial regulations.&nbsp;</li>
                                    <li>Compiling, analyzing, and reporting financial data.</li>
                                    <li>Creating financial reports like profit and loss statements and balance sheets, etc.</li>
                                    <li>Presenting data to investors, managers, and other entities.</li>
                                    <li>Maintaining accurate financial reports. Performing audits and solving errors.</li>
                                    <li>Computing taxes. Being updated about changes related to finance and accounting. Helping management in decision-making</li>
                                    </ul>',
            'requirements' => '<ul>
                                <li>Complying with the company, state, and country&rsquo;s accounting and financial regulations.&nbsp;</li>
                                <li>Compiling, analyzing, and reporting financial data.</li>
                                <li>Creating financial reports like profit and loss statements and balance sheets, etc.</li>
                                <li>Presenting data to investors, managers, and other entities.</li>
                                <li>Maintaining accurate financial reports. Performing audits and solving errors.</li>
                                <li>Computing taxes. Being updated about changes related to finance and accounting. Helping management in decision-making</li>
                                </ul>',

        ]);

        Job::create([
            'employer_id' => 3,
            'jobFunction_id' => 2,
            'jobIndustry_id' => 1,
            'jobLocation_id' => 2,
            'title' => 'Office Manager',
            'type' => 'Full Time',
            'qualification' => 'Degree',
            'experience' => '3 years',
            'level' => 'Mid Level',
            'salary_currency' => 'ghs',
            'monthly_salary' => '2,400 - 3,000',
            'days_online' => '45',
            'available_openings' => '1',
            'summary' => 'We are looking for an Office Manager to organize and coordinate administration duties and office procedures. Your role is to create and maintain a pleasant work environment, ensuring high levels of organizational effectiveness, communication and safety.',
            'responsibilities' => '<ul>
                                    <li>Complying with the company, state, and country&rsquo;s accounting and financial regulations.&nbsp;</li>
                                    <li>Compiling, analyzing, and reporting financial data.</li>
                                    <li>Creating financial reports like profit and loss statements and balance sheets, etc.</li>
                                    <li>Presenting data to investors, managers, and other entities.</li>
                                    <li>Maintaining accurate financial reports. Performing audits and solving errors.</li>
                                    <li>Computing taxes. Being updated about changes related to finance and accounting. Helping management in decision-making</li>
                                    </ul>',
            'requirements' => '<ul>
                                <li>Complying with the company, state, and country&rsquo;s accounting and financial regulations.&nbsp;</li>
                                <li>Compiling, analyzing, and reporting financial data.</li>
                                <li>Creating financial reports like profit and loss statements and balance sheets, etc.</li>
                                <li>Presenting data to investors, managers, and other entities.</li>
                                <li>Maintaining accurate financial reports. Performing audits and solving errors.</li>
                                <li>Computing taxes. Being updated about changes related to finance and accounting. Helping management in decision-making</li>
                                </ul>',

        ]);

        Job::create([
            'employer_id' => 4,
            'jobFunction_id' => 5,
            'jobIndustry_id' => 10,
            'jobLocation_id' => 3,
            'title' => 'Management Consultant',
            'type' => 'Full Time',
            'qualification' => 'MBA',
            'experience' => '4 years',
            'level' => 'Management Level',
            'salary_currency' => 'ghs',
            'monthly_salary' => '4,200 - 4,800',
            'days_online' => '45',
            'available_openings' => '1',
            'summary' => 'We are looking for an Office Manager to organize and coordinate administration duties and office procedures. Your role is to create and maintain a pleasant work environment, ensuring high levels of organizational effectiveness, communication and safety.',
            'responsibilities' => '<ul>
                                    <li>Complying with the company, state, and country&rsquo;s accounting and financial regulations.&nbsp;</li>
                                    <li>Compiling, analyzing, and reporting financial data.</li>
                                    <li>Creating financial reports like profit and loss statements and balance sheets, etc.</li>
                                    <li>Presenting data to investors, managers, and other entities.</li>
                                    <li>Maintaining accurate financial reports. Performing audits and solving errors.</li>
                                    <li>Computing taxes. Being updated about changes related to finance and accounting. Helping management in decision-making</li>
                                    </ul>',
            'requirements' => '<ul>
                                <li>Complying with the company, state, and country&rsquo;s accounting and financial regulations.&nbsp;</li>
                                <li>Compiling, analyzing, and reporting financial data.</li>
                                <li>Creating financial reports like profit and loss statements and balance sheets, etc.</li>
                                <li>Presenting data to investors, managers, and other entities.</li>
                                <li>Maintaining accurate financial reports. Performing audits and solving errors.</li>
                                <li>Computing taxes. Being updated about changes related to finance and accounting. Helping management in decision-making</li>
                                </ul>',

        ]);


       
        //Accounting, Auditing and Finance:

        // Financial Analyst - Finance - Banking
        // Tax Accountant - Accounting - Tax Services
        // Financial Advisor - Financial Services - Investment Management
        // Auditor - Auditing - Public Accounting
        // Accounts Payable Clerk - Accounting - Business Services
        // Admin and Office:

        // Executive Assistant - Administration - Business Services
        // Office Manager - Administration - Business Services
        // Receptionist - Customer Service - Business Services
        // Data Entry Specialist - Data Entry - Business Services
        // Office Assistant - Administration - Business Services
        // Building and Architecture:

        // Architect - Architecture - Construction
        // Construction Manager - Management - Construction
        // Carpenter - Carpentry - Construction
        // Interior Designer - Design - Architecture
        // Project Manager - Management - Construction
        // Community and Social Services:

        // Social Worker - Social Services - Healthcare
        // Nonprofit Program Manager - Nonprofit - Social Services
        // Outreach Coordinator - Community Outreach - Nonprofit
        // Case Manager - Social Services - Healthcare
        // Community Organizer - Community Organizing - Nonprofit
        // Consulting and Strategy:

        // Management Consultant - Consulting - Management
        // Business
    }
}
