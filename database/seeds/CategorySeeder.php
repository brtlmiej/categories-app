<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create main categories
        $categories = factory(\App\Category::class, 5)->create();

        // create subcategories
        foreach($categories as $category)
        {
            factory(\App\Category::class, 3)->create(['parent_id' => $category->id]);
        }
    }
}
