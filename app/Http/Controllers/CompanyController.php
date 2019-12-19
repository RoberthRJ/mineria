<?php

namespace App\Http\Controllers;

use App\Company;
use App\Helpers\Helper;
use App\Http\Requests\EmailRequest;
use App\Job;
use App\Mail\NewPostulation;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function mail(Offert $offert, Request $request)
    {
    	return new NewPostulation($company, $request);
    }

    public function register()
    {
    	return view('auth.register2');
    }

    public function updateProfile(Request $request)
    {
        $company = Company::whereId(auth()->user()->company->id)->first();
        $company->fill($request->input())->save();

        return redirect()->route('dashboard.index', 'profile');
    }

    public function dashboard($word)
    {
        return view('partials.dashboard.index', compact('word'));
    }

    public function show(Company $company)
    {
        $company->load([
            'sector' => function ($q) {
                $q->select('id', 'sector');
            },
            'jobs' => function ($q) {
                $q->latest()->take(3);
            },
        ])->get();

        return view('company.show', compact('company'));
    }

    public function fastMail(Job $job, EmailRequest $request)
    {
        $cv = Helper::uploadFile('cv', 'files');
        dd($cv);
        dd($request->all());
        $request->merge(['cv' => $cv]);
        dd($request->all());
        $request->merge(['job_id' => $job['id']]);
        dd($request->all());
        DB::create($request->input());

        \Mail::to(auth()->user()->company)->send(new NewPostulation($job, $request));

        return back()->with('status', 'Has postulado correctamente');
    }

    public function jobs(Company $company)
    {
        $jobs = Job::whereCompanyId($company->id)->get();
        return view('company.jobs', compact('jobs'));
    }
}
