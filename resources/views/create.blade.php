@extends('layouts.layouts')

@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-lg-12 mt-4">
            <div class="float-left">
                <h2 class="float-left">Add your product</h2>
            </div>

            <div class="float-right">
                <a class="btn btn-outline-info" href="{{ route('index') }}">Back</a>
            </div>
        </div>
        <br><br><br><br><br>
    </div>

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <input type="text" name="product_name" class="form-control" placeholder="Enter product name">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product Code:</strong>
                    <input type="text" name="product_code" class="form-control" placeholder="Enter product name">
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Details:</strong>
                    <textarea class="form-control" name="details" rows="10" cols="10"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb">
                <div class="form-group">
                    <strong>Product Image:</strong>
                    <input type="file" name="logo">
                </div>
            </div>
            <br><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
