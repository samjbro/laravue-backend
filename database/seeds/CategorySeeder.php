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
        $categories = factory(\App\Category::class, 20)->create();

        $categories->each(function ($c) {
            factory(\App\Product::class, 10)->create(['category_id' => $c->id]);
        });
    }
}
