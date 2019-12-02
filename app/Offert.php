<?php

namespace App;

use App\Category;
use App\Company;
use App\Location;
use App\Proffesional;
use Illuminate\Database\Eloquent\Model;

class Offert extends Model
{
    protected $table = "offerts";
    protected $guarded = ['id'];

    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;


    public function pathAttachment () {
		return "/images/offerts/" . $this->picture;
	}

	public function getRouteKeyName() {
		return 'slug';
	}

	public function category () {
		return $this->belongsTo(Category::class)->select('id', 'name');
	}

	public function location () {
		return $this->belongsTo(Location::class)->select('id', 'name');
	}

	public function company () {
		return $this->belongsTo(Company::class)->select('id', 'name');
	}

	public function proffesional () {
    	return $this->belongsToMany(Proffesional::class);
    }
}
