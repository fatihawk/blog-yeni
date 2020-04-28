<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function save(Request $request){
        Comment::create([
            'user_id'=>auth()->user()->id,
            'post_id'=>$request->post_id,
            'text'=>$request->text,

        ]);
        return redirect()->route('post.show',[$request->post_id]);
    }
}
