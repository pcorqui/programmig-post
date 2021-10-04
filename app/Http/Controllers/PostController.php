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

    public function showPost(){

        return view('homePost',[
            'posts' => Post::latest()->get()
        ]);
    }

    public function listPosts(){
        $todos = Post::all();
        return view('postlist',[
            'posts' => $todos
        ]);
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

    public function post(Post $post){
        //aqui retornare una vista con el post
        return "si llego aqui " . $post->name;

    }

}
