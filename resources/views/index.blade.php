@extends('layouts.layouts')

@section('title') Product CRUD @endsection


@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-lg-12 mt-4">
            <div class="float-left">
                <h2 class="float-left">Add your product</h2>
            </div>

            <div class="float-right">
                <a class="btn btn-outline-info" href="">Create New Item</a>
            </div>
        </div>
        <br><br><br><br><br>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr class="">
                    <th width="5%">S/N</th>
                    <th width="15%">Product name</th>
                    <th width="10%">Product Code</th>
                    <th width="20%">Product Details</th>
                    <th width="20%">Product Logo</th>
                    <th width="30%">Action</th>
                </tr>
            </thead>
            <tbody class="align-items-center justify-content-center">
            @foreach($products as $key => $product)
                <tr class="text-center align-items-center">
                    <td>{{$key+1}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_code}}</td>
                    <td>{{$product->details}}</td>
                    <td>{{$product->logo}}</td>
                    <td>
                        <a href="" class="btn btn-outline-primary">Show</a>
                        <a href="" class="btn btn-outline-secondary">Edit</a>
                        <a href="" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
