<?php

namespace App;

use App\Candidate;
use App\Category;
use App\Company;
use App\Job;
use App\JobType;
use App\Province;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    protected $guarded = ['id'];

    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;

    public function getRouteKeyName() {
		return 'slug';
	}

	public function category () {
		return $this->belongsTo(Category::class)->select('id', 'category');
	}

	public function province () {
		return $this->belongsTo(Province::class)->select('id', 'department_id', 'province');
	}

	public function company () {
		return $this->belongsTo(Company::class);
	}

	public function proffesional () {
    	return $this->belongsToMany(Candidate::class);
    }

    public function jobType () {
		return $this->belongsTo(JobType::class);
	}

    public function relatedJobs () {
		return Job::with('company', 'province')
			->whereSubcategoryId($this->subcategory_id)
			->where('id', '!=', $this->id)
			->latest()
			->limit(2)
			->get();
	}
}
