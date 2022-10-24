<?php

namespace App\Models;

class Post
{
    private  static $blog_posts = [
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
