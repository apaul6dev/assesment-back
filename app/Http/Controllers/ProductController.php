<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

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

    public function show($id)
    {
        $contact = Product::find($id);
        return response()->json($contact);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json('Product updated');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(' deleted!');
    }
}
