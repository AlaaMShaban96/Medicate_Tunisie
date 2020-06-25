<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Catogry;
use App\Service;
use App\Appointment;
use Illuminate\Http\Request;
use App\AppointmentAvailable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Session;


class AppointmentController extends Controller
{
    public function index(Request $request)
    { 
        // $request->session()->forget('appointmentAvailables');
        $x=$request->session()->get('appointmentAvailables');

       $appointmentAvailables=$x[0];

        $services = Service::all();
        $clinics  = Clinic::all();

        return view('booking.index', compact('services','clinics','appointmentAvailables'));
    }
    public function search(Request $request)
    {
        
        // dd();
        Session::forget('appointmentAvailables');
        
        if ($request->clinic_id != "" && $request->service_id == "") {
            
            $appointmentAvailables =  AppointmentAvailable::where('clinic_id',$request->clinic_id)->get();
           
        }elseif ($request->service_id != "" && $request->clinic_id == "") {

           $appointmentAvailables =  AppointmentAvailable::where('service_id',$request->service_id)->get();

        }else {

            $appointmentAvailables = AppointmentAvailable::where('clinic_id',$request->clinic_id)->where('service_id',$request->service_id)->get();

        }
        Session::push('appointmentAvailables', $appointmentAvailables);

        return redirect()->route('booking');
       
    }

    public function show(AppointmentAvailable $appointment)
    {
        Session::forget('appointmentAvailables');

       $catogrys = Catogry::all();

        return view('booking.appointment', compact('appointment','catogrys'));
    }

    public function store(AppointmentAvailable $appointment ,Request $request)
    {
      
        Appointment::create([
                'appointment_available_id'=>$appointment->id,
                'catogry_id'=>$request->catogry_id,
                'date'=>$request->date,
                'patient_id'=>1,
        ]);
        return "done";
    }
}
