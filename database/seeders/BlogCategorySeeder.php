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
            'title' => 'Facts',
            'slug' => 'facts',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Nutrition',
            'slug' => 'nutrition',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Fitness',
            'slug' => 'fitness',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Researchs',
            'slug' => 'research',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Pandemic',
            'slug' => 'pandemic',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Beauty',
            'slug' => 'beauty',
        ]);

    }
}
