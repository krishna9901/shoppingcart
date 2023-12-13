@extends('layouts.frontend')

@section('content')

<div class="container mt-5">
    <h1>Edit Product</h1>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form method="post" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH') <!-- Use PATCH method for updates -->

        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
        </div>

        <div class="form-group">
            <label for="description">Product description:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}">
        </div>

        <div class="form-group">
            <label for="image">Choose Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <!-- Add other form fields as needed -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
