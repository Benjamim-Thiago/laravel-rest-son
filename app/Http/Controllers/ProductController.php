<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductRequest as Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $minutes = \Carbon\Carbon::now()->addMinutes(10);
        $products = \Cache::remember('api::products', $minutes, function () {
            return Product::all();
        });
        return $products;
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        \Cache::forget('api::products');
        $data = $request->all();
        $data['user_id'] = \Auth::id(); 
        return Product::create($data);
    }

   
    public function show(Product $product)
    {
        \Cache::forget('api::products');
        return $product;
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        \Cache::forget('api::products');
        $product->update($request->all());
        return $product;
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);
        \Cache::forget('api::products');
        $product->delete();
        return $product;
    }
}
