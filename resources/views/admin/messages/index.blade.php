@extends('layouts.apps')
@section('content')
<div class="container text-center">
 <h2 class="drop1">Messages</h2>
  <div class="table-responsive">
   <table  class="table table-bordered">
     <thead>
       <tr>
         <th>ID</th>
         <th>name</th>
         <th>email</th>
         <th>subject</th>
         <th>message</th>
        </tr>
      </thead>
      <tbody>
        @foreach($message as $message)
         <tr>
	         <td>{{$message->id}}</td>
	         <td>{{$message->name}}</td>
	         <td>{{$message->email}}</td>	    
	         <td>{{$message->subject}}</td>
	         <td>{{$message->message}}</td>	 	   
	        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

 @endsection