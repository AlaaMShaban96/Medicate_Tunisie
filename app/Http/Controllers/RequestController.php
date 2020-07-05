<?php

namespace App\Http\Controllers;

use App\Diag;
use App\Clinic;
use App\Doctor;
use App\Pharmacy;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function __construct()
    {
       
    }
    public function addDoctor(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'phoneNo' => 'required',
            'email' => 'required',
            'address' => 'required',
            'area' => 'required',
            'city' => 'required',
         
        ]);
        Doctor::create($request->all());
        
        $data=[
            'msg'=>'think you bro'
        ];
        return response()->json($data, 200);
    }

    public function addParmacy(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'phoneNo' => 'required',
            'contactName' => 'required',
            'email' => 'required',
            'address' => 'required',
            'area' => 'required',
            'city' => 'required',
            'state' => 'required',
            'regCode' => 'required',
         
        ]);
        // dd($request->all());
        Pharmacy::create($request->all());
        
        $data=[
            'msg'=>'think you bro'
        ];
        return response()->json(200);
    }
    public function addDiag(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'phoneNo' => 'required',
            'contactName' => 'required',
            'email' => 'required',
            'address' => 'required',
            'area' => 'required',
            'city' => 'required',
            'state' => 'required',
           
         
        ]);
        // dd($request->all());
        Diag::create($request->all());
        
       
        return response()->json(200);
    }

    public function addClinic(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'phoneNo' => 'required',
            'contactName' => 'required',
            'license' => 'required',
            'email' => 'required',
            'address' => 'required',
            'area' => 'required',
            'city' => 'required',
            'state' => 'required',
           
         
        ]);
        // dd($request->all());
        Clinic::create($request->all());
        
       
        return response()->json(200);
    }
}
