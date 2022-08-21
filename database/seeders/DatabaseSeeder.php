<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

         User::create([
            'name' => 'Sandhika Galih',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt('12345')
         ]);

         User::create([
            'name' => 'Doddy Ferdiansyah',
            'email' => 'doddy@gmail.com',
            'password' => bcrypt('12345')
         ]);

         Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
         ]);

         Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
         ]);

         Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam corrupti pariatur assumenda! Quos sequi, cupiditate ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam corrupti pariatur assumenda! Quos sequi, cupiditate quidem sit est reiciendis numquam ipsa rerum ex? Expedita pariatur incidunt cupiditate fuga ipsum, corrupti quisquam id voluptatibus? Quia fuga molestias sit facere excepturi? Est reprehenderit fugiat esse accusamus pariatur praesentium placeat doloremque aut tenetur veniam suscipit, magnam dolor mollitia eos delectus, corporis in incidunt quod earum nesciunt beatae? Ipsam assumenda incidunt eveniet corporis unde velit, iure quibusdam ut veritatis minus libero soluta explicabo cumque ducimus illum ipsum quisquam, sit odit nam maiores voluptatem. Velit laudantium nam amet at nisi eius quaerat repudiandae ducimus.',
            'category_id' => 1,
            'user_id' => 1
         ]);

         Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam corrupti pariatur assumenda! Quos sequi, cupiditate ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam corrupti pariatur assumenda! Quos sequi, cupiditate quidem sit est reiciendis numquam ipsa rerum ex? Expedita pariatur incidunt cupiditate fuga ipsum, corrupti quisquam id voluptatibus? Quia fuga molestias sit facere excepturi? Est reprehenderit fugiat esse accusamus pariatur praesentium placeat doloremque aut tenetur veniam suscipit, magnam dolor mollitia eos delectus, corporis in incidunt quod earum nesciunt beatae? Ipsam assumenda incidunt eveniet corporis unde velit, iure quibusdam ut veritatis minus libero soluta explicabo cumque ducimus illum ipsum quisquam, sit odit nam maiores voluptatem. Velit laudantium nam amet at nisi eius quaerat repudiandae ducimus.',
            'category_id' => 1,
            'user_id' => 1
         ]);

         Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam corrupti pariatur assumenda! Quos sequi, cupiditate ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam corrupti pariatur assumenda! Quos sequi, cupiditate quidem sit est reiciendis numquam ipsa rerum ex? Expedita pariatur incidunt cupiditate fuga ipsum, corrupti quisquam id voluptatibus? Quia fuga molestias sit facere excepturi? Est reprehenderit fugiat esse accusamus pariatur praesentium placeat doloremque aut tenetur veniam suscipit, magnam dolor mollitia eos delectus, corporis in incidunt quod earum nesciunt beatae? Ipsam assumenda incidunt eveniet corporis unde velit, iure quibusdam ut veritatis minus libero soluta explicabo cumque ducimus illum ipsum quisquam, sit odit nam maiores voluptatem. Velit laudantium nam amet at nisi eius quaerat repudiandae ducimus.',
            'category_id' => 2,
            'user_id' => 1
         ]);

         Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam corrupti pariatur assumenda! Quos sequi, cupiditate ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam corrupti pariatur assumenda! Quos sequi, cupiditate quidem sit est reiciendis numquam ipsa rerum ex? Expedita pariatur incidunt cupiditate fuga ipsum, corrupti quisquam id voluptatibus? Quia fuga molestias sit facere excepturi? Est reprehenderit fugiat esse accusamus pariatur praesentium placeat doloremque aut tenetur veniam suscipit, magnam dolor mollitia eos delectus, corporis in incidunt quod earum nesciunt beatae? Ipsam assumenda incidunt eveniet corporis unde velit, iure quibusdam ut veritatis minus libero soluta explicabo cumque ducimus illum ipsum quisquam, sit odit nam maiores voluptatem. Velit laudantium nam amet at nisi eius quaerat repudiandae ducimus.',
            'category_id' => 2,
            'user_id' => 2
         ]);
    }
}
