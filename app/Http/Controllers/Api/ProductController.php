<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET /api/products
    public function index(Request $request)
{
    $query = Product::query();

    if ($request->has('category')) {
        $query->where('category', $request->category);
    }

    return $query->get();
}

    // GET /api/products/{id}
    public function show($id)
    {
        return Product::find($id);
    }

    // POST /api/products/store
    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    // PUT /api/products/{id}
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return $product;
    }

    // DELETE /api/products/{id}
    public function destroy($id)
    {
        Product::find($id)->delete();

        return ['message' => 'Deleted'];
    }
}