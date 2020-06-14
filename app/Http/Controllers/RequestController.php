<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class RequestController extends Controller
{
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
}
