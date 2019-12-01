<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offert extends Model
{
    protected $table = "offerts";
    protected $guarded = ['id'];

    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;
}
