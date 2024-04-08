<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\InfoSystem;


class ProductsController extends Controller
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
        $products = Product::all();

        return view('admin.products.index' , compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
    	
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        //Process image : 
        if(isset($request->image)){
            $image_name = rand() . "." . $request->image->getClientOriginalExtension();
                $product->image = $image_name;
                $request->image->move('upload/products',$image_name);
                
            }
        $product->category_id = $request->category_id;
        $product->bestprice = $request->bestprice;
        $product->save();
        
         return redirect()->route('index-products');
        // return $request;
    }

    
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
       // return view('program');
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update($id , Request $request){
        $product = Product::find($id);
        if(isset($request->name)){
            $product->name = $request->name;            
        }
        if(isset($request->price)){
            $product->price = $request->price;            
        }
        if(isset($request->image)){
            $image_name = rand() . "." . $request->image->getClientOriginalExtension();
                $product->image = $image_name;
                $request->image->move('upload/products',$image_name);
                           
        }
        if(isset($request->bestprice)){
            $product->bestprice = $request->bestprice;            
        }
        $product->save();
        return redirect()->route('index-products');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('index-products');
    }
}
