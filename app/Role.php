<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";
    protected $guarded = ['id'];

    const ADMIN = 1;
    const COMPANY = 2;
    const PROFFESIONAL = 3;
}
