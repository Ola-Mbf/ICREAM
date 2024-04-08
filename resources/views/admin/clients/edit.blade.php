@extends('layouts.apps')
@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Update Client') }}</div>

            <div class="card-body">
                <form action="/clients/edit/{{$client->id}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                    <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="name" name="name " value="{{ $client->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="opinion" class="col-md-4 col-form-label text-md-right">{{ __('Opinion') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="opinion" name="opinion" value="{{ $client->opinion }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="proffession" class="col-md-4 col-form-label text-md-right">{{ __('Proffession') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="proffession" name="proffession" value="{{ $client->proffession }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                        <div class="col-md-6">
                          <img width="70" height="30" src="{{asset('upload/clients/'.$client->image)}}" alt="">
                           <input class="form-control" type="file" placeholder="image" name="image" value="{{ $client->image }}">
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

 




