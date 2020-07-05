<?php

namespace App\Http\Controllers\Cpanel;

use App\Diag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiagController extends Controller
{
    public function index()
   {
    $diags = Diag::all();
    return view('cpanel/diag/index',compact('diags'));
   }
}
