<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Hakkimizda;

class HomeController extends Controller
{
   /*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts=Post::all();
        $yeni=Hakkimizda::all();
        return view('home',compact('posts'),compact('yeni'));
    }
}
