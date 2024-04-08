<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\InfoSystem;


class ServicesController extends Controller
{
    //

    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //parent::__construct();

    }

    

    public function create()
    {
    	return view('admin.services.create');
    }

    public function store(Request $request)
    {

        $service = new Service;
        $service->name  = $request->name ;
        $service->details  = $request->details ;
        $service->best  = $request->best ;
        if(isset($request->image)){
            $image_name = rand() . "." . $request->image->getClientOriginalExtension();
                $service->image = $image_name;
                $request->image->move('upload/services',$image_name);
                
            }
        $service->save();
        return redirect()->route('index-services');
    }


    public function index()
    {
        $services = Service::all();

        return view('admin.services.index' , compact('services'));

    }


    public function edit($id){

        $service = Service::find($id);

        return view('admin.services.edit' , compact('service'));
         

    }

    public function update($id , Request $request){
        $service = Service::find($id);
        if(isset($request->name)){
            $service->name = $request->name;            
        }
        if(isset($request->details)){
            $service->details = $request->details;            
        }
        if(isset($request->best)){
            $service->best = $request->best;            
        }
        if(isset($request->image)){
            $image_name = rand() . "." . $request->image->getClientOriginalExtension();
            $service->image = $image_name;
            $request->image->move('upload/services',$image_name);            
        }
        $service->save();
        return redirect()->route('index-services');
    }

    public function delete($id){

        $service = Service::find($id);
        $service->delete();
        return redirect()->route('index-services');

        
    }
}
