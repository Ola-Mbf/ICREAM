@extends('layouts.apps')
@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Update Chef') }}</div>

            <div class="card-body">
                <form action="/chefs/edit/{{$chef->id}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                    <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="name" name="full_name" value="{{ $chef->full_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="designation" name="designation"  value="{{ $chef->designation }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                        <div class="col-md-6">
                          <img width="70" height="30" src="{{asset('upload/chefs/'.$chef->image)}}" alt="">
                           <input class="form-control" type="file" placeholder="name" name="image"  value="{{ $chef->image }}">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>   
@endsection


  

 
