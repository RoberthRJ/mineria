<?php

namespace App;

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
		return $this->belongsTo(App\Company::class)->select('id', 'name');
	}

	public function consumers () {
    	return $this->belongsToMany(App\Consumer::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
