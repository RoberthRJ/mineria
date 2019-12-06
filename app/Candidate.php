<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = "candidates";
    protected $guarded = ['id'];

    protected $fillable = [
        'user_id', 'name'
    ];

    public function user () {
		return $this->belongsTo(User::class);
	}
}
