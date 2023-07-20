<?php

namespace App\Http\Livewire;

use ZxcvbnPhp\Zxcvbn;
use Livewire\Component;
use App\Models\Employer;
use App\Models\JobIndustry;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class EmployerCreate extends Component
{
    public $jobIndustry_id; 
    public $company_name; 
    public $number_of_employees; 
    public $type_of_employer;
    public $website;
    public $contact_person; 
    public $notification_email; 
    public $country_code;
    public $phone_number; 
    public $country; 
    public $address;  
    public $position; 
    public $first_name; 
    public $last_name;
    public $personal_country_code; 
    public $personal_phone_number; 
    public $email;
    public $password; 
    public $passwordConfirmation;

    public int $strengthScore = 0;

    public array $strengthLevels = [ 
        1 => 'Weak',
        2 => 'Fair',
        3 => 'Good',
        4 => 'Strong',
    ]; 

    public $totalSteps = 2;
    public $currentStep = 1;

    public function mount() {
        $this->currentStep = 1;
    }

    public function render()
    {
        $industries = JobIndustry::all();

        return view('livewire.employer-create', [
            'industries' => $industries,
        ]);
    }

    public function updatedPassword($value) {
        $this->strengthScore = (new Zxcvbn())->passwordStrength($value)['score'];
    }

    public function increaseStep () {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;

        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep () {
        $this->resetErrorBag();
        $this->currentStep--;

        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep = 1;
        }
    }

    public function validateData () {
        if ($this->currentStep == 1) {
            $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => ['required', 'email', Rule::unique('employers', 'email')],
                'position' => 'required',
                'password' => 'required|min:6',
                'passwordConfirmation' => 'required|same:password',
                'personal_country_code' => 'required',
                'personal_phone_number' => 'required',
            ]);
        }
        
    }

    public function storeEmployer () {
        $this->resetErrorBag();
        if ($this->currentStep == 2) {
            $this->validate([
                'jobIndustry_id' => 'required|integer|exists:job_industries,id',
                'company_name' => 'required',
                'number_of_employees' => 'required',
                'type_of_employer' => 'required',
                'website' => 'required',
                'contact_person' => 'required',
                'notification_email' => 'required',
                'country_code' => 'required',
                'phone_number' => 'required',
                'country' => 'required',
                'address' => 'required',
            ]);
        }

        //Hash Password
        $this->password = bcrypt($this->password);

        $employer = Employer::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'position' => $this->position,
            'password' => $this->password,
            'personal_country_code' => $this->personal_country_code,
            'personal_phone_number' => $this->personal_phone_number,
            'jobIndustry_id' => $this->jobIndustry_id,
            'company_name' => $this->company_name,
            'number_of_employees' => $this->number_of_employees,
            'type_of_employer' => $this->type_of_employer,
            'website' => $this->website,
            'contact_person' => $this->contact_person,
            'notification_email' => $this->notification_email,
            'country_code' => $this->country_code,
            'phone_number' => $this->phone_number,
            'country' => $this->country,
            'address' => $this->address,
        ]);

        //Login
        Auth::guard('employer')->login($employer);

        $this->emit('accountCreated', 'Your account has been created successfully.');

        return redirect()->route('employers.dashboard', $employer);
    }
}
