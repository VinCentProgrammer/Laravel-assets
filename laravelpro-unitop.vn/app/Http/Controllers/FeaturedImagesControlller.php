<?php

namespace App\Http\Controllers;

use App\Models\FeaturedImages;
use Illuminate\Http\Request;

class FeaturedImagesControlller extends Controller
{
    //
    function read(){
        $post = FeaturedImages::find(1)->Post;
        return $post;
    }
}
