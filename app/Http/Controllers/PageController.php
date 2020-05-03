<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function show($id)
    {
        $post=Page::find($id);
        return view('page.show',compact('post'));
    }
    public function form($id =null)
    {
        $post = Page::find($id);
        return view('page.form',compact('post'));
    }
    public function save(Request $request){
        if($request->has('id')){
            Page::find($request->id)->update([
            'title'=>$request->title,
            'content'=>$request->content,
            ]);
        }else{Page::create([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        }
        return redirect()->route('home');
    }
    public function delete($id)
    {
        Page::destroy($id);
        return redirect()->route('home');
    }
}