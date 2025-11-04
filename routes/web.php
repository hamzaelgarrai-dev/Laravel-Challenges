<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/salut', function () {
    $nom = "hamza";
    return "Bonjour . $nom";
});

Route::get('/accueil',function(){
    return view('accueil');
});

Route::get('/test',[TestController::class , "index" ]);

Route::get('/home',[TestController::class , "show" ]);

Route::get('/salutation/{prenom}' , [TestController::class , 'greet']);

Route::get('/profile/{id}/{age}' , [TestController::class ,'profile']);

Route::get('/article/{id}' , [TestController::class ,'showArticle']);



Route::get('/register' , [RegisterController::class , 'showForm']);
Route::post('/register/submit' , [RegisterController::class , 'handleForm'])->name('register.submit');

Route::resource('services', ServiceController::class);
Route::resource('bookings', BookingController::class);