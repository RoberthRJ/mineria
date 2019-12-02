<?php

namespace App;

use App\Company;
use App\Consumer;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    protected $guarded = ['id'];

    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;

    public function pathAttachment () {
        return "/images/services/" . $this->picture;
    }

    public function company () {
		return $this->belongsTo(Company::class)->select('id','user_id', 'title');
	}

	public function consumers () {
    	return $this->belongsToMany(Consumer::class);
    }

    public function location () {
        return $this->belongsTo(Location::class)->select('id', 'department', 'province');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
