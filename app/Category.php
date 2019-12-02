<?php

namespace App;

use App\Offert;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $guarded = ['id'];

    public function offerts () {
		return $this->hasMany(Offert::class);
	}
}
