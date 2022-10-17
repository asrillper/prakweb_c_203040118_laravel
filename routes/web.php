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
        "name" => "Asril Permana",
        "email" => "asrillper@gmail.com",
        "image" => "picture.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Asril Permana",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus placeat veritatis repellat architecto eum ducimus id. Quaerat delectus maxime quis magnam exercitationem,
            odio nobis aliquam unde pariatur, dolor voluptates cum libero quidem neque rerum. Quam, deserunt perferendis.
            Veritatis vel obcaecati dolorum officiis quisquam animi, eum nostrum. Commodi dolores sint explicabo excepturi. Aliquam sint quas facere doloribus ea architecto cupiditate rerum aut dolorem! Molestias explicabo,
            quia accusantium exercitationem repellendus impedit expedita temporibus, sunt error ex perferendis laborum non delectus deleniti est?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Syahrizal",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus placeat veritatis repellat architecto eum ducimus id. Quaerat delectus maxime quis magnam exercitationem,
            odio nobis aliquam unde pariatur, dolor voluptates cum libero quidem neque rerum. Quam, deserunt perferendis.
            Veritatis vel obcaecati dolorum officiis quisquam animi, eum nostrum. Commodi dolores sint explicabo excepturi. Aliquam sint quas facere doloribus ea architecto cupiditate rerum aut dolorem! Molestias explicabo,
            quia accusantium exercitationem repellendus impedit expedita temporibus, sunt error ex perferendis laborum non delectus deleniti est?"
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
            "author" => "Asril Permana",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus placeat veritatis repellat architecto eum ducimus id. Quaerat delectus maxime quis magnam exercitationem,
            odio nobis aliquam unde pariatur, dolor voluptates cum libero quidem neque rerum. Quam, deserunt perferendis.
            Veritatis vel obcaecati dolorum officiis quisquam animi, eum nostrum. Commodi dolores sint explicabo excepturi. Aliquam sint quas facere doloribus ea architecto cupiditate rerum aut dolorem! Molestias explicabo,
            quia accusantium exercitationem repellendus impedit expedita temporibus, sunt error ex perferendis laborum non delectus deleniti est?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Syahrizal",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus placeat veritatis repellat architecto eum ducimus id. Quaerat delectus maxime quis magnam exercitationem,
            odio nobis aliquam unde pariatur, dolor voluptates cum libero quidem neque rerum. Quam, deserunt perferendis.
            Veritatis vel obcaecati dolorum officiis quisquam animi, eum nostrum. Commodi dolores sint explicabo excepturi. Aliquam sint quas facere doloribus ea architecto cupiditate rerum aut dolorem! Molestias explicabo,
            quia accusantium exercitationem repellendus impedit expedita temporibus, sunt error ex perferendis laborum non delectus deleniti est?"
        ]
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