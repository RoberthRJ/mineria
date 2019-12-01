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
}
