<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\WorkExpRequest;
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
    public function store(WorkExpRequest $request)
    {
        $validated_data = $request->validated();

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
