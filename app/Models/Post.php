<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','author','content','status'];

    public function AddPost(){
        Post::create([
            'title'=> "exemple title",
            'content'=>"exemple content",
        ]);
    }

    public function getAllPosts(){
        $posts = Post::all();
    }

    public function getPostByStatus($status){

        $posts = Post::where('status', $status);

    }



}
