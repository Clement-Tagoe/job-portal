<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmploymentAvailabilityRequest;
use App\Models\User;
use App\Models\JobFunction;
use App\Models\JobIndustry;
use App\Models\JobLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function profile() 
    {
        $user = Auth::user();
        
        return view('job-seeker.profile')
        ->with('user', $user)
        ->with('locations', JobLocation::all())
        ->with('industries', JobIndustry::all())
        ->with('functions', JobFunction::all());
    }

    public function dashboard()
    {
        $user = Auth::user();
        
        return view('job-seeker.dashboard')
        ->with('user', $user)
        ->with('locations', JobLocation::all())
        ->with('industries', JobIndustry::all())
        ->with('functions', JobFunction::all());
    }

    public function employmentAvailabilityEdit() 
    {
        $user = Auth::user();

        return view('job-seeker.createProfile.employment-edit')
            ->with('user', $user)
            ->with('locations', JobLocation::all())
            ->with('functions', JobFunction::all());
    }

    public function employmentAvailabilityUpdate(StoreEmploymentAvailabilityRequest $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $formFields = $request->validated();

        $formFields['actively_looking_for_job'] = $request->input('actively_looking_for_job') == 'on' ? 1 : 0;

        $formFields['display_profile'] = $request->input('display_profile') == 'on' ? 1 : 0;

        $formFields['willing_to_relocate'] = $request->input('willing_to_relocate') == 'on' ? 1 : 0;

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('profile-photos', 'public');
        }

        $user->update($formFields);

        return redirect()->route('job-seeker.profile')->with('success_message', 'Profile updated successfully');
    }   

    public function aboutMeEdit() {
        $user = Auth::user();

        return view('job-seeker.createProfile.about-me-edit')
                ->with('user', $user);
    }

    public function aboutMeUpdate(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $formFields = $request->validate([
            'about_me' => 'nullable|max:2000',
        ]);

        $user->update($formFields);

        return redirect()->route('job-seeker.profile')->with('success_message', 'Profile updated successfully');
    }


    public function associationsCreate()
    {
        return view('job-seeker.createProfile.association-create');
    }

    public function certificationsCreate()
    {
        return view('job-seeker.createProfile.certification-create');
    }

    public function coverLetterCreate()
    {
        return view('job-seeker.createProfile.cover-letter-create');
    }

    public function resumeUpload()
    {
        return view('job-seeker.createProfile.resume-create');
    }
}
