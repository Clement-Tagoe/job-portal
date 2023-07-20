<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JobFunction;
use App\Models\JobIndustry;
use Illuminate\Http\Request;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreExperienceRequest;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('job-seeker.experience-index')
                ->with('workExperiences', Auth::user()->workExperiences);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job-seeker.createProfile.experience-create')
            ->with('industries', JobIndustry::all())
            ->with('functions', JobFunction::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExperienceRequest $request)
    {
        $userId = Auth::id();
        
        $formFields = $request->validated();

        $formFields['no_work_experience'] = $request->input('no_work_experience') == 'on' ? 1 : 0;

        $formFields['currently_work_here'] = $request->input('currently_work_here') == 'on' ? 1 : 0;

        $formFields['user_id'] = $userId;

        WorkExperience::create($formFields);

        return redirect()->route('job-seeker.profile')->with('success_message', 'Profile updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkExperience $workExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkExperience $workExperience)
    {
        return view('job-seeker.createProfile.experience-edit')
            ->with('workExperience', $workExperience)
            ->with('industries', JobIndustry::all())
            ->with('functions', JobFunction::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreExperienceRequest $request, WorkExperience $workExperience)
    {
        if ($workExperience->user_id != Auth::id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validated();

        $formFields['no_work_experience'] = $request->input('no_work_experience') == 'on' ? 1 : 0;

        $formFields['currently_work_here'] = $request->input('currently_work_here') == 'on' ? 1 : 0;

        $workExperience->update($formFields);

        return redirect()->route('job-seeker.profile')->with('success_message', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkExperience $workExperience)
    {
        if ($workExperience->user_id != Auth::id()) {
            abort(403, 'Unauthorized Action');
        }

        $workExperience->delete();

        return redirect()->route('job-seeker.profile')->with('success_message', 'Work Experience deleted successfully');
    }
}
