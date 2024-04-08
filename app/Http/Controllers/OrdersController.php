<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoSystem;
use App\Models\Product;
use App\Models\Order;

class OrdersController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        
        $order =  Order::all();

        return view('admin.orders.index' , compact('order'));
    } 
    
    
    public function save_order(Request $request){
        //$info = InfoSystem::all();
        $product = Product::all();
        $order = new Order;
        $order->username = $request->username;
        $order->productname = $request->productname;
        $order->adress = $request->adress;
        $order->save();
        
        //return redirect()->back();
        return view('product', compact('product'));
    }
}
