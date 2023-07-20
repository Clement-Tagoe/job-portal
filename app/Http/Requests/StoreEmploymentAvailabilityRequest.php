<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmploymentAvailabilityRequest extends FormRequest
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
            'photo' => 'nullable|image|max:5120', //Max 5MB
            'professional_headline' => 'nullable',
            'highest_qualification' => 'required',
            'current_jobFunction_id' => 'required|exists:job_functions,id',
            'preferred_jobFunction_id' => 'required|exists:job_functions,id',
            'location_id' => 'required|exists:job_locations,id',
            'preferred_jobLocation_id' => 'required|exists:job_locations,id',
            'experience' => 'required',
            'work_type' => 'required',
            'availability' => 'required',
            'salary_currency' => 'nullable',
            'salary_amount' => 'nullable',
            'actively_looking_for_job' => 'nullable',
            'display_profile' => 'nullable',
            'willing_to_relocate' => 'nullable',
        ];
    }
}
