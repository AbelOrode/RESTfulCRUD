@extends('layouts.layouts')

@section('title')Welcome @endsection

@section('content')

    <div class="container">
        <div class="row">
            <a class="btn btn-info" href="{{ route('index') }}">Add items</a>
        </div>
    </div>

    @endsection
