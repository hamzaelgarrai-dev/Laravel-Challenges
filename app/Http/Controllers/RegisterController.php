<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function showForm(){

        return view('register');
    }

    public function handleForm(\App\Http\Requests\RegisterRequest $request){

        // $request->validate([
        //     'name' => 'required|min:3',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|min:6'
        // ]);
        $request->validated();
        return redirect()->back()->with('success', 'Compte créé avec succès.');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
