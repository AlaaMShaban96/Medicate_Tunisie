<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
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
}
