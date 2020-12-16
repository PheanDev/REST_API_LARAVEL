<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request){
        $post=Post::where('title',$request->keyword)->get();
        return \response()->json($post);
    }
}
