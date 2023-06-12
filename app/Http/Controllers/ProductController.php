<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            'products' => Product::all()
        ]);
    }

    public function show(Request $request) {
        $productId = $request->product_id;

        $product = Product::where('id', $productId)->first();

        if (! $product) {
            abort(404);
        }

        return $product;
    }

    public function delete(Request $request)
    {
        dd('Deleting Product ID: ' . $request->product_id);
    }

}
