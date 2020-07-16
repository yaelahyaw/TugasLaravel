@extends('layouts.app')

@section('content')
    <div style="margin-left: 40%">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 style="font-weight: bold">Show Product</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Name:</strong>
                {{$product->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{$product->detail}}
            </div>
        </div>
        <a href="{{route('products.index')}}" class="btn btn-primary" style="margin-left: 50px">Go Back</a>
    </div>
</div>
@endsection