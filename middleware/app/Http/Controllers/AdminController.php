<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    function __construct()
    {
        return $this->middleware('CheckAdmin');
    }

    function login()
    {
        return view('auth.login');
    }

    function dashboard()
    {
        return view('dashboard');
    }
}
