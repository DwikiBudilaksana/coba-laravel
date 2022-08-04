<?php

use Illuminate\Routing\Route as RoutingRoute;
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
        "name" => "Made Dwiki Budi Laksana",
        "email" => "budilaksana.dwiki@gmail.com",
        "image" => "dwiki.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
