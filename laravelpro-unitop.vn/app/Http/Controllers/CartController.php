<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    function show()
    {
        return view('cart.show');
    }

    function add(Request $request, $id)
    {
        $product = Product::find($id);

        // Cart::destroy();

        Cart::add(
            [
                'id' => $product->id,
                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->price,
                'options' => ['thumbnail' => $product->thumbnail]
            ]
        );

        // return Cart::content();
        return redirect('cart/show');
    }

    function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart/show');
    }

    function destroy()
    {
        Cart::destroy();
        return redirect('cart/show');
    }

    function update(Request $request)
    {
        // dd($request->all());
        $data = $request->get('qty');
        foreach ($data as $k => $v) {
            Cart::update($k, $v);
        }
        return redirect('cart/show');
    }
}
