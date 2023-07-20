<?php

namespace App\Http\Livewire;

use App\Models\User;
use ZxcvbnPhp\Zxcvbn;
use Livewire\Component;
use App\Models\JobFunction;
use App\Models\JobLocation;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class JobSeekerCreate extends Component
{

    use WithFileUploads;
    
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $date_of_birth;
    public $dob_day;
    public $dob_month;
    public $dob_year;
    public $gender;
    public $nationality;
    public $location_id;
    public $country_code;
    public $mobile_number;
    public $highest_qualification;
    public $current_jobFunction_id;
    public $experience;
    public $availability;
    public $resume;
    public $career_tips = false;
    public $job_alerts = false;

    public int $strengthScore = 0;

    public array $strengthLevels = [
        1 => 'Weak',
        2 => 'Fair',
        3 => 'Good',
        4 => 'Strong',
    ];

    public $totalSteps = 2;
    public $currentStep = 1;

    protected $messages = [
        'location_id.required' => 'The location field is required',
        'dob_day.required' => 'The day field is required',
        'dob_month.required' => 'The month field is required',
        'dob_year.required' => 'The year field is required',
    ];

    public function mount() {
        $this->currentStep = 1;
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
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => 'required|min:6',
                'dob_day' => 'required',
                'dob_month' => 'required',
                'dob_year' => 'required',
                'gender' => 'required',
                'nationality' => 'required',
                'location_id' => 'required|integer|exists:job_locations,id',
                'country_code' => 'required',
                'mobile_number' => 'required',
            ]);
        }
        
    }

    public function storeJobSeeker () {
        $this->resetErrorBag();
        if ($this->currentStep == 2) {
            $this->validate([
                'highest_qualification' => 'required',
                'current_jobFunction_id' => 'required|integer|exists:job_functions,id',
                'experience' => 'required',
                'availability' => 'required',
                'resume' => 'nullable|file|mimes:pdf,doc,docx,rtf|max:10240', //10MB
            ]);
        }

        //Hash Password
        $this->password = bcrypt($this->password);

        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => $this->password,
            'date_of_birth' => $this->dob_year.'-'.$this->dob_month.'-'.$this->dob_day,
            'gender' => $this->gender,
            'nationality' => $this->nationality,
            'location_id' => $this->location_id,
            'country_code' => $this->country_code,
            'mobile_number' => $this->mobile_number,
            'highest_qualification' => $this->highest_qualification,
            'current_jobFunction_id' => $this->current_jobFunction_id,
            'experience' => $this->experience,
            'availability' => $this->availability,
            'resume' => $this->resume !== null ? $this->resume->store('resumes', 'public') : null,
            'career_tips' => $this->career_tips == 'checked' ? true : false,
            'job_alerts' => $this->job_alerts == 'checked' ? true : false,
        ]);

        //Login
        Auth::login($user);

        return redirect()->route('job-seeker.dashboard', $user)->with('success_message', 'Your account has been created successfully.');
    }

    public function render()
    {
        $locations = JobLocation::all();
        $functions = JobFunction::all();

        return view('livewire.job-seeker-create', [
            'locations' => $locations,
            'functions' => $functions,
        ]);
    }
}
