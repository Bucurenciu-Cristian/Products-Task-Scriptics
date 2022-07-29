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
            ["products" => Product::latest()->paginate(3)]);
    }

    public function show()
    {
        return response("Salut", 404);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
