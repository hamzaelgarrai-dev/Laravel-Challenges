<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id){
      $post = Post::find($id);
      
      return $post;
    }

  
    public function store(Request $request ){

      $user = User::find( 1);
      $post = $user->posts()->create([
        'title' => $request->title,
        'auther' => $request->auther,
        'desc' => $request->desc,
        // 'status' => $request->status
      ]);
        $tag1 = Tag::create([
        "tag_name"=>$request->tag_name
      ]);
      
      $post->tags()->attach($tag1->id);
      

      return $post;


    }



    public function show($id){
      $post = Post::find($id);
      if($post){
        return $post;
      }
      return "Not found";
    }

    public function update(Request $request , $id){
      $post = Post::find($id);
      $post->title = $request->title;
      $post->auther = $request->auther;
      $post->desc = $request->desc;
      
      $post->save();
      return $post;
    }

    public function destroy($id){
      $post = Post::find($id);
      if($post){
        $post->delete();
        return "delete";
      }
      return "not found";
    }
}