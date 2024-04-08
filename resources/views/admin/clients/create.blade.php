@extends('layouts.apps')
@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Create Client') }}</div>

            <div class="card-body">
                <form action="/clients/create" method="POST" enctype="multipart/form-data">
                        @csrf 
                    <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="opinion" class="col-md-4 col-form-label text-md-right">{{ __('Opinion') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="opinion" name="opinion">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="proffession" class="col-md-4 col-form-label text-md-right">{{ __('Proffession') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="proffession" name="proffession">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="file" placeholder="image" name="image">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection