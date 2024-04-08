<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller

{
    public function __construct()
    {
        
        //parent::__construct();

    }
    public function index(){
        
        
        return view ('index');
    }

    public function about(){
        
       
        return view ('about');
    }
    
    public function contact(){
       
        return view ('contact');

    }
     
    public function gallery(){
        
       
        return view ('gallery');
    }

    public function product(){
        
        return view ('product');
    }

    public function service(){
        
        return view ('service');
    }
}
