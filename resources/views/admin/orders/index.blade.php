@extends('layouts.apps')
@section('content')
<div class="container text-center">
 <h2 class="drop1">Orders</h2>
  <div class="table-responsive">
   <table  class="table table-bordered">
     <thead>
       <tr>
         <th>ID</th>
         <th>user name</th>
         <th>Product</th>
         <th>Adress</th>         
        </tr>
      </thead>
      <tbody>
        @foreach($order as $order)
         <tr>
	         <td>{{$order->id}}</td>
	         <td>{{$order->username}}</td>
           <td>{{$order->productname}}</td>
           <td>{{$order->adress}}</td>	         	 	   
	        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

 @endsection