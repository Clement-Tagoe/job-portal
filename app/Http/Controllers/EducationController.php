<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEducationRequest;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('job-seeker.education-index')
            ->with('educations', Auth::user()->educations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job-seeker.createProfile.education-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEducationRequest $request)
    {
        $userId = Auth::id();
        
        $formFields = $request->validated();

        $formFields['still_studying_this'] = $request->input('still_studying_this') == 'on' ? 1 : 0;

        $formFields['user_id'] = $userId;

        Education::create($formFields);

        return redirect()->route('job-seeker.profile')->with('success_message', 'Profile updated successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('job-seeker.createProfile.education-edit')
                ->with('education', $education);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEducationRequest $request, Education $education)
    {
        if ($education->user_id != Auth::id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validated();

        $formFields['still_studying_this'] = $request->input('still_studying_this') == 'on' ? 1 : 0;

        $education->update($formFields);

        return redirect()->route('job-seeker.profile')->with('success_message', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        if ($education->user_id != Auth::id()) {
            abort(403, 'Unauthorized Action');
        }

        $education->delete();

        return redirect()->route('job-seeker.profile')->with('success_message', 'Education deleted successfully');
    }
}
