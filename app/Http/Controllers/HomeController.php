<?php

namespace App\Http\Controllers;
use App\News;
use App\Partner;
use GuzzleHttp\Client;
use App\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
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
}
