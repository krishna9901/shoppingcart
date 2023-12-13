@extends('layouts.frontend')


@section('content')


<div class="container">
        <h1>Product Details</h1>

        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <form method="post" action="{{ route('productform.submit') }}" id='prodform' enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" value='1'>
                 </div>

            <div class="form-group">
                <label for="description">Product description:</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

            <div class="form-group">
                <label for="image">Choose Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <!-- Add other form fields as needed -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>


    @endsection












 