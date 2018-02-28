<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductRequest as Request;

class ProductController extends Controller
{
    
    public function index()
    {
        return Product::all();
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = \Auth::id(); 
        return Product::create($data);
    }

   
    public function show(Product $product)
    {
        return $product;
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return $product;
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);
        $product->delete();
        return $product;
    }
}
