<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreateLeonardoProducts extends Seeder
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
                'title' => 'LEONARDO 10x15 "сосна"',
                'category_id' => 1,
                'size_id' => 1,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/10x15_light.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/10x15_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 16
            ],
            [
                'title' => 'LEONARDO 13x18 "сосна"',
                'category_id' => 1,
                'size_id' => 2,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/13x18_light.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/13x18_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 18
            ],
            [
                'title' => 'LEONARDO 15x21 "сосна"',
                'category_id' => 1,
                'size_id' => 3,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/15x21_light.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/15x21_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 20
            ],
            [
                'title' => 'LEONARDO 18x24 "сосна"',
                'category_id' => 1,
                'size_id' => 4,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/18x24_light.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/18x24_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 22
            ],
            [
                'title' => 'LEONARDO 21x30 "сосна"',
                'category_id' => 1,
                'size_id' => 5,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/21x30_light.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/21x30_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 24
            ],
            [
                'title' => 'LEONARDO 21x30 (ніжка) "сосна"',
                'category_id' => 1,
                'size_id' => 5,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/21x30F_light.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/21x30F_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 26
            ],
            [
                'title' => 'LEONARDO 25x38 "сосна"',
                'category_id' => 1,
                'size_id' => 6,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/25x38_light.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/25x38_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 28
            ],
            [
                'title' => 'LEONARDO 30x40 "сосна"',
                'category_id' => 1,
                'size_id' => 7,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/30x40_light.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/30x40_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 30
            ],
            [
                'title' => 'LEONARDO 10x15 "каштан"',
                'category_id' => 1,
                'size_id' => 1,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/10x15_dark.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/10x15_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 15
            ],
            [
                'title' => 'LEONARDO 13x18 "каштан"',
                'category_id' => 1,
                'size_id' => 2,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/13x18_dark.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/13x18_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 17
            ],
            [
                'title' => 'LEONARDO 15x21 "каштан"',
                'category_id' => 1,
                'size_id' => 3,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/15x21_dark.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/15x21_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 19
            ],
            [
                'title' => 'LEONARDO 18x24 "каштан"',
                'category_id' => 1,
                'size_id' => 4,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/18x24_dark.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/18x24_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 21
            ],
            [
                'title' => 'LEONARDO 21x30 "каштан"',
                'category_id' => 1,
                'size_id' => 5,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/21x30_dark.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/21x30_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 23
            ],
            [
                'title' => 'LEONARDO 21x30 (ніжка) "каштан"',
                'category_id' => 1,
                'size_id' => 5,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/21x30F_dark.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/21x30F_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 25
            ],
            [
                'title' => 'LEONARDO 25x38 "каштан"',
                'category_id' => 1,
                'size_id' => 6,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/25x38_dark.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/25x38_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 27
            ],
            [
                'title' => 'LEONARDO 30x40 "каштан"',
                'category_id' => 1,
                'size_id' => 7,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/leonardo/in_category/30x40_dark.jpg',
				'image_path_on_product_page' => '/img/products/leonardo/30x40_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 29
            ],
        ]);
    }
}
