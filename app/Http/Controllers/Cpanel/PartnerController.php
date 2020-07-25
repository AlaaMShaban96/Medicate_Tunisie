<?php

namespace App\Http\Controllers\Cpanel;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners= Partner::all();
        return view('cpanel/partner/index',compact('partners'));
    }
    public function show(Partner $partner)
    {
        # code...
    }
    public function edit(Partner $partner)
    {
        return view('cpanel/partner/editPartner',compact('partner'));
    }
    public function update(Request $request,Partner $partner)
    {
        $request->validate([
            'width' => 'required',
        ]);

        if ($request->has('logo')) {
            
            $partner->img_path= $this->uploadeImage( $request);
        }
        
        $partner->width=  $request->width;

        $partner->save();
         return redirect('/cpanel/partner');

    }
    
    public function create()
    {
        return view('cpanel/partner/addPartner');
    }
    public function store(Request $request)
    {
        $request->validate([

            'logo' => 'required',
            'width' => 'required',
        ]);
        Partner::create([
            'img_path'=> $this->uploadeImage( $request),
            'width'=>  $request->width,
        ]);
        return view('cpanel/partner/addPartner');
       
    }
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return  redirect('cpanel/partner');
    }

    private function uploadeImage(Request $request)
    {
        $imageName = time().".png";

        $path ="storage/". $request->file('logo')->storeAs('uploads', $imageName, 'public');
    
        return $path;
    }
}
