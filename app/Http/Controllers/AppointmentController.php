<?php

namespace App\Http\Controllers;

use App\Day;
use App\Clinic;
use App\Doctor;
use App\Catogry;
use App\Service;
use App\Appointment;
use Illuminate\Http\Request;
use App\AppointmentAvailable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class AppointmentController extends Controller
{
    public function index(Request $request)
    { 
        // $request->session()->forget('appointmentAvailables');
        $x=$request->session()->get('appointmentAvailables');

       $appointmentAvailables=$x[0];

        $services = Service::all();
        $days = Day::all();
        $clinics  = Clinic::all();

        return view('booking.index', compact('services','clinics','appointmentAvailables','days'));
    }
    public function search(Request $request)
    {
       
        // if ($request->doctor_name != "") {
        //     dd("here");
        //     # code...
        // }
       
        // $appointmentAvailables= "";
        Session::forget('appointmentAvailables');
        
        if ($request->clinic_id != "" && $request->service_id == "" && $request->doctor_name == "" ) {
            
            $appointmentAvailables =  AppointmentAvailable::where('clinic_id',$request->clinic_id)->get();
           
        }else if ($request->service_id != "" && $request->clinic_id == "" && $request->doctor_name == ""  ) {

           $appointmentAvailables =  AppointmentAvailable::where('service_id',$request->service_id)->get();

        }else if ($request->service_id == "" && $request->clinic_id == "" && $request->doctor_name != "" ){

            $search=$request->doctor_name;
    
            $appointmentAvailables = AppointmentAvailable::with('doctor')->whereHas('doctor', function($query) use ($search){
                   $query->where('name', 'LIKE', '%'.$search.'%'); })->get();
        }else {
          
            
            $appointmentAvailables = AppointmentAvailable::where('clinic_id',$request->clinic_id)->where('service_id',$request->service_id)->get();
            
           
           

            
        }

// dd( $appointmentAvailables);
        Session::push('appointmentAvailables', $appointmentAvailables);

        return redirect()->route('booking');
       
    }

    public function show(AppointmentAvailable $appointment)
    {
        Session::forget('appointmentAvailables');
        
       $catogrys = Catogry::all();
       $info=array();
       foreach ($appointment->days as $day) {
        array_push($info, $day->id);
       }



setcookie("xx", implode(",", $info));



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
