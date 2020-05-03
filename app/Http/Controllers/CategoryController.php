<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function form()
    {
        return view('category.form');
    }
    public function save(Request $request)
    {
        Category::create([
            'title'=>$request->title
        ]);
        return redirect()->route('home');
    }
    
}