<?php

namespace App\Http\Livewire;

use ZxcvbnPhp\Zxcvbn;
use Livewire\Component;
use App\Models\Employer;
use App\Models\JobIndustry;
use Livewire\WithFileUploads;

class EmployerEdit extends Component
{

    use WithFileUploads;

    public $employer;
    public $jobIndustry_id; 
    public $company_name; 
    public $number_of_employees; 
    public $type_of_employer;
    public $website;
    public $contact_person; 
    public $notification_email;
    public $application_notifications; 
    public $country_code;
    public $phone_number; 
    public $country; 
    public $address;  
    public $position; 
    public $first_name; 
    public $last_name;
    public $username;
    public $personal_country_code; 
    public $personal_phone_number; 
    public $email;
    public $current_password;
    public $current_passwordStored; 
    public $password;
    public $password_confirmation;
    public $company_logo;

    public int $strengthScore = 0;
    public int $iteration = 0;

    public array $strengthLevels = [ 
        1 => 'Weak',
        2 => 'Fair',
        3 => 'Good',
        4 => 'Strong',
    ]; 

    public $currentView = 'company-details';


    public function mount(Employer $employer) 
    {
        $this->currentView = 'company-details';
        $this->employer = $employer;
        $this->jobIndustry_id = $employer->jobIndustry_id; 
        $this->company_name = $employer->company_name; 
        $this->number_of_employees = $employer->number_of_employees; 
        $this->type_of_employer = $employer->type_of_employer;
        $this->website = $employer->website;
        $this->contact_person = $employer->contact_person; 
        $this->notification_email = $employer->email; 
        $this->application_notifications = $employer->application_notifications;
        $this->country_code = $employer->country_code;
        $this->phone_number = $employer->phone_number; 
        $this->country = $employer->country; 
        $this->address = $employer->address;  
        $this->position = $employer->position; 
        $this->first_name = $employer->first_name;
        $this->last_name = $employer->last_name; 
        $this->username = $employer->email;
        $this->personal_country_code = $employer->personal_country_code;
        $this->personal_phone_number = $employer->personal_phone_number;
        $this->email = $employer->email;
        $this->current_passwordStored = $employer->password;
        $this->company_logo = $employer->company_logo;
    }

    public function updatedPassword($value) {
        $this->strengthScore = (new Zxcvbn())->passwordStrength($value)['score'];
    }

    public function setView($currentView) 
    {
        $this->currentView = $currentView;
    }

    public function updateCompanyDetails() 
    {
        $this->resetErrorBag();
        if ($this->currentView == 'company-details') {
            $this->validate([
                'jobIndustry_id' => 'required|integer|exists:job_industries,id',
                'company_name' => 'required',
                'number_of_employees' => 'required',
                'type_of_employer' => 'required',
                'website' => 'required',
                'contact_person' => 'required|min:4',
                'notification_email' => 'required',
                'application_notifications' => 'required',
                'country_code' => 'required',
                'phone_number' => 'required',
                'country' => 'required',
                'address' => 'required',
            ]);
        }


        $this->employer->update([
            'jobIndustry_id' => $this->jobIndustry_id,
            'company_name' => $this->company_name,
            'number_of_employees' => $this->number_of_employees,
            'type_of_employer' => $this->type_of_employer,
            'website' => $this->website,
            'contact_person' => $this->contact_person,
            'notification_email' => $this->notification_email,
            'application_notifications' => $this->application_notifications,
            'country_code' => $this->country_code,
            'phone_number' => $this->phone_number,
            'country' => $this->country,
            'address' => $this->address,
        ]);

        $this->emit('companyDetailsUpdated', 'Company details updated successfully!');
    }

    public function updatePersonalDetails() 
    {
        $this->resetErrorBag();
        if ($this->currentView == 'personal-details') {
            $this->validate([
                'username' => 'required',
                'position' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'personal_country_code' => 'required',
                'personal_phone_number' => 'required',
            ]);
        }

        $this->employer->update([
            'username' => $this->username,
            'position' => $this->position,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'personal_country_code' => $this->personal_country_code,
            'personal_phone_number' => $this->personal_phone_number,
        ]);

        $this->emit('personalDetailsUpdated', 'Personal details updated successfully!');
    }

    public function updateEmail()
    {
        $this->resetErrorBag();
        if ($this->currentView == 'email-details') {
                $this->validate([
                    'email' => 'required|email',
            ]);
        }

        $this->employer->update([
            'email' => $this->email,
         ]);

         $this->emit('emailUpdated', 'Email address updated successfully!');
    }

    public function updatePasswordDetails()
    {
        $this->resetErrorBag();
        if($this->currentView == 'password-details') {
            $this->validate([
                'current_password' => 'required|min:6',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|same:password',
            ]);
        }

       if ($this->current_password === $this->current_passwordStored) {
            $this->employer->update([
                'password' => $this->password,
            ]);

            $this->emit('passwordChanged', 'Password changed successfully');
       } elseif ($this->current_password !== $this->current_passwordStored) {
            $this->emit('passwordWrong', 'Current password does not match records');
       }  

       $this->reset(['current_password', 'password', 'password_confirmation']);
    }

    public function storeCompanyLogo() {
        $this->resetErrorBag();
        if ($this->currentView == 'company-logo-details') {
            $this->validate([
                'company_logo' => 'image|max:5120', //5MB Max
            ]);
        }

        $this->employer->update([
                'company_logo' => $this->company_logo->store('logos', 'public'),
        ]);

        $this->emit('setCompanyLogo', 'Company logo uploaded successfully!');
        $this->company_logo = null;
        $this->iteration++;
    }

    public function render()
    {
        return view('livewire.employer-edit', [
            'industries' => JobIndustry::all(),
        ]);
    }

}
