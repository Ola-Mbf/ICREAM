@extends('layouts.apps')
@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Create Product') }}</div>

            <div class="card-body">
                <form action="/products/edit/{{$product->id}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                    <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="name" name="name" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="text" placeholder="price" name="price" value="{{ $product->price }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                       <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                        <div class="col-md-6">
                          <img width="70" height="30" src="{{asset('upload/products/'.$product->image)}}" alt="">
                           <input class="form-control" type="file" placeholder="image" name="image" value="{{ $product->image }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                       <label for="bestprice" class="col-md-4 col-form-label text-md-right">{{ __('Best price') }}</label>
                        <div class="col-md-6">
                           <input class="form-control" type="boolean" placeholder="best price" name="bestprice"  value="{{ $product->bestprice }}">
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