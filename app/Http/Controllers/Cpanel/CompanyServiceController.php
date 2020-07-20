<?php

namespace App\Http\Controllers\Cpanel;
use Image;
use App\CompanyService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CompanyServiceController extends Controller
{
    public function index()
    {
        $companyServices = CompanyService::all();
        return view('cpanel/company-service/index',compact('companyServices')); 
    }

    public function create()
    {
        return view('cpanel/company-service/addCompanyService'); 
    }
    public function store(Request $request)
    {
        $request->validate([

            'titel_ar' => 'required',
            'descrption_ar' => 'required',
            'details_ar' => 'required',
            'titel_en' => 'required',
            'descrption_en' => 'required',
            'details_en' => 'required',
            'titel_fr' => 'required',
            'descrption_fr' => 'required',
            'details_fr' => 'required',
        ]);
        if ($request->has('image')) {

            $request->request->add(['img_path'=> $this->uploadeImage( $request)]) ;
    
            }
        CompanyService::create( $request->all());
        return  redirect('/cpanel/company-service');

    }
    public function edit(CompanyService $service)
    {
        return view('cpanel/company-service/editCompanyService',compact('service'));
    }

    public function update(CompanyService $service, Request $request)
    {        
        $request->validate([

            'titel_ar' => 'required',
            'descrption_ar' => 'required',
            'details_ar' => 'required',
            'titel_en' => 'required',
            'descrption_en' => 'required',
            'details_en' => 'required',
            'titel_fr' => 'required',
            'descrption_fr' => 'required',
            'details_fr' => 'required',
        ]);
        if ($request->has('image')) {
             
            $service->img_path = $this->uploadeImage( $request);
        }
        $service->titel_ar= $request->titel_ar;
        $service->descrption_ar= $request->descrption_ar;
        $service->details_ar= $request->details_ar;
        $service->titel_en= $request->titel_en;
        $service->descrption_en= $request->descrption_en;
        $service->details_en= $request->details_en;
        $service->titel_fr= $request->titel_fr;
        $service->descrption_fr= $request->descrption_fr;
        $service->details_fr= $request->details_fr;

        $service->save();
        
        return  redirect('/cpanel/company-service');
        
    }
    public function destroy(CompanyService $service)
    {
        $service->delete();
        return  redirect('/cpanel/company-service');
    }
    public function cancel()
    {
        return  redirect('/cpanel/company-service');
    }
    private function uploadeImage(Request $request)
    {
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads', $imageName, 'public');
    
        return $path;
    }
}
