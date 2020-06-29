<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use App\News;
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
        $news= News::all();
      
        return view('index',compact('news'));
    }

   public function translater($lang)
   {
        Session::put('applocale', $lang);
    
         return Redirect::back();
   }

   public function api()
   {

    $client = new Client();

    $response = $client->post('http://www.medicateint.com/index.php/data2/getClinics');
    
    $result = $response->getBody()->getContents();
    
    return json_decode($result);   

    }
}
