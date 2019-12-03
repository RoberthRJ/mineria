<?php

namespace App;

use App\Offert;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = "locations";
    protected $guarded = ['id'];

    public function getRouteKeyName() {
		return 'slug';
	}

	public function offerts () {
		return $this->hasMany(Offert::class);
	}
}
