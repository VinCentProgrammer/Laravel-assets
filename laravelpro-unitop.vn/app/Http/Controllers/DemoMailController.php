<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoMailController extends Controller
{
    //
    function sendMail()
    {
        $data = [
            'key' => 'Du lieu dong duoc truyen tu controller'
        ];

        Mail::to('brave2112love@gmail.com')->send(new DemoMail($data));
    }
}
