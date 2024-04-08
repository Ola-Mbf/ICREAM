@extends('layouts.apps')
@section('content')
<div class="container text-center mt-3">
  <h2 class="drop1">Categoris</h2>
    <div class="table-responsive">
       <table  class="table table-bordered">
            <thead>
                <tr>
                 <th>ID</th>
                 <th>name</th>
                 <th>Controller</th>
                 </tr>
            <thead>
            <tbody>
                @foreach($categories as $category)
	                <tr>
	                 <td>{{$category->id}}</td>
	                 <td>{{$category->name }}</td>
	                 <td> 
						<div class="btn-group">
			                 <!--     <button type="button" class="btn btn-primary">Update</button> -->
			             <a class="btn btn-primary" href="/categories/edit/{{$category->id}}">Update</a>
			             <a class="btn btn-danger" href="/categories/delete/{{$category->id}}">Delete</a>
			    
			            </div>
                     </td>
	                </tr>
                @endforeach
            <tbody>
        </table>
    </div>
</div>

 @endsection