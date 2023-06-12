<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employer.index')
                ->with('employers', Employer::with('jobIndustry')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
           
    }

    /**
     * Show employers dashboard.
     */
    public function dashboard(Employer $employer)
    {
        return view('employer.dashboard')
                    ->with('employer', $employer);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employer $employer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        //
    }
}
