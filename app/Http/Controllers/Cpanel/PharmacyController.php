<?php

namespace App\Http\Controllers\Cpanel;

use App\Pharmacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PharmacyController extends Controller
{
   public function index()
   {
    $pharmacys = Pharmacy::all();
    return view('cpanel/pharmacy/index',compact('pharmacys'));
   }
}
