@extends('layouts.apps')
@section('content')
<div class="container text-center mt-3">
  <h2 class="drop1">Chefs</h2>
  <div class="table-responsive">
    <table  class="table table-bordered">
      <thead>
        <tr>
         <th>ID</th>
         <th>name</th>
         <th>designation</th>
         <th>image</th>
         <th>Controller</th>
        </tr>
      </thead>
      <tbody>
        @foreach($chefs as $chef)
	       <tr>
	         <td>{{$chef->id}}</td>
	         <td>{{$chef->full_name }}</td>
           <td>{{$chef->designation }}</td>
           <td><img width="70" height="30" src="{{asset('upload/chefs/'.$chef->image)}}" alt=""></td>
	         <td> 
             <div class="btn-group">
		           <!--     <button type="button" class="btn btn-primary">Update</button> -->
		           <a class="btn btn-primary" href="/chefs/edit/{{$chef->id}}">Update</a>
		           <a class="btn btn-danger" href="/chefs/delete/{{$chef->id}}">Delete</a>			    
			        </div>
            </td>
	        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

 @endsection