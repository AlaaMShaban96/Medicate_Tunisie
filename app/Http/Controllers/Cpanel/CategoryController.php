<?php

namespace App\Http\Controllers\Cpanel;

use App\Item;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('cpanel.yourHeailte.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.yourHeailte.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name_ar' => 'required',
            'description_ar' => 'required',

            'name_en' => 'required',
            'description_en' => 'required',

            'name_fr' => 'required',
            'description_fr' => 'required',
         
        ]);
       
        Item::create([
            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,
            'description_fr'=>$request->description_fr,
        ]);

        $item=Item::orderBy('id','desc')->first();

        if (!$request->image == null) {
            Category::create([
                'name_ar'=>$request->name_ar,
                'name_en'=>$request->name_en,
                'name_fr'=>$request->name_fr,
                'item_id'=>$item->id,
                
                'img_path'=>$this->uploadeImage( $request),
             ]);
            }else {
                Category::create([
                    'name_ar'=>$request->name_ar,
                    'name_en'=>$request->name_en,
                    'name_fr'=>$request->name_fr,
                    'item_id'=>$item->id,
                 ]);
            }
       
       

       
        

       return redirect()->back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('cpanel.yourHeailte.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
       
        $request->validate([

            'name_ar' => 'required',
            'description_ar' => 'required',

            'name_en' => 'required',
            'description_en' => 'required',

            'name_fr' => 'required',
            'description_fr' => 'required',
         
        ]);
      
        $category->item->description_ar = $request->description_ar;
        $category->item->description_en = $request->description_en;
        $category->item->description_fr = $request->description_fr;
        $category->item->save();
        if (!$request->image == null) {
            
                $category->name_ar=$request->name_ar;
                $category->name_en=$request->name_en;
                $category->name_fr=$request->name_fr;
    
                $category->img_path=$this->uploadeImage( $request);
             
            }else {
                
                    $category->name_ar=$request->name_ar;
                    $category->name_en=$request->name_en;
                    $category->name_fr=$request->name_fr;
                 
            }
       
            $category->save();

            
      
         
            return redirect('/cpanel/your-heailte');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        
        unlink($category->img_path);
        $category->item->delete();
        $category->delete();
        return redirect()->back();
    }

    private function uploadeImage(Request $request)
    {
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads', $imageName, 'public');
    
        return $path;
    }
}
