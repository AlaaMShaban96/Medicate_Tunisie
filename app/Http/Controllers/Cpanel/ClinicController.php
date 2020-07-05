<?php

namespace App\Http\Controllers\Cpanel;

use App\Clinic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClinicController extends Controller
{
    public function index()
    {
     $clinics = Clinic::all();
     return view('cpanel/clinic/index',compact('clinics'));
    }
 
}
