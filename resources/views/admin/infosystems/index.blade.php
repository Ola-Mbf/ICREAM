@extends('layouts.apps')
@section('content')
<div class="container text-center">
	<h2 class="drop1">Info System</h2>
  <div class="table-responsive">
    <table  class="table table-bordered">
      <thead>
        <tr>
         <th>ID</th>
         <th>name</th>
         <th>adress</th>
         <th>phone_number</th>
         <th>opening_days</th>
         <th>opening_time</th>
         <th>closed_days</th>
         <th>twitter</th>
         <th>facebook</th>
         <th>linkedin</th>
         <th>instgram</th>
         <th>youtube</th>
         <th>Controller</th>
        </tr>
      </thead>
      <tbody>
        @foreach($infos as $info)
          <tr>
           <td>{{$info->id}}</td>
           <td>{{$info->name}}</td>
           <td>{{$info->adress}}</td>
           <td>{{$info->phone_number}}</td>
           <td>{{$info->opening_days}}</td>
           <td>{{$info->opening_time}}</td>
           <td>{{$info->closed_days}}</td>
           <td>{{$info->twitter}}</td>
           <td>{{$info->facebook}}</td>
           <td>{{$info->linkedin}}</td>
           <td>{{$info->instgram}}</td>
           <td>{{$info->youtube}}</td>
           <td> 
              <div class="btn-group">
	             <!--     <button type="button" class="btn btn-primary">Update</button> -->
		         	 <a class="btn btn-primary" href="/infosystems/edit/{{$info->id}}">Update</a>
		         	 <a class="btn btn-danger" href="/infosystems/delete/{{$info->id}}">Delete</a>
		  			  </div>
            </td>
	        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
 @endsection
