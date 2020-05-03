<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::with('comments.user', 'comments.')->find($id);
        return view('post.show', compact('post'));
    }
    public function form($id = null)
    {
        $post = Post::find($id);
        return view('post.form', compact('post'));
    }
    public function save(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'cat_id' => $request->cat_id
        ];
        if ($request->has('image')) {
            $data['image'] = "storage/" . $request->image->store('public/buploads');
        }
        if ($request->has('id')) {
            auth()->user()->posts()->find($request->id)->update($data);
        } else {
            auth()->user()->posts()->create($data);
        }
        return redirect()->route('home');
    }
    public function delete($id)
    {
        Post::destroy($id);
        return redirect()->route('home');
    }
}
