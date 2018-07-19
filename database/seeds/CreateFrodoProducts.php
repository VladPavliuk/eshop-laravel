<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreateFrodoProducts extends Seeder
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
                'title' => 'FRODO 10x15 "сосна"',
                'category_id' => 2,
                'size_id' => 1,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/frodo/in_category/10x15_light.jpg',
				'image_path_on_product_page' => '/img/products/frodo/10x15_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 2
            ],
            [
                'title' => 'FRODO 13x18 "сосна"',
                'category_id' => 2,
                'size_id' => 2,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/frodo/in_category/13x18_light.jpg',
				'image_path_on_product_page' => '/img/products/frodo/13x18_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 4
            ],
            [
                'title' => 'FRODO 15x21 "сосна"',
                'category_id' => 2,
                'size_id' => 3,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/frodo/in_category/15x21_light.jpg',
				'image_path_on_product_page' => '/img/products/frodo/15x21_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 6
            ],
            [
                'title' => 'FRODO 18x24 "сосна"',
                'category_id' => 2,
                'size_id' => 4,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/frodo/in_category/18x24_light.jpg',
				'image_path_on_product_page' => '/img/products/frodo/18x24_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 8
            ],
            [
                'title' => 'FRODO 21x30 "сосна"',
                'category_id' => 2,
                'size_id' => 5,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/frodo/in_category/21x30_light.jpg',
				'image_path_on_product_page' => '/img/products/frodo/21x30_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 10
            ],
            [
                'title' => 'FRODO 25x38 "сосна"',
                'category_id' => 2,
                'size_id' => 6,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/frodo/in_category/25x38_light.jpg',
				'image_path_on_product_page' => '/img/products/frodo/25x38_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 12
            ],
            [
                'title' => 'FRODO 30x40 "сосна"',
                'category_id' => 2,
                'size_id' => 7,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/frodo/in_category/30x40_light.jpg',
				'image_path_on_product_page' => '/img/products/frodo/30x40_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 14

            ],
            [
                'title' => 'FRODO 10x15 "каштан"',
                'category_id' => 2,
                'size_id' => 1,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/frodo/in_category/10x15_dark.jpg',
				'image_path_on_product_page' => '/img/products/frodo/10x15_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 1
            ],
            [
                'title' => 'FRODO 13x18 "каштан"',
                'category_id' => 2,
                'size_id' => 2,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/frodo/in_category/13x18_dark.jpg',
				'image_path_on_product_page' => '/img/products/frodo/13x18_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 3
            ],
            [
                'title' => 'FRODO 15x21 "каштан"',
                'category_id' => 2,
                'size_id' => 3,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/frodo/in_category/15x21_dark.jpg',
				'image_path_on_product_page' => '/img/products/frodo/15x21_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 5
            ],
            [
                'title' => 'FRODO 18x24 "каштан"',
                'category_id' => 2,
                'size_id' => 4,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/frodo/in_category/18x24_dark.jpg',
				'image_path_on_product_page' => '/img/products/frodo/18x24_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 7
            ],
            [
                'title' => 'FRODO 21x30 "каштан"',
                'category_id' => 2,
                'size_id' => 5,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/frodo/in_category/21x30_dark.jpg',
				'image_path_on_product_page' => '/img/products/frodo/21x30_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 9
            ],
            [
                'title' => 'FRODO 25x38 "каштан"',
                'category_id' => 2,
                'size_id' => 6,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/frodo/in_category/25x38_dark.jpg',
				'image_path_on_product_page' => '/img/products/frodo/25x38_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 11
            ],
            [
                'title' => 'FRODO 30x40 "каштан"',
                'category_id' => 2,
                'size_id' => 7,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/frodo/in_category/30x40_dark.jpg',
				'image_path_on_product_page' => '/img/products/frodo/30x40_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 13
            ],
        ]);
    }
}
