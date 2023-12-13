<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }



    public function showForm()
    {
        return view('Productform');
    }

    public function processForm(Request $request)
    {
        // Handle form submission logic here
       

    $product = new Product();
    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->description = $request->input('description');

   

    if($request->hasfile('image'))
    {
        $file = $request->file('image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('prodimage/Images/', $filename);
        $product->image = $filename;
    }






    // Assign other fields here

    $product->save();

    // Save the data to the database
    

        // Redirect back or to a success page
        //return redirect()->back()->with('message', 'Form submitted successfully!');
        return redirect('productList');
    }









} 