<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoSystem;

class InfoSystemsController extends Controller
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
    	return view('admin.infosystems.create');
    }

    public function store(Request $request)
    {

        $info = new InfoSystem;
        $info->name  = $request->name ;
        $info->adress  = $request->adress ;
        $info->phone_number = $request->phone_number ;
        $info->opening_days = $request->opening_days ;
        $info->opening_time  = $request->opening_time ;
        $info->closed_days  = $request->closed_days ;
        $info->twitter  = $request->twitter ;
        $info->facebook  = $request->facebook ;
        $info->linkedin  = $request->linkedin ;
        $info->instgram  = $request->instgram ;
        $info->youtube  = $request->youtube ;
        $info->save();
        return redirect()->route('index-infos');
    }


    public function index()
    {
        $infos = InfoSystem::all();

        return view('admin.infosystems.index' , compact('infos'));

    }


    public function edit($id){

        $info = InfoSystem::find($id);

        return view('admin.infosystems.edit' , compact('info'));
         

    }

    public function update($id , Request $request){
        $info = InfoSystem::find($id);
        if(isset($request->name)){
            $info->name = $request->name;            
        }
        if(isset($request->adress)){
            $info->adress = $request->adress;            
        }
        if(isset($request->phone_number)){
            $info->phone_number = $request->phone_number;            
        }
        if(isset($request->opening_days)){
            $info->opening_days = $request->opening_days;            
        }
        if(isset($request->opening_time)){
            $info->opening_time = $request->opening_time;            
        }
        if(isset($request->closed_days)){
            $info->closed_days = $request->closed_days;            
        }
        if(isset($request->twitter)){
            $info->twitter = $request->twitter;            
        }
        if(isset($request->facebook)){
            $info->facebook = $request->facebook;            
        }
        if(isset($request->linkedin)){
            $info->linkedin = $request->linkedin;            
        }
        if(isset($request->instgram)){
            $info->instgram = $request->instgram;            
        }
        if(isset($request->youtube)){
            $info->youtube = $request->youtube;            
        }
        $info->save();
        return redirect()->route('index-infos');
    }

    public function delete($id){

        $info = InfoSystem::find($id);
        $info->delete();
        return redirect()->route('index-infos');

        
    }
}