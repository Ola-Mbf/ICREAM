<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\InfoSystem;


class ClientsController extends Controller
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
    	return view('admin.clients.create');
    }

    public function store(Request $request)
    {

        $client = new Client;
        $client->name  = $request->name ;
        $client->opinion  = $request->opinion ;
        $client->proffession  = $request->proffession;
        if(isset($request->image)){
            $image_name = rand() . "." . $request->image->getClientOriginalExtension();
                $client->image = $image_name;
                $request->image->move('upload/clients',$image_name);
                
            }
        $client->save();
        return redirect()->route('index-clients');
    }


    public function index()
    {
        $clients = Client::all();

        return view('admin.clients.index' , compact('clients'));

    }


    public function edit($id){

        $client = Client::find($id);

        return view('admin.clients.edit' , compact('client'));
         

    }

    public function update($id , Request $request){
        $client = Client::find($id);
        if(isset($request->name)){
            $client->name = $request->name;            
        }
        if(isset($request->opinion)){
            $client->opinion = $request->opinion;            
        }
        if(isset($request->proffession)){
            $client->proffession = $request->proffession;            
        }
        if(isset($request->image)){
            $image_name = rand() . "." . $request->image->getClientOriginalExtension();
            $client->image = $image_name;
            $request->image->move('upload/clients',$image_name);            
        }
        $client->save();
        return redirect()->route('index-clients');
    }

    public function delete($id){

        $client = Client::find($id);
        $client->delete();
        return redirect()->route('index-clients');

        
    }
}
