<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Job;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function updateProfile(Request $request)
    {
        $candidate = Candidate::whereId(auth()->user()->candidate->id)->first();
       
        $request->merge(['languages' => json_encode($request['languages'])]);

        $candidate->fill($request->input())->save();

        return redirect()->route('dashboard.index', 'profile');
    }

    public function apply (Job $job) {

        $job->candidates()->attach(auth()->user()->candidate->id);

        // \Mail::to($course->teacher->user)->send(new NewStudentInCourse($course, auth()->user()->name));

        return redirect()->route('dashboard.index', 'profile');;
    }


}
