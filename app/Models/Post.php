<?php

namespace App\Models\user;



class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, sunt repudiandae delectus eaque porro sapiente aperiam atque soluta? Autem laudantium repellendus ullam inventore rem esse possimus libero quidem blanditiis deleniti deserunt voluptas, hic voluptatum quaerat! Hic quae inventore iste alias aliquid nobis deserunt culpa veniam? Velit modi deserunt amet! Iusto consequuntur, quas aliquid obcaecati assumenda dignissimos quos voluptates tenetur at? Nisi ab laboriosam animi sequi.
            Facere consequatur quasi, sapiente fuga at esse suscipit sint voluptas magnam, 
            consequuntur iste! Iste tempora id optio vitae aliquid quia non quaerat illum voluptate quam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, sunt repudiandae delectus eaque porro sapiente aperiam atque soluta? Autem laudantium repellendus ullam inventore rem esse possimus libero quidem blanditiis deleniti deserunt voluptas, hic voluptatum quaerat! Hic quae inventore iste alias aliquid nobis deserunt culpa veniam? Velit modi deserunt amet! Iusto consequuntur, quas aliquid obcaecati assumenda dignissimos quos voluptates tenetur at? Nisi ab laboriosam animi sequi.
            Facere consequatur quasi, sapiente fuga at esse suscipit sint voluptas magnam, 
            consequuntur iste! Iste tempora id optio vitae aliquid quia non quaerat illum voluptate quam."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
