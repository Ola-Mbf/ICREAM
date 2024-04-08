<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoSystem;
use App\Models\Message;

class MessagesController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $message = Message::all();

        return view('admin.messages.index' , compact('message'));
    }    
}
