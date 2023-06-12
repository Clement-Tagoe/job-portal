<?php

namespace Database\Seeders;

use App\Models\Employer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employer::create([
            'jobIndustry_id' => 6,
            'company_name' => 'Global Training Institute',
            'number_of_employees' => '5-10',
            'type_of_employer' => 'Direct-Employer',
            'website' => 'gti.edu.gh',
            'contact_person' => 'Enoch',
            'country_code' => 'Ghana (+233)',
            'phone_number' => '0244123432',
            'country' => 'Ghana',
            'address' => 'H/No. 1, Community 9 Tema',
            'username' => 'enoch@gmail.com',
            'position' => 'Middle Management: Supervisor / Unit Head',
            'first_name' => 'Enoch',
            'last_name' => 'Williams',
            'personal_country_code' => 'Ghana (+233)',
            'personal_phone_number' => '0244123432',
            'email' => 'enoch@gmail.com',
            'password' => '12345678',
        ]);

        Employer::create([
            'jobIndustry_id' => 15,
            'company_name' => 'Nestle Ghana Limited',
            'number_of_employees' => '201-500',
            'type_of_employer' => 'Direct-Employer',
            'website' => 'nestleghanaltd.org',
            'contact_person' => 'Rebecca',
            'country_code' => 'Ghana (+233)',
            'phone_number' => '0244897120',
            'country' => 'Ghana',
            'address' => 'No.11 Tetelu Avenue, Accra',
            'username' => 'rebecca@gmail.com',
            'position' => 'Senior Management: Head Of Department / Team Lead',
            'first_name' => 'Rebecca',
            'last_name' => 'Blankson',
            'personal_country_code' => 'Ghana (+233)',
            'personal_phone_number' => '0244897120',
            'email' => 'rebecca@gmail.com',
            'password' => '12345678',
        ]);

        Employer::create([
            'jobIndustry_id' => 13,
            'company_name' => 'MTN Ghana Limited',
            'number_of_employees' => '201-500',
            'type_of_employer' => 'Direct-Employer',
            'website' => 'mtnghana.org',
            'contact_person' => 'Leslie',
            'country_code' => 'Ghana (+233)',
            'phone_number' => '0244000000',
            'country' => 'Ghana',
            'address' => 'H/No. 1, Community 9 Tema',
            'username' => 'leslie@gmail.com',
            'position' => 'Middle Management: Supervisor / Unit Head',
            'first_name' => 'Leslie',
            'last_name' => 'Davids',
            'personal_country_code' => 'Ghana (+233)',
            'personal_phone_number' => '0244000000',
            'email' => 'leslie@gmail.com',
            'password' => '12345678',
        ]);

        Employer::create([
            'jobIndustry_id' => 21,
            'company_name' => 'Axis Shipping & Logistics Limited',
            'number_of_employees' => '26-50',
            'type_of_employer' => 'Direct-Employer',
            'website' => 'gti.edu.gh',
            'contact_person' => 'Vida',
            'country_code' => 'Ghana (+233)',
            'phone_number' => '0200345987',
            'country' => 'Ghana',
            'address' => 'H/No. 1, Community 9 Tema',
            'username' => 'vida@gmail.com',
            'position' => 'Middle Management: Supervisor / Unit Head',
            'first_name' => 'Vida',
            'last_name' => 'Johnson',
            'personal_country_code' => 'Ghana (+233)',
            'personal_phone_number' => '0200345987',
            'email' => 'vida@gmail.com',
            'password' => '12345678',
        ]);

        
    }
}
