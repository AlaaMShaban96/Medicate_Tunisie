<?php

namespace App\Http\Controllers\Cpanel;

use Image;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
       $news= News::all();
        return view('cpanel/news/index',compact('news'));
    }

    public function show(News $news)
    {
        # code...
    }
    public function create()
    {
        return view('cpanel/news/addNews');
    }
    public function store(Request $request)
    {
      
        $request->validate([

            'titel_ar' => 'required',
            'description_ar' => 'required',
            'titel_en' => 'required',
            'description_en' => 'required',
            'titel_fr' => 'required',
            'description_fr' => 'required',
         
        ]);
        


        if ($request->has('image')) {

        $request->request->add(['img_path'=> $this->uploadeImage( $request)]) ;

        }
           
        News::create( $request->all());
        return  redirect('/cpanel/news');
    }

    public function edit(News $news)
    {
        return view('cpanel/news/editNews',compact('news'));
    }
    public function update(News $news , Request $request)
    {
        $request->validate([

            'titel_ar' => 'required',
            'description_ar' => 'required',
            'titel_en' => 'required',
            'description_en' => 'required',
            'titel_fr' => 'required',
            'description_fr' => 'required',
         
        ]);
        
        
        if ($request->has('image')) {
            
            $news->img_path = $this->uploadeImage( $request);
        }
       
        $news->titel_ar= $request->titel_ar;
        $news->description_ar= $request->description_ar;
        $news->titel_en= $request->titel_en;
        $news->description_en= $request->description_en;
        $news->titel_fr= $request->titel_fr;
        $news->description_fr= $request->description_fr;
        $news->save();
        
        return  redirect('/cpanel/news');
        
    }
    public function destroy(News $news )
    {
        $news->delete();
        return  redirect('/cpanel/news');
    }
    public function cancel()
    {
        return  redirect('/cpanel/news');
    }
    private function uploadeImage(Request $request)
    {
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads', $imageName, 'public');
    
        return $path;
    }
}
