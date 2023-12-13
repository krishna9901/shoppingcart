@extends('layouts.app')



@section('content')



<!-- Main Content Section -->
<div class="container mt-4">
        <h2>Welcome to Our Shopping Cart  </h2>
        <p>Add to cart means The action of adding an item to the virtual purchasing order . </p>
        <!-- Add your content here -->



        <!-- Image Cards Section -->
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                <img src="{{ asset('img/pic1.jfif') }}" class="w-full max-h-60" alt="Product 1">

                    <div class="card-body">
                        <h5 class="card-title"> Camera</h5>
                        <p class="card-text">Device for recording an image of an object on a light-sensitive surface. It uses film or electronics to make a picture of something.</p>
                        <!-- <a href="#" class="btn btn-primary">View Product</a> -->
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                <img src="{{ asset('img/pic4.jfif') }}" class=" w-full max-h-60 " alt="Product 2">

                    <div class="card-body">
                        <h5 class="card-title">watch </h5>
                        <p class="card-text">Watches provide the time of day, giving at least the hour and minute, and often the second</p>
                        <!-- <a href="#" class="btn btn-primary">View Product</a> -->
                    </div>
                </div>
            </div>

  <!-- Card 3 -->
  <div class="col-md-4 mb-4">
                <div class="card">
                <img src="{{ asset('img/pic2.jfif') }}" class=" w-full max-h-60 " alt="Product 3">

                    <div class="card-body">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text">A laptop is a personal computer that can be easily moved and used in a variety of locations. </p>
                        <!-- <a href="#" class="btn btn-primary">View Product</a> -->
                    </div>
                </div>
            </div>


            <!-- Add more cards as needed -->
        </div>

    </div>











    </div>

    @endsection