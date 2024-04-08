@extends('layouts.apps')
@section('content')
<div class="container text-center">
 <h2 class="drop1">Clients</h2>
  <div class="table-responsive">
    <table  class="table table-bordered">
      <thead>
        <tr>
         <th>ID</th>
         <th>name</th>
         <th>opinion</th>
         <th>proffession</th>
         <th>image</th>
         <th>Controller</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clients as $client)
	        <tr>
	         <td>{{$client->id}}</td>
	         <td>{{$client->name }}</td>
           <td>{{$client->opinion }}</td>
           <td>{{$client->proffession }}</td>
           <td><img width="70" height="30" src="{{asset('upload/clients/'.$client->image)}}" alt=""></td>
	         <td> 
              <div class="btn-group">
		           <!--     <button type="button" class="btn btn-primary">Update</button> -->
			         <a class="btn btn-primary" href="/clients/edit/{{$client->id}}">Update</a>
		           <a class="btn btn-danger" href="/clients/delete/{{$client->id}}">Delete</a>			    
			        </div>
            </td>
	        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

 @endsection