<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreateFurniture extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Задня стінка 10x15',
                'category_id' => 4,
                'size_id' => 1,
                'image_path_on_category_page' => '/img/products/back_walls/in_category/10x15_back_wall.jpg',
				'image_path_on_product_page' => '/img/products/back_walls/10x15_back_wall.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 80
            ],
            [
                'title' => 'Задня стінка 13x18',
                'category_id' => 4,
                'size_id' => 2,
                'image_path_on_category_page' => '/img/products/back_walls/in_category/13x18_back_wall.jpg',
				'image_path_on_product_page' => '/img/products/back_walls/13x18_back_wall.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 81
            ],
            [
                'title' => 'Задня стінка 15x21',
                'category_id' => 4,
                'size_id' => 3,
                'image_path_on_category_page' => '/img/products/back_walls/in_category/15x21_back_wall.jpg',
				'image_path_on_product_page' => '/img/products/back_walls/15x21_back_wall.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 82
            ],
            [
                'title' => 'Задня стінка 18x24',
                'category_id' => 4,
                'size_id' => 4,
                'image_path_on_category_page' => '/img/products/back_walls/in_category/18x24_back_wall.jpg',
				'image_path_on_product_page' => '/img/products/back_walls/18x24_back_wall.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 83
            ],
            [
                'title' => 'Задня стінка 21x30',
                'category_id' => 4,
                'size_id' => 5,
                'image_path_on_category_page' => '/img/products/back_walls/in_category/21x30_back_wall.jpg',
				'image_path_on_product_page' => '/img/products/back_walls/21x30_back_wall.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 84
            ]
        ]);
    }
}
