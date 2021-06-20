<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('blog_categories')->insert([
            'title' => 'Motivations',
            'slug' => 'motivations',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Inspirations',
            'slug' => 'inspiration',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Stories',
            'slug' => 'stories',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Quotes',
            'slug' => 'quotes',
        ]);

    }
}
