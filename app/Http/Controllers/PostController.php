<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post',[
            "title"=>"Posts",
            "posts"=>Post::all()
        ]);   
    }

    public function show($slug){
        return view('posts',[
            "title"=>"Single Post",
            "post"=> Post::find($slug)
           ]);
    }

    public function showArticle($slug)
    {
        $article = Posts::where('slug', $slug)->firstOrFail();
        return view('posts', compact('posts'));
    }

   // public function tampil(){
    //    $data= Posts::select('*')->get();
    //    return view('post.blade',['post'=>$post]);
   // }
}