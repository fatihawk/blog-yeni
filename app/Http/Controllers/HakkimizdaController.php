<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hakkimizda;


class HakkimizdaController extends Controller
{

    public function form($id =null)
    {
        $post = Hakkimizda::find($id);
        return view('Hakkimizda.form',compact('post'));
    }
    public function save(Request $request){
        if($request->has('id')){
            Hakkimizda::find($request->id)->update([
            'title'=>$request->title,
            'content'=>$request->content,
            ]);
        }else{Hakkimizda::create([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        }
        return redirect()->route('home');
    }
    public function delete($id)
    {
        Hakkimizda::destroy($id);
        return redirect()->route('home');
    }
}
