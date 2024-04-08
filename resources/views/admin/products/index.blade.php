@extends('layouts.apps')
@section('content')
<div class="container text-center mt-3">
 <h2 class="drop1">Products</h2>
   <div class="table-responsive">
        <table  class="table table-bordered">
           <thead>
               <tr>
                 <th>ID</th>
                 <th>name</th> 
                 <th>price</th>
                 <th>Image</th>
                 <th>Category</th>
	             <th>best price</th>
                 <th>Controller</th>

                </tr>
            </thead>
            <tbody>	
                @foreach($products as $product)
	                <tr>
	                 <td>{{$product->id}}</td>
	                 <td>{{$product->name}}</td> 
	                 <td>{{$product->price}}</td>
	                 <td><img width="70" height="30" src="{{asset('upload/products/'.$product->image)}}" alt=""></td>
	                 <td>{{!empty($product->category) ? $product->category->name:'' }}</td> 
		             <td>{{$product->bestprice}}</td>	
	 	             <td> 
						<div class="btn-group">
		                 
			             <a class="btn btn-primary" href="/products/edit/{{$product->id}}">Update</a>
			             <a class="btn btn-danger" href="/products/delete/{{$product->id}}">Delete</a>			    
			            </div>
                     </td>
	                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

 @endsection