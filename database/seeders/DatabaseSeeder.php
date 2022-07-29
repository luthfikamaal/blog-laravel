<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Author::factory(7)->create();
        Post::factory(50)->create();
        Category::create([
            'name' => 'Laravel',
            'slug' => 'tutorial-laravel'
        ]);
        Category::create([
            'name' => 'Bootstrap',
            'slug' => 'tutorial-bootsrap'
        ]);
        Category::create([
            'name' => 'ReactJS',
            'slug' => 'tutorial-reactjs'
        ]);
        Category::create([
            'name' => 'NextJS',
            'slug' => 'tutorial-nextjs'
        ]);
        Category::create([
            'name' => 'jQuery',
            'slug' => 'tutorial-jquery'
        ]);
        Category::create([
            'name' => 'VueJS',
            'slug' => 'tutorial-vuejs'
        ]);
    }
}