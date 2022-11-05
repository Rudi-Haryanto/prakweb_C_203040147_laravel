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
        // \App\Models\User::factory(10)->create();


        User::create([
            'name' => 'Rudi Haryanto',
            'email' => 'rudiharyantovrt99@gmail.com',
            'password' => bcrypt(12345)
        ]);

        User::create([
            'name' => 'Sahrud',
            'email' => 'sahrudvrt99@gmail.com',
            'password' => bcrypt(12345)
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
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti provident omnis,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti provident omnis, dignissimos assumenda nam vitae. Qui excepturi quia quas obcaecati ipsam laboriosam impedit voluptatum modi magnam, odio quaerat consequatur quis eligendi dolore officia? Maxime voluptatum, voluptatem quia cupiditate repellat dicta ut quibusdam deleniti? Illo accusantium porro eaque dicta quod tenetur laborum. Maxime eius illo nostrum mollitia dolore. Sed placeat itaque deserunt, laboriosam nam ab quasi minima excepturi, consequatur natus debitis possimus. Eveniet dolore magni nesciunt sapiente error. Similique soluta error non nobis incidunt cupiditate quas nam, adipisci magni illum porro quibusdam ipsum magnam culpa, doloribus saepe? Rem, esse laborum.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti provident omnis,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti provident omnis, dignissimos assumenda nam vitae. Qui excepturi quia quas obcaecati ipsam laboriosam impedit voluptatum modi magnam, odio quaerat consequatur quis eligendi dolore officia? Maxime voluptatum, voluptatem quia cupiditate repellat dicta ut quibusdam deleniti? Illo accusantium porro eaque dicta quod tenetur laborum. Maxime eius illo nostrum mollitia dolore. Sed placeat itaque deserunt, laboriosam nam ab quasi minima excepturi, consequatur natus debitis possimus. Eveniet dolore magni nesciunt sapiente error. Similique soluta error non nobis incidunt cupiditate quas nam, adipisci magni illum porro quibusdam ipsum magnam culpa, doloribus saepe? Rem, esse laborum.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti provident omnis,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti provident omnis, dignissimos assumenda nam vitae. Qui excepturi quia quas obcaecati ipsam laboriosam impedit voluptatum modi magnam, odio quaerat consequatur quis eligendi dolore officia? Maxime voluptatum, voluptatem quia cupiditate repellat dicta ut quibusdam deleniti? Illo accusantium porro eaque dicta quod tenetur laborum. Maxime eius illo nostrum mollitia dolore. Sed placeat itaque deserunt, laboriosam nam ab quasi minima excepturi, consequatur natus debitis possimus. Eveniet dolore magni nesciunt sapiente error. Similique soluta error non nobis incidunt cupiditate quas nam, adipisci magni illum porro quibusdam ipsum magnam culpa, doloribus saepe? Rem, esse laborum.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti provident omnis,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti provident omnis, dignissimos assumenda nam vitae. Qui excepturi quia quas obcaecati ipsam laboriosam impedit voluptatum modi magnam, odio quaerat consequatur quis eligendi dolore officia? Maxime voluptatum, voluptatem quia cupiditate repellat dicta ut quibusdam deleniti? Illo accusantium porro eaque dicta quod tenetur laborum. Maxime eius illo nostrum mollitia dolore. Sed placeat itaque deserunt, laboriosam nam ab quasi minima excepturi, consequatur natus debitis possimus. Eveniet dolore magni nesciunt sapiente error. Similique soluta error non nobis incidunt cupiditate quas nam, adipisci magni illum porro quibusdam ipsum magnam culpa, doloribus saepe? Rem, esse laborum.',
            'category_id' => 2,
            'user_id' => 2
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
