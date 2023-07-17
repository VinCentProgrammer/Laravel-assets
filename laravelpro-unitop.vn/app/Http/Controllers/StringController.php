<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StringController extends Controller
{
    //
    function string()
    {
        #1. Get length string
        $fullname = "Ha Van Dung";
        // echo Str::length($fullname);
        #2. Upper Lower String
        // echo Str::lower($fullname);
        // echo Str::upper($fullname);
        #3. Random string
        // echo Str::random(11);

        #4. Remove spacewhite
        // $str = "           Ha         Van Dung      ";
        // Str::of($str)->trim();
        // echo $str;

        #5. Create Slug => Url Friendly
        // $str = Str::slug('Unitop.vn học web đi làm!');
        // echo $str;

        #6. Get sub string
        // $str = "Laravel Pro";
        // // echo Str::of($str)->substr(8);
        // echo Str::of($str)->substr(0, 7);

        #7. Add string for append
        // echo Str::of('Ha Van ')->append('Dung');

        #8. Search & replace string
        // $str = "Laravel 9x";
        // echo Str::of($str)->replace('9x', '10x');

        #9. Cut a string with a given number of characters

        // $str = "Cut a string with a given number of characters";
        // echo Str::of($str)->limit(30);

        #10. Check contains substring

        $str = "Check contains substring";
        echo Str::contains($str, 'Check'); // true
        echo Str::contains($str, 'Checked'); // false
    }
}
