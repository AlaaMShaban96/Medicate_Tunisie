<?php

namespace App\Http\Controllers\Cpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyServiceController extends Controller
{
    public function index()
    {
        $companyServices = CompanyService::all();
        return view('cpanel/company-service/index',compact('companyServices')); 
    }
}
