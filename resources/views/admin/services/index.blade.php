@extends('layouts.apps')
@section('content')
<div class="container text-center">
  <h2 class="drop1">Services</h2>
    <div class="table-responsive">
      <table  class="table table-bordered">
        <thead>
            <tr>
             <th>ID</th>
             <th>name</th>
             <th>details</th>
             <th>best</th>
             <th>image</th>
             <th>Controller</th>
            </tr>
        </thead>
        <tbody>
          @foreach($services as $service)
	        <tr>
	         <td>{{$service->id}}</td>
	         <td>{{$service->name }}</td>
	         <td>{{$service->details }}</td>
	         <td>{{$service->best}}</td>
	         <td><img width="70" height="30" src="{{asset('upload/services/'.$service->image)}}" alt=""></td>
	         <td> 
			    <div class="btn-group">
			     <!--     <button type="button" class="btn btn-primary">Update</button> -->
			     <a class="btn btn-primary" href="/services/edit/{{$service->id}}">Update</a>
			     <a class="btn btn-danger" href="/services/delete/{{$service->id}}">Delete</a>			    
			    </div>
             </td>
	        </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>

 @endsection