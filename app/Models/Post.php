<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Made Dwiki Budi Laksana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, accusamus quaerat nam aspernatur assumenda voluptatibus corporis officia quidem nisi. Laboriosam accusamus incidunt quo sit obcaecati ab, molestias, enim beatae suscipit sint rem recusandae quod odio. Sequi odio repellendus voluptatum accusantium consequuntur ea nesciunt aperiam, eius, delectus sed necessitatibus sunt aliquid reprehenderit nobis laudantium! Blanditiis quod id quaerat aliquid doloribus tempore provident cumque facilis modi molestias dolores inventore dolor odio nemo magni ipsam officiis a, obcaecati illum error molestiae! Mollitia, totam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Putu Yonika Budiarisma",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore iste maxime quod, totam accusantium adipisci iusto aliquid, vero repellat dignissimos tenetur amet, libero ab velit delectus est illum! Dicta dolorum suscipit cum delectus iure laborum itaque saepe est eaque quaerat repudiandae maxime exercitationem fugiat ducimus velit, totam magni rem veritatis, officiis autem! Harum sint ratione culpa enim atque veniam quas totam a fugit minima at repudiandae consequatur nemo saepe, fugiat, aliquam nisi dicta eligendi accusamus ut cupiditate non facere. Sequi, nemo. Fugit sed nulla commodi magni consectetur sequi, officia beatae culpa amet vitae reprehenderit ipsum minima dicta iure sit maiores!"
        ]
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}
