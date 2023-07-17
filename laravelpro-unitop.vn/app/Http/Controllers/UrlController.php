<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    //
    function url()
    {
        //1. Create url base
        //http://unitop.vn => https://unitop.vn/login
        $url_login = url('login');


        //2. Create url route

        $url_route = route('posts.show');

        // 3. Create url action
        $url_action = action([PostController::class, 'show']);

        // 4. Get url current

        $url_current = url()->current();

        echo $url_current;
    }
}
