<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create'); 
    }

    public function store()
    {   
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);
        dd(request()->all());
    }
}
