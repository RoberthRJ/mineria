<?php

namespace App;

use App\Offert;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";
    protected $guarded = ['id'];

    public function offerts () {
		return $this->hasMany(Offert::class);
	}

	public function user () {
		return $this->belongsTo(User::class);
	}
}
