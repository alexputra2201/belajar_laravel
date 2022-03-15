<?php

namespace App\Models;


class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alex Putra",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dolore porro esse pariatur nostrum incidunt quod, distinctio perferendis, a vitae sapiente illo fugit nulla perspiciatis, sit in aspernatur est amet laboriosam quis? Exercitationem ut sit minus non autem possimus doloribus tenetur. Omnis consectetur alias unde asperiores, eligendi ab saepe ut quidem architecto sapiente pariatur excepturi temporibus? Esse, consequuntur blanditiis. Doloremque aperiam repudiandae, saepe dolore aliquam a voluptatum id fugit, nostrum harum amet reprehenderit, et quibusdam quia aspernatur labore consequuntur dolorem."
        ],
        [
            "title" => "Judul Post Alex",
            "slug" => "judul-post-kedua",
            "author" => "Alexus",
            "body" => "csacsacasacsaLorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dolore porro esse pariatur nostrum incidunt quod, distinctio perferendis, a vitae sapiente illo fugit nulla perspiciatis, sit in aspernatur est amet laboriosam quis? Exercitationem ut sit minus non autem possimus doloribus tenetur. Omnis consectetur alias unde asperiores, eligendi ab saepe ut quidem architecto sapiente pariatur excepturi temporibus? Esse, consequuntur blanditiis. Doloremque aperiam repudiandae, saepe dolore aliquam a voluptatum id fugit, nostrum harum amet reprehenderit, et quibusdam quia aspernatur labore consequuntur dolorem."
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
