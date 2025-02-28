<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Auth;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.user.profile.work-exp-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'company_location' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'responsibilities' => ['required', 'string', 'max:300'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required_if:current_job,null', 'date'],
            'current_job' => ['required_if:end_date,null']
        ], [
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
            'responsibilities.max' => 'Responsibilities must not be greater than 255 characters',
            'start_date.required' => 'Start date date is required',
            'start_date.date' => 'Start date date must be a date',
            'end_date.required_if' => 'End date date is required',
            'end_date.date' => 'End date date must be a date',
            'current_job.accepted' => 'Current job value must be \'on\' or null'
        ]);

        try {
            if ($request->boolean('current_job')) {
                $validated_data['end_date'] = null;
                Arr::forget($validated_data, 'current_job');
            }

            $validated_data['user_id'] = Auth::user()->id;

            $work_exp = WorkExperience::create($validated_data);

            return json_response(success: true, message: "Work Experience Added", view: view('components.user.profile.work-exp-card', ['data' => $work_exp])->render(), status: 201);
        } catch (\Throwable $th) {
            return json_response(success: false, message: "Work Experience Add Failed! Try Again", errors: $th->getMessage(), status: 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
