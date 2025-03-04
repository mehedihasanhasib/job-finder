<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class WorkExpRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => ['required', 'string', 'max:255'],
            'company_location' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'responsibilities' => ['required', 'string', 'max:1000'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required_if:current_job,null', 'date'],
            'current_job' => ['required_if:end_date,null']
        ];
    }

    public function messages(): array
    {
        return [
            'company_name.required' => 'Company name is required',
            'company_name.string' => 'Company name must be a string',
            'company_name.max' => 'Company name must not be greater than 255 characters',
            'company_location.required' => 'Company location is required',
            'company_location.string' => 'Company location must be a string',
            'company_location.max' => 'Company location must not be greater than 255 characters',
            'designation.required' => 'Designation is required',
            'designation.string' => 'Designation must be a string',
            'designation.max' => 'Designation must not be greater than 255 characters',
            'responsibilities.required' => 'Responsibilities is required',
            'responsibilities.string' => 'Responsibilities must be a string',
            'responsibilities.max' => 'Responsibilities must not be greater than 1000 characters',
            'start_date.required' => 'Start date date is required',
            'start_date.date' => 'Start date date must be a date',
            'end_date.required_if' => 'End date date is required',
            'end_date.date' => 'End date date must be a date',
            'current_job.accepted' => 'Current job value must be \'on\' or null'
        ];
    }
}
