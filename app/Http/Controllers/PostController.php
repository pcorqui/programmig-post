<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function indexPost(){
        return view('post');
    }


    //save a post
    public function savepost(Request $request){
        $name = $request->input('nombre');
        $content = $request->input('about');

        $post = new Post;
        $post->name = $name;
        $post->content = $content;
        $post->course_id = 1;
        $post->save();


        return back();
    }

    public function destroy(Post $post){
        $post->delete();
        return back();
    }

}