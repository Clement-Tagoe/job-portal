<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
            'jobIndustry_id' => 'required|integer|exists:job_industries,id',
            'jobFunction_id' => 'required|integer|exists:job_functions,id',
            'jobLocation_id' => 'required|integer|exists:job_locations,id',
            'title' => 'required|max:150',
            'type' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'level' => 'required',
            'salary_currency' => 'required',
            'monthly_salary' => 'required',
            'days_online' => 'required',
            'available_openings' => 'required',
            'summary' => 'required',
            'responsibilities' => 'required',
            'requirements' => 'required',
        ];
    }
}
