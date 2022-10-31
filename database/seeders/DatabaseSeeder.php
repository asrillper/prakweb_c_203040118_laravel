<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Asril Permana',
        //     'email' => 'asrillper@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Syahrizal Hartaji',
        //     'email' => 'syahrizal@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, modi ipsam! Voluptatum tenetur fugit aperiam maxime, excepturi earum, inventore quos temporibus repellat sapiente nostrum quis. Debitis suscipit ratione provident eligendi mollitia placeat! Beatae possimus odio minus natus voluptates ipsa soluta aperiam libero quibusdam labore pariatur error facilis tempora, dolorem nostrum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore vero nisi a nam laborum voluptates autem molestiae iusto saepe, quod unde laudantium sit facere eius tempora voluptatem veritatis! Libero dicta, ipsa autem earum a, natus voluptates eius modi debitis consequatur molestias sint vel harum rerum nostrum quas corrupti! Vitae commodi, eum eaque repudiandae animi provident nam, eveniet neque ab non voluptate dicta exercitationem pariatur blanditiis nobis aperiam rem culpa ratione quis nesciunt fugiat tempora. Ipsum culpa dolorem unde ab ipsam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, modi ipsam! Voluptatum tenetur fugit aperiam maxime, excepturi earum, inventore quos temporibus repellat sapiente nostrum quis. Debitis suscipit ratione provident eligendi mollitia placeat! Beatae possimus odio minus natus voluptates ipsa soluta aperiam libero quibusdam labore pariatur error facilis tempora, dolorem nostrum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore vero nisi a nam laborum voluptates autem molestiae iusto saepe, quod unde laudantium sit facere eius tempora voluptatem veritatis! Libero dicta, ipsa autem earum a, natus voluptates eius modi debitis consequatur molestias sint vel harum rerum nostrum quas corrupti! Vitae commodi, eum eaque repudiandae animi provident nam, eveniet neque ab non voluptate dicta exercitationem pariatur blanditiis nobis aperiam rem culpa ratione quis nesciunt fugiat tempora. Ipsum culpa dolorem unde ab ipsam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, modi ipsam! Voluptatum tenetur fugit aperiam maxime, excepturi earum, inventore quos temporibus repellat sapiente nostrum quis. Debitis suscipit ratione provident eligendi mollitia placeat! Beatae possimus odio minus natus voluptates ipsa soluta aperiam libero quibusdam labore pariatur error facilis tempora, dolorem nostrum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore vero nisi a nam laborum voluptates autem molestiae iusto saepe, quod unde laudantium sit facere eius tempora voluptatem veritatis! Libero dicta, ipsa autem earum a, natus voluptates eius modi debitis consequatur molestias sint vel harum rerum nostrum quas corrupti! Vitae commodi, eum eaque repudiandae animi provident nam, eveniet neque ab non voluptate dicta exercitationem pariatur blanditiis nobis aperiam rem culpa ratione quis nesciunt fugiat tempora. Ipsum culpa dolorem unde ab ipsam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, modi ipsam! Voluptatum tenetur fugit aperiam maxime, excepturi earum, inventore quos temporibus repellat sapiente nostrum quis. Debitis suscipit ratione provident eligendi mollitia placeat! Beatae possimus odio minus natus voluptates ipsa soluta aperiam libero quibusdam labore pariatur error facilis tempora, dolorem nostrum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore vero nisi a nam laborum voluptates autem molestiae iusto saepe, quod unde laudantium sit facere eius tempora voluptatem veritatis! Libero dicta, ipsa autem earum a, natus voluptates eius modi debitis consequatur molestias sint vel harum rerum nostrum quas corrupti! Vitae commodi, eum eaque repudiandae animi provident nam, eveniet neque ab non voluptate dicta exercitationem pariatur blanditiis nobis aperiam rem culpa ratione quis nesciunt fugiat tempora. Ipsum culpa dolorem unde ab ipsam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
