<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Febiadi Wisnu Akbar",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Suscipit quia similique perspiciatis animi inventore quidem rem ab impedit
            eos praesentium at magnam maxime, minus quam placeat doloribus officia pariatur
            facilis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Febiadi Wisnu Akbar",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Suscipit quia similique perspiciatis animi inventore quidem rem ab impedit
            eos praesentium at magnam maxime, minus quam placeat doloribus officia pariatur
            facilis?"
        ]
    ];  
    
    public static function all () 
    {
        return collect(self::$blog_posts);
    }

    public static function find ($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
