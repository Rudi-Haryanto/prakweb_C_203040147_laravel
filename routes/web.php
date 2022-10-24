<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rudi Haryanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, sunt repudiandae delectus eaque porro sapiente aperiam atque soluta? Autem laudantium repellendus ullam inventore rem esse possimus libero quidem blanditiis deleniti deserunt voluptas, hic voluptatum quaerat! Hic quae inventore iste alias aliquid nobis deserunt culpa veniam? Velit modi deserunt amet! Iusto consequuntur, quas aliquid obcaecati assumenda dignissimos quos voluptates tenetur at? Nisi ab laboriosam animi sequi.
            Facere consequatur quasi, sapiente fuga at esse suscipit sint voluptas magnam, 
            consequuntur iste! Iste tempora id optio vitae aliquid quia non quaerat illum voluptate quam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sahrud",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, sunt repudiandae delectus eaque porro sapiente aperiam atque soluta? Autem laudantium repellendus ullam inventore rem esse possimus libero quidem blanditiis deleniti deserunt voluptas, hic voluptatum quaerat! Hic quae inventore iste alias aliquid nobis deserunt culpa veniam? Velit modi deserunt amet! Iusto consequuntur, quas aliquid obcaecati assumenda dignissimos quos voluptates tenetur at? Nisi ab laboriosam animi sequi.
            Facere consequatur quasi, sapiente fuga at esse suscipit sint voluptas magnam, 
            consequuntur iste! Iste tempora id optio vitae aliquid quia non quaerat illum voluptate quam."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts  
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rudi Haryanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, sunt repudiandae delectus eaque porro sapiente aperiam atque soluta? Autem laudantium repellendus ullam inventore rem esse possimus libero quidem blanditiis deleniti deserunt voluptas, hic voluptatum quaerat! Hic quae inventore iste alias aliquid nobis deserunt culpa veniam? Velit modi deserunt amet! Iusto consequuntur, quas aliquid obcaecati assumenda dignissimos quos voluptates tenetur at? Nisi ab laboriosam animi sequi.
            Facere consequatur quasi, sapiente fuga at esse suscipit sint voluptas magnam, 
            consequuntur iste! Iste tempora id optio vitae aliquid quia non quaerat illum voluptate quam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sahrud",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, sunt repudiandae delectus eaque porro sapiente aperiam atque soluta? Autem laudantium repellendus ullam inventore rem esse possimus libero quidem blanditiis deleniti deserunt voluptas, hic voluptatum quaerat! Hic quae inventore iste alias aliquid nobis deserunt culpa veniam? Velit modi deserunt amet! Iusto consequuntur, quas aliquid obcaecati assumenda dignissimos quos voluptates tenetur at? Nisi ab laboriosam animi sequi.
            Facere consequatur quasi, sapiente fuga at esse suscipit sint voluptas magnam, 
            consequuntur iste! Iste tempora id optio vitae aliquid quia non quaerat illum voluptate quam."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});