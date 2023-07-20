<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class JobSkills extends Component
{
    public $userJobSkills;
    public $user;
    public $skill;

    protected $listeners = ['refreshJobSkills' => '$refresh'];

    public function mount(User $user) 
    {
        $this->user = Auth::user();
        $this->userJobSkills = Auth::user()->job_skills;
    }

    public function storeSkill()
    {
        if(!is_null($this->skill)) {
            $this->user->update([
                'job_skills' => $this->userJobSkills .','.$this->skill,
            ]);  
        } 
        $this->emit('refreshJobSkills');
        $this->reset('skill');
    }

    public function render()
    {
        return view('livewire.job-skills');
    }
}
