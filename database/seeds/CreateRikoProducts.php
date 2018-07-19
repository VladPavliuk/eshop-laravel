<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreateRikoProducts extends Seeder
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
                'title' => 'RIKO 10x15 "сосна"',
                'category_id' => 3,
                'size_id' => 1,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/riko/in_category/10x15_light.jpg',
                'image_path_on_product_page' => '/img/products/riko/10x15_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 32
            ],
            [
                'title' => 'RIKO 13x18 "сосна"',
                'category_id' => 3,
                'size_id' => 2,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/riko/in_category/13x18_light.jpg',
                'image_path_on_product_page' => '/img/products/riko/13x18_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 39
            ],
            [
                'title' => 'RIKO 15x21 "сосна"',
                'category_id' => 3,
                'size_id' => 3,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/riko/in_category/15x21_light.jpg',
                'image_path_on_product_page' => '/img/products/riko/15x21_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 46
            ],
            [
                'title' => 'RIKO 18x24 "сосна"',
                'category_id' => 3,
                'size_id' => 4,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/riko/in_category/18x24_light.jpg',
                'image_path_on_product_page' => '/img/products/riko/18x24_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 53
            ],
            [
                'title' => 'RIKO 21x30 "сосна"',
                'category_id' => 3,
                'size_id' => 5,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/riko/in_category/21x30_light.jpg',
                'image_path_on_product_page' => '/img/products/riko/21x30_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 60
            ],
            [
                'title' => 'RIKO 25x38 "сосна"',
                'category_id' => 3,
                'size_id' => 6,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/riko/in_category/25x38_light.jpg',
                'image_path_on_product_page' => '/img/products/riko/25x38_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 67
            ],
            [
                'title' => 'RIKO 30x40 "сосна"',
                'category_id' => 3,
                'size_id' => 7,
                'color_id' => 1,
                'image_path_on_category_page' => '/img/products/riko/in_category/30x40_light.jpg',
				'image_path_on_product_page' => '/img/products/riko/30x40_light.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 74

            ],
            [
                'title' => 'RIKO 10x15 "каштан"',
                'category_id' => 3,
                'size_id' => 1,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/riko/in_category/10x15_dark.jpg',
				'image_path_on_product_page' => '/img/products/riko/10x15_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 31
            ],
            [
                'title' => 'RIKO 13x18 "каштан"',
                'category_id' => 3,
                'size_id' => 2,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/riko/in_category/13x18_dark.jpg',
				'image_path_on_product_page' => '/img/products/riko/13x18_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 38

            ],
            [
                'title' => 'RIKO 15x21 "каштан"',
                'category_id' => 3,
                'size_id' => 3,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/riko/in_category/15x21_dark.jpg',
				'image_path_on_product_page' => '/img/products/riko/15x21_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 45
            ],
            [
                'title' => 'RIKO 18x24 "каштан"',
                'category_id' => 3,
                'size_id' => 4,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/riko/in_category/18x24_dark.jpg',
				'image_path_on_product_page' => '/img/products/riko/18x24_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 52
            ],
            [
                'title' => 'RIKO 21x30 "каштан"',
                'category_id' => 3,
                'size_id' => 5,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/riko/in_category/21x30_dark.jpg',
				'image_path_on_product_page' => '/img/products/riko/21x30_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 59
            ],
            [
                'title' => 'RIKO 25x38 "каштан"',
                'category_id' => 3,
                'size_id' => 6,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/riko/in_category/25x38_dark.jpg',
				'image_path_on_product_page' => '/img/products/riko/25x38_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 66
            ],
            [
                'title' => 'RIKO 30x40 "каштан"',
                'category_id' => 3,
                'size_id' => 7,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/riko/in_category/30x40_dark.jpg',
				'image_path_on_product_page' => '/img/products/riko/30x40_dark.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 73
            ],
            [
                'title' => 'RIKO 10x15 "чорний"',
                'category_id' => 3,
                'size_id' => 1,
                'color_id' => 2,
                'image_path_on_category_page' => '/img/products/riko/in_category/10x15_black.jpg',
				'image_path_on_product_page' => '/img/products/riko/10x15_black.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 33
            ],
            [
                'title' => 'RIKO 13x18 "чорний"',
                'category_id' => 3,
                'size_id' => 2,
                'color_id' => 2,
                'image_path_on_category_page' => '/img/products/riko/in_category/13x18_black.jpg',
                'image_path_on_product_page' => '/img/products/riko/13x18_black.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 40
            ],
            [
                'title' => 'RIKO 15x21 "чорний"',
                'category_id' => 3,
                'size_id' => 3,
                'color_id' => 2,
                'image_path_on_category_page' => '/img/products/riko/in_category/15x21_black.jpg',
                'image_path_on_product_page' => '/img/products/riko/15x21_black.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 47
            ],
            [
                'title' => 'RIKO 18x24 "чорний"',
                'category_id' => 3,
                'size_id' => 4,
                'color_id' => 2,
                'image_path_on_category_page' => '/img/products/riko/in_category/18x24_black.jpg',
                'image_path_on_product_page' => '/img/products/riko/18x24_black.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 54
            ],
            [
                'title' => 'RIKO 21x30 "чорний"',
                'category_id' => 3,
                'size_id' => 5,
                'color_id' => 2,
                'image_path_on_category_page' => '/img/products/riko/in_category/21x30_black.jpg',
				'image_path_on_product_page' => '/img/products/riko/21x30_black.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 61
            ],
            [
                'title' => 'RIKO 25x38 "чорний"',
                'category_id' => 3,
                'size_id' => 6,
                'color_id' => 2,
                'image_path_on_category_page' => '/img/products/riko/in_category/25x38_black.jpg',
                'image_path_on_product_page' => '/img/products/riko/25x38_black.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 68
            ],
            [
                'title' => 'RIKO 30x40 "чорний"',
                'category_id' => 3,
                'size_id' => 7,
                'color_id' => 2,
                'image_path_on_category_page' => '/img/products/riko/in_category/30x40_black.jpg',
                'image_path_on_product_page' => '/img/products/riko/30x40_black.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 75
            ],
            [
                'title' => 'RIKO 10x15 "білий"',
                'category_id' => 3,
                'size_id' => 1,
                'color_id' => 7,
                'image_path_on_category_page' => '/img/products/riko/in_category/10x15_white.jpg',
                'image_path_on_product_page' => '/img/products/riko/10x15_white.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 34
            ],
            [
                'title' => 'RIKO 13x18 "білий"',
                'category_id' => 3,
                'size_id' => 2,
                'color_id' => 7,
                'image_path_on_category_page' => '/img/products/riko/in_category/13x18_white.jpg',
                'image_path_on_product_page' => '/img/products/riko/13x18_white.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 41

            ],
            [
                'title' => 'RIKO 15x21 "білий"',
                'category_id' => 3,
                'size_id' => 3,
                'color_id' => 7,
                'image_path_on_category_page' => '/img/products/riko/in_category/15x21_white.jpg',
                'image_path_on_product_page' => '/img/products/riko/15x21_white.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 48
            ],
            [
                'title' => 'RIKO 18x24 "білий"',
                'category_id' => 3,
                'size_id' => 4,
                'color_id' => 7,
                'image_path_on_category_page' => '/img/products/riko/in_category/18x24_white.jpg',
                'image_path_on_product_page' => '/img/products/riko/18x24_white.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 55
            ],
            [
                'title' => 'RIKO 21x30 "білий"',
                'category_id' => 3,
                'size_id' => 5,
                'color_id' => 7,
                'image_path_on_category_page' => '/img/products/riko/in_category/21x30_white.jpg',
                'image_path_on_product_page' => '/img/products/riko/21x30_white.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 62
            ],
            [
                'title' => 'RIKO 25x38 "білий"',
                'category_id' => 3,
                'size_id' => 6,
                'color_id' => 7,
                'image_path_on_category_page' => '/img/products/riko/in_category/25x38_white.jpg',
                'image_path_on_product_page' => '/img/products/riko/25x38_white.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 69
            ],
            [
                'title' => 'RIKO 30x40 "білий"',
                'category_id' => 3,
                'size_id' => 7,
                'color_id' => 7,
                'image_path_on_category_page' => '/img/products/riko/in_category/30x40_white.jpg',
                'image_path_on_product_page' => '/img/products/riko/30x40_white.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 76
            ],
            [
                'title' => 'RIKO 10x15 "золотий"',
                'category_id' => 3,
                'size_id' => 1,
                'color_id' => 6,
                'image_path_on_category_page' => '/img/products/riko/in_category/10x15_golden.jpg',
                'image_path_on_product_page' => '/img/products/riko/10x15_golden.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 35
            ],
            [
                'title' => 'RIKO 13x18 "золотий"',
                'category_id' => 3,
                'size_id' => 2,
                'color_id' => 6,
                'image_path_on_category_page' => '/img/products/riko/in_category/13x18_golden.jpg',
                'image_path_on_product_page' => '/img/products/riko/13x18_golden.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 42
            ],
            [
                'title' => 'RIKO 15x21 "золотий"',
                'category_id' => 3,
                'size_id' => 3,
                'color_id' => 6,
                'image_path_on_category_page' => '/img/products/riko/in_category/15x21_golden.jpg',
                'image_path_on_product_page' => '/img/products/riko/15x21_golden.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 49
            ],
            [
                'title' => 'RIKO 18x24 "золотий"',
                'category_id' => 3,
                'size_id' => 4,
                'color_id' => 6,
                'image_path_on_category_page' => '/img/products/riko/in_category/18x24_golden.jpg',
                'image_path_on_product_page' => '/img/products/riko/18x24_golden.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 56
            ],
            [
                'title' => 'RIKO 21x30 "золотий"',
                'category_id' => 3,
                'size_id' => 5,
                'color_id' => 6,
                'image_path_on_category_page' => '/img/products/riko/in_category/21x30_golden.jpg',
                'image_path_on_product_page' => '/img/products/riko/21x30_golden.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 63
            ],
            [
                'title' => 'RIKO 25x38 "золотий"',
                'category_id' => 3,
                'size_id' => 6,
                'color_id' => 6,
                'image_path_on_category_page' => '/img/products/riko/in_category/25x38_golden.jpg',
                'image_path_on_product_page' => '/img/products/riko/25x38_golden.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 70
            ],
            [
                'title' => 'RIKO 30x40 "золотий"',
                'category_id' => 3,
                'size_id' => 7,
                'color_id' => 6,
                'image_path_on_category_page' => '/img/products/riko/in_category/30x40_golden.jpg',
                'image_path_on_product_page' => '/img/products/riko/30x40_golden.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 77
            ],
            [
                'title' => 'RIKO 10x15 "срібний"',
                'category_id' => 3,
                'size_id' => 1,
                'color_id' => 3,
                'image_path_on_category_page' => '/img/products/riko/in_category/10x15_silver.jpg',
				'image_path_on_product_page' => '/img/products/riko/10x15_silver.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 36
            ],
            [
                'title' => 'RIKO 13x18 "срібний"',
                'category_id' => 3,
                'size_id' => 2,
                'color_id' => 3,
                'image_path_on_category_page' => '/img/products/riko/in_category/13x18_silver.jpg',
                'image_path_on_product_page' => '/img/products/riko/13x18_silver.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 43
            ],
            [
                'title' => 'RIKO 15x21 "срібний"',
                'category_id' => 3,
                'size_id' => 3,
                'color_id' => 3,
                'image_path_on_category_page' => '/img/products/riko/in_category/15x21_silver.jpg',
				'image_path_on_product_page' => '/img/products/riko/15x21_silver.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 50
            ],
            [
                'title' => 'RIKO 18x24 "срібний"',
                'category_id' => 3,
                'size_id' => 4,
                'color_id' => 3,
                'image_path_on_category_page' => '/img/products/riko/in_category/18x24_silver.jpg',
                'image_path_on_product_page' => '/img/products/riko/18x24_silver.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 57
            ],
            [
                'title' => 'RIKO 21x30 "срібний"',
                'category_id' => 3,
                'size_id' => 5,
                'color_id' => 3,
                'image_path_on_category_page' => '/img/products/riko/in_category/21x30_silver.jpg',
				'image_path_on_product_page' => '/img/products/riko/21x30_silver.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 64
            ],
            [
                'title' => 'RIKO 25x38 "срібний"',
                'category_id' => 3,
                'size_id' => 6,
                'color_id' => 3,
                'image_path_on_category_page' => '/img/products/riko/in_category/25x38_silver.jpg',
                'image_path_on_product_page' => '/img/products/riko/25x38_silver.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 71
            ],
            [
                'title' => 'RIKO 30x40 "срібний"',
                'category_id' => 3,
                'size_id' => 7,
                'color_id' => 3,
                'image_path_on_category_page' => '/img/products/riko/in_category/30x40_silver.jpg',
                'image_path_on_product_page' => '/img/products/riko/30x40_silver.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 78
            ],
            [
                'title' => 'RIKO 10x15 "червоний"',
                'category_id' => 3,
                'size_id' => 1,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/riko/in_category/10x15_red.jpg',
				'image_path_on_product_page' => '/img/products/riko/10x15_red.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 37
            ],
            [
                'title' => 'RIKO 13x18 "червоний"',
                'category_id' => 3,
                'size_id' => 2,
                'color_id' => 5,
                'image_path_on_category_page' => '/img/products/riko/in_category/13x18_red.jpg',
                'image_path_on_product_page' => '/img/products/riko/13x18_red.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 44
            ],
            [
                'title' => 'RIKO 15x21 "червоний"',
                'category_id' => 3,
                'size_id' => 3,
                'color_id' => 4,
                'image_path_on_category_page' => '/img/products/riko/in_category/15x21_red.jpg',
				'image_path_on_product_page' => '/img/products/riko/15x21_red.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 51
            ],
            [
                'title' => 'RIKO 18x24 "червоний"',
                'category_id' => 3,
                'size_id' => 4,
                'color_id' => 4,
                'image_path_on_category_page' => '/img/products/riko/in_category/18x24_red.jpg',
                'image_path_on_product_page' => '/img/products/riko/18x24_red.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 58
            ],
            [
                'title' => 'RIKO 21x30 "червоний"',
                'category_id' => 3,
                'size_id' => 5,
                'color_id' => 4,
                'image_path_on_category_page' => '/img/products/riko/in_category/21x30_red.jpg',
				'image_path_on_product_page' => '/img/products/riko/21x30_red.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 65
            ],
            [
                'title' => 'RIKO 25x38 "червоний"',
                'category_id' => 3,
                'size_id' => 6,
                'color_id' => 4,
                'image_path_on_category_page' => '/img/products/riko/in_category/25x38_red.jpg',
                'image_path_on_product_page' => '/img/products/riko/25x38_red.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 72
            ],
            [
                'title' => 'RIKO 30x40 "червоний"',
                'category_id' => 3,
                'size_id' => 7,
                'color_id' => 4,
                'image_path_on_category_page' => '/img/products/riko/in_category/30x40_red.jpg',
                'image_path_on_product_page' => '/img/products/riko/30x40_red.jpg',
                'in_store' => 100,
                'order_in_shopping_cart' => 79
            ],
        ]);
    }
}
