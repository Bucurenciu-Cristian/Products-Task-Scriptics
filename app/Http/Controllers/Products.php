<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Products extends Controller
{


    // INDEX
    // SHOW
    // CREATE
    // STORE
    // EDIT
    // UPDATE
    // DESTROY

    public function index()
    {
        return view('products.index',
            ["products" => Product::latest()->simplePaginate(5)]
        );
    }

    public function show(Product $product)
    {
        return view('products.show',['product'=> $product]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
//            'title' => ['required', Rule::unique('products','title')],
            'title' => 'required',
            'description' => 'required',
            'price' => ['required','numeric'],
            'quantity' => ['required','numeric'],
        ]);
        Product::create($formFields);
        return redirect('/')->with('message', 'Product added succesfully');
    }

    public function update(Request $request, Product $product)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $product->update($formFields);
        return redirect('/')->with('message', 'Product Updated Successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/')->with('message', 'Product deleted successfully');
    }
    //Show Edit Form
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
}
