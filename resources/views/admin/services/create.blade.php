@extends('layouts.apps')
@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Create Services') }}</div>

            <div class="card-body">
                <form action="/services/create" method="POST" enctype="multipart/form-data">
                        @csrf 
                    <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="details" name="details">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="best" class="col-md-4 col-form-label text-md-right">{{ __('Best') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="boolean" placeholder="best" name="best">
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