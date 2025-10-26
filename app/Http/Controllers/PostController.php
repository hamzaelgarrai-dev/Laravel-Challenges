<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return "all posts : . $posts";
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $post=Post::create([
            'title'=>$request->title,
            'content'=>$request->Content,
            
        ]);

        return $post;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::find($id);
        if($post){
            return $post;
        }
        return 'Not Found';
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post=Post::find($id);
        $post->title=$request->title;
        $post->content=$request->Content;
        $post->status=$request->status;
        $post->save();
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::find($id);
        if($post){
            $post->delete();
            return 'Deleted';
        }
        return 'Not Found';
    }
}
