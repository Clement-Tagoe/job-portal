<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperienceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'jobIndustry_id' => 'required|exists:job_industries,id',
            'jobFunction_id' => 'required|exists:job_functions,id',
            'employer' => 'required',
            'no_work_experience' => 'nullable|boolean',
            'job_title' => 'required',
            'job_level' => 'required',
            'country' => 'required',
            'monthly_salary' => 'required',
            'work_type' => 'required',
            'city' => 'required',
            'start_month' => 'required',
            'start_year' => 'required',
            'end_month' => 'required',
            'end_year' => 'required',
            'currently_work_here' => 'nullable|boolean',
            'job_responsibilities' => 'required|min:50',
        ];
    }
}
