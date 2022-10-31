<?php


use App\Models\user\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// use App\Models\Post;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rudi Haryanto",
        "email" => "rudiharyantovrt99@gmail.com",
        "image" => "rudi.jpg"
     ]);
});




Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);