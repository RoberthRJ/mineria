<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $jobs = Job::orderBy('created_at')->paginate(10);
        return view('job.list', compact('jobs'));
    }

    public function show(Job $job)
    {
        $job->load([
            'company' => function ($q) {
                $q->select('id', 'user_id', 'title', 'links', 'biography', 'slug');
            },
            'province' => function ($q) {
                $q->select('id', 'department_id', 'province');
            },
            'province.department',
            'company.user',
            'jobType'
        ])->get();

        $related = $job->relatedJobs();

        return view('job.show', compact('job', 'related'));
    }

    public function categories()
    {
        $categories = Category::with('subcategories')->get();
        return view('category.index', compact('categories'));
    }
}
