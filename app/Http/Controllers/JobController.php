<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobFunction;
use App\Models\JobIndustry;
use App\Models\JobLocation;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jobs.index')
                ->with('locations', JobLocation::all())
                ->with('industries', JobIndustry::all())
                ->with('functions', JobFunction::all())
                ->with('jobs', Job::with('jobLocation', 'jobFunction', 'jobIndustry')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create')
                ->with('locations', JobLocation::all())
                ->with('industries', JobIndustry::all())
                ->with('functions', JobFunction::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $formFields = $request->validated();

        $formFields['employer_id'] = Auth::user()->id;

        Job::create($formFields);

        return redirect()->route('jobs.index')->with('success_message', 'Job posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show')
                ->with('job', $job)
                ->with('locations', JobLocation::all())
                ->with('industries', JobIndustry::all())
                ->with('functions', JobFunction::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit')
                ->with('job', $job)
                ->with('locations', JobLocation::all())
                ->with('industries', JobIndustry::all())
                ->with('functions', JobFunction::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreJobRequest $request, Job $job)
    {
        $formFields = $request->validated();

        $job->update($formFields);

        return redirect()->route('jobs.show', [$job]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
