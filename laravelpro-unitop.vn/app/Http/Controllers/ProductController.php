<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function show()
    {
        $products = Product::all();
        // return $products;
        return view('product.show', compact('products'));
    }
}
