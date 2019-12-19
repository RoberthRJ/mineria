<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Job;
use App\Mail\NewApplicationToJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        \Mail::to($job->company->user)->send(new NewApplicationToJob( $job , auth()->user()->candidate));

        return back()->with('message', "Has posulado exitosamente");
    }

    public function dashboard($word)
    {
        if ($word == 'applications') {

            $applications = Job::whereHas('candidates', function($query) {
                $query->where('candidate_id', auth()->user()->candidate->id);
            })->orderBy('created_at', 'desc')->paginate(10);

            return view('partials.dashboard.index', compact('word', 'applications'));
        }

        return view('partials.dashboard.index', compact('word'));
    }
}
