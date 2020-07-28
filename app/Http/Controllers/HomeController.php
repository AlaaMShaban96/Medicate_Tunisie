<?php

namespace App\Http\Controllers;
use App\News;
use App\Partner;
use GuzzleHttp\Client;
use App\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
  
    protected $EMAIL="ala96ala96@gmail.com";

    public function __construct()
    {
        // Session::forget('appointmentAvailables');

    }
    public function index()
    { 
        $news= News::all()->take(10);
        $partners =Partner::all();
        $companyServices = CompanyService::all()->sortBy('id');
        return view('index',compact('news','companyServices','partners'));
    }
  
   public function translater($lang)
   {
        Session::put('applocale', $lang);
    
         return Redirect::back();
   }
   public function yourHealth(Request $request )
   {
       $class =$request->x;
       return view('yourHealth',compact('class'));
   }
   

   public function api()
   {

    $client = new Client();

    $response = $client->post('http://www.medicateint.com/index.php/data2/getClinics');
    
    $result = $response->getBody()->getContents();
    
    return json_decode($result);   

    }
    public function sendComplaint(Request $request)
   {
        $request->validate([

            'name' => 'required',
            'cardnumber' => 'required',
            'mobileNo' => 'required',
            'email' => 'required',
            'aboutcomplaints' => 'required',
            'message' => 'required',
        
        ]);
        $this->send('تقديم شكوى','complaint',$request);
        Session::flash('message', "تم إرسال شكوتك بنجاح مسيتم الرد عليك في اقرب وقت ممكن"); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
   }
    public function sendInquiry(Request $request)
   {
        $request->validate([

            'name' => 'required',
            'cardnumber' => 'required',
            'mobileNo' => 'required',
            'email' => 'required',
            'aboutinquiry' => 'required',
            'message' => 'required',
        
        ]);
        $this->send('تقديم إستفسار','inquiry',$request);
        Session::flash('message', "تم إرسال إستفسارك بنجاح مسيتم الرد عليك في اقرب وقت ممكن"); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
   }

    public function sendScam(Request $request)
   { 
     
        $request->validate([

            'name' => 'required',
            'cardnumber' => 'required',
            'descriptionUcondition' => 'required',
            'report' => 'required',
            'message' => 'required',
        
        ]);
        // dd("done");
        try { 
            
            $this->send('إبلاغ عن إحتيال','scam',$request);
          
        } catch (\Throwable $th) {
            dd($th);
        }
        
        Session::flash('message', "تم إرسال بلاغك بنجاح مسيتم الرد عليك في اقرب وقت ممكن , ونحنو أسفون لما حصل "); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
   }

    public function sendSuggestion(Request $request)
   { 
     
        $request->validate([

            'name' => 'required',
            'cardnumber' => 'required',
            'mobileNo' => 'required',
            'email' => 'required',
            'drone' => 'required',
            'message' => 'required',
        
        ]);
        // dd("done");
        try { 
            
            $this->send('تقديم إقتراح','suggestion',$request);
          
        } catch (\Throwable $th) {
            dd($th);
        }
        
        Session::flash('message', "تم إرسال إقتراحك بنجاح  "); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
   }
//     
    private function send($titel,$page,$request)
    {
        $email=$this->EMAIL;
        Mail::send("emails.$page",compact('request'), function($message) use ($email , $titel)   {

            $message->to($email)->subject($titel);
            
            });
    }
}
