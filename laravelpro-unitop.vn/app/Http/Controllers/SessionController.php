<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function add(Request $request)
    {
        // $request->session()->put('username', 'dungken2112');
        session(['user_login' => 'dungken2112']); // helper session
    }

    function show(Request $request)
    {
        // return $request->session()->all();
        // return $request->session()->get('username');

        // if ($request->session()->has('username'))
        //     echo "Saved username in session";

        // return $request->session()->all();
        // return $request->session()->get('status');

        return session('user_login'); // helper session
    }

    function add_flash_session(Request $request)
    {
        $request->session()->flash('status', 'You have successfully added the product to the cart');
    }

    function delete(Request $request)
    {
        // $request->session()->forget('username');
        $request->session()->flush();
    }
}
