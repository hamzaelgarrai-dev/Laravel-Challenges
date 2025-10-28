<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $user = \App\Models\User::with(['profile' , 'posts' , 'posts.tags'])->get();
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = \App\Models\User::create([
            "name" => $request->name,
            "email" =>$request->email,
            "password" =>$request->password
        ]);
        $profile = $user->profile()->create([
          "bio"=>$request->bio,
          "avatar"=>$request->avatar
        ]);

        return $profile;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
