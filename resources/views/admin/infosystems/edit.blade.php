@extends('layouts.apps')

@section('content')

<div class="container">

	<div class="container text-center">
		<h2>Info System</h2>
	</div>
	<form action="/infosystems/create" method="POST" enctype="multipart/form-data">
	<!-- for protect data -->
		@csrf
  
  <div class="input-container">
    
    <input class="input-field" type="text" placeholder="name" name="name" value="{{ $info->name }}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="text" placeholder="adress" name="adress" value="{{ $info->adress }}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="text" placeholder="phone_number" name="phone_number" value="{{$info->phone_number}}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="text" placeholder="opening_days" name="opening_days" value="{{$info->opening_days}}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="text" placeholder="opening_time" name="opening_time" value="{{$info->opening_time}}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="text" placeholder="closed_days" name="closed_days" value="{{$info->closed_days}}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="url" placeholder="twitter" name="twitter" value="{{$info->twitter}}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="url" placeholder="facebook" name="facebook" value="{{$info->facebook}}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="url" placeholder="linkedin" name="linkedin" value="{{$info->linkedin}}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="url" placeholder="instgram" name="instgram" value="{{$info->instgram}}">
  </div>

  <div class="input-container">
    
    <input class="input-field" type="url" placeholder="youtube" name="youtube" value="{{$info->youtube}}">
  </div>


  <button type="submit" class="btn">Update</button>
</form>

</div>

 @endsection