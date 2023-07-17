<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    //
    function set()
    {
        $response = new Response();
        return $response->cookie('introduce', 'My name is Dung, I am an IT student, studying at University of Transport, HCM branch', 24 * 60);
    }

    function get(Request $request)
    {
        return $request->cookie('introduce');
    }
}
