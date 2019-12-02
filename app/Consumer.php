<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    protected $table = "consumers";
    protected $guarded = ['id'];

    public function company () {
		return $this->belongsTo(App\Company::class);
	}

	public function services () {
    	return $this->belongsToMany(App\Service::class);
    }
}
