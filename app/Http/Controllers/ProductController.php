<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Get all products
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Save a product
     */
    public function store(Request $request)
    {
        $product = new Product([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'qty' => $request->input('qty'),
        ]);
        $product->save();
        return response()->json('Product created!');
    }
    
    /**
     * Get a product
     */
    public function show($id)
    {
        $contact = Product::find($id);
        return response()->json($contact);
    }

    /**
     * Update a product
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json('Product updated');
    }

    /**
     * delete product
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(' deleted!');
    }
}
