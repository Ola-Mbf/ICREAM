@extends('layouts.apps')
@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Info system') }}</div>

            <div class="card-body">
                <form action="/infosystems/create" method="POST">
                        @csrf 
                    <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('Adress') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="adress" name="adress">
                        </div>
                    </div>
                     <div class="form-group row">
                       <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="phone number" name="phone_number">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="opening_days" class="col-md-4 col-form-label text-md-right">{{ __('Opening days') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="opening days" name="opening_days">
                        </div>
                    </div>                   
                    <div class="form-group row">
                       <label for="opening_time" class="col-md-4 col-form-label text-md-right">{{ __('Opening time') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="opening_time" name="opening_time">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="closed_days" class="col-md-4 col-form-label text-md-right">{{ __('Closed days') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="closed_days" name="closed_days">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('twitter') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="url" placeholder="twitter" name="twitter">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('facebook') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="url" placeholder="facebook" name="facebook">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="linkedin" class="col-md-4 col-form-label text-md-right">{{ __('linkedin') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="url" placeholder="linkedin" name="linkedin">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="instgram" class="col-md-4 col-form-label text-md-right">{{ __('instgram') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="url" placeholder="instgram" name="instgram">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="youtube" class="col-md-4 col-form-label text-md-right">{{ __('youtube') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="url" placeholder="youtube" name="youtube">
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