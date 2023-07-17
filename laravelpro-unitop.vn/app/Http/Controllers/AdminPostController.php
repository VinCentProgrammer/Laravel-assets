<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //
    function add()
    {
        return view('admin.post.add');
    }
    function show()
    {
        return view('admin.post.show');
    }
    function update($id)
    {
        return view('admin.post.update', compact('id'));
    }
    function delete($id)
    {
        return view('admin.post.delete', compact('id'));
    }
}


