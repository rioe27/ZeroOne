<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title"=>"Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title"=>"About",
        "name"=>"ZeroOne",
        "email"=>"zeroone@qmail.id",
        "image"=>"274682917_3059521937598168_5924481109448810231_n.jpg"

    ]
);
});

Route::get('/blog', [PostController::class,'index']);
        
//halaman single post
route::get('posts/{post:slug}',[PostController::class,'show'] );
