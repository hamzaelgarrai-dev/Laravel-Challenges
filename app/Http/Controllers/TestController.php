<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return "Je suis le contrôleur TestController";
    }

    public function show(){
        return view('accueil');
    }

    public function greet($prenom){

        return "bonjour . $prenom";

    }
    public function profile(int $id, int $age){

        return "L’utilisateur $id a $age ans";

    }

    public function showArticle($id){
        return  "Vous consultez l’article $id";
    }
}
