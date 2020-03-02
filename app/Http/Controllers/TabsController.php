<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use Illuminate\Http\Request;

class TabsController extends Controller
{
    public function myposts () {
        $id = Auth::user()->id;
        $myposts = Post::all()->intersect(Post::whereIn('users_id', [$id])->get());
        return view('myposts', compact('myposts'));
    }

    public  function allposts () {
        $allposts = Post::all();
        $id = Auth::user()->id;
        return view('allposts', compact('allposts','id'));
    }
}
