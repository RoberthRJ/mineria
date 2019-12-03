<?php

namespace App\Http\Controllers;

use App\Offert;
use App\Mail\NewPostulation;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function mail(Offert $offert, Request $request)
    {
    	return new NewPostulation($company, $request);
    }
}
