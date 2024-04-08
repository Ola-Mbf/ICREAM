<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;
use App\Models\InfoSystem;


class ChefsController extends Controller
{
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
    	return view('admin.chefs.create');
    }

    public function store(Request $request)
    {

        $chef = new Chef;
        $chef->full_name  = $request->full_name ;
        $chef->designation  = $request->designation;
        if(isset($request->image)){
            $image_name = rand() . "." . $request->image->getClientOriginalExtension();
                $chef->image = $image_name;
                $request->image->move('upload/chefs',$image_name);
                
            }
        $chef->save();
        return redirect()->route('index-chefs');
    }


    public function index()
    {
        $chefs = Chef::all();

        return view('admin.chefs.index' , compact('chefs'));

    }


    public function edit($id){

        $chef = Chef::find($id);

        return view('admin.chefs.edit' , compact('chef'));
         

    }

    public function update($id , Request $request){
        $chef = Chef::find($id);
        if(isset($request->full_name)){
            $chef->full_name = $request->full_name;            
        }
        if(isset($request->designation)){
            $chef->designation = $request->designation;            
        }
        if(isset($request->image)){
            $image_name = rand() . "." . $request->image->getClientOriginalExtension();
                $chef->image = $image_name;
                $request->image->move('upload/chefs',$image_name);            
        }
        $chef->save();
        return redirect()->route('index-chefs');
    }

    public function delete($id){

        $chef = Chef::find($id);
        $chef->delete();
        return redirect()->route('index-chefs');

        
    }
}
