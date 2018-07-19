<?php

use Illuminate\Database\Seeder;

class CreateProductsImages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_photos')->insert([
            [
                'product_id' => 1,
                'image_path' => '/img/products/leonardo/10x15_light.jpg'
            ],
            [
                'product_id' => 1,
                'image_path' => '/img/products/leonardo/10x15_light_2.jpg'
            ],
            [
                'product_id' => 1,
                'image_path' => '/img/products/leonardo/10x15_light_3.jpg'
            ],
            [
                'product_id' => 2,
                'image_path' => '/img/products/leonardo/13x18_light.jpg'
            ],
            [
                'product_id' => 2,
                'image_path' => '/img/products/leonardo/13x18_light_2.jpg'
            ],
            [
                'product_id' => 2,
                'image_path' => '/img/products/leonardo/13x18_light_3.jpg'
            ],
            [
                'product_id' => 3,
                'image_path' => '/img/products/leonardo/15x21_light.jpg'
            ],
            [
                'product_id' => 3,
                'image_path' => '/img/products/leonardo/15x21_light_2.jpg'
            ],
            [
                'product_id' => 3,
                'image_path' => '/img/products/leonardo/15x21_light_3.jpg'
            ],
            [
                'product_id' => 4,
                'image_path' => '/img/products/leonardo/18x24_light.jpg'
            ],
            [
                'product_id' => 4,
                'image_path' => '/img/products/leonardo/18x24_light_2.jpg'
            ],
            [
                'product_id' => 4,
                'image_path' => '/img/products/leonardo/18x24_light_3.jpg'
            ],
            [
                'product_id' => 5,
                'image_path' => '/img/products/leonardo/21x30_light.jpg'
            ],
            [
                'product_id' => 5,
                'image_path' => '/img/products/leonardo/21x30_light_2.jpg'
            ],
            [
                'product_id' => 6,
                'image_path' => '/img/products/leonardo/21x30F_light.jpg'
            ],
            [
                'product_id' => 6,
                'image_path' => '/img/products/leonardo/21x30F_light_2.jpg'
            ],
            [
                'product_id' => 6,
                'image_path' => '/img/products/leonardo/21x30F_light_3.jpg'
            ],
            [
                'product_id' => 7,
                'image_path' => '/img/products/leonardo/25x38_light.jpg'
            ],
            [
                'product_id' => 7,
                'image_path' => '/img/products/leonardo/25x38_light_2.jpg'
            ],
            [
                'product_id' => 8,
                'image_path' => '/img/products/leonardo/30x40_light.jpg'
            ],
            [
                'product_id' => 8,
                'image_path' => '/img/products/leonardo/30x40_light_2.jpg'
            ],
            [
                'product_id' => 9,
                'image_path' => '/img/products/leonardo/10x15_dark.jpg'
            ],
            [
                'product_id' => 9,
                'image_path' => '/img/products/leonardo/10x15_dark_2.jpg'
            ],
            [
                'product_id' => 9,
                'image_path' => '/img/products/leonardo/10x15_dark_3.jpg'
            ],
            [
                'product_id' => 10,
                'image_path' => '/img/products/leonardo/13x18_dark.jpg'
            ],
            [
                'product_id' => 10,
                'image_path' => '/img/products/leonardo/13x18_dark_2.jpg'
            ],
            [
                'product_id' => 10,
                'image_path' => '/img/products/leonardo/13x18_dark_3.jpg'
            ],
            [
                'product_id' => 11,
                'image_path' => '/img/products/leonardo/15x21_dark.jpg'
            ],
            [
                'product_id' => 11,
                'image_path' => '/img/products/leonardo/15x21_dark_2.jpg'
            ],
            [
                'product_id' => 11,
                'image_path' => '/img/products/leonardo/15x21_dark_3.jpg'
            ],
            [
                'product_id' => 12,
                'image_path' => '/img/products/leonardo/18x24_dark.jpg'
            ],
            [
                'product_id' => 12,
                'image_path' => '/img/products/leonardo/18x24_dark_2.jpg'
            ],
            [
                'product_id' => 12,
                'image_path' => '/img/products/leonardo/18x24_dark_3.jpg'
            ],
            [
                'product_id' => 13,
                'image_path' => '/img/products/leonardo/21x30_dark.jpg'
            ],
            [
                'product_id' => 13,
                'image_path' => '/img/products/leonardo/21x30_dark_2.jpg'
            ],
            [
                'product_id' => 14,
                'image_path' => '/img/products/leonardo/21x30F_dark.jpg'
            ],
            [
                'product_id' => 14,
                'image_path' => '/img/products/leonardo/21x30F_dark_2.jpg'
            ],
            [
                'product_id' => 14,
                'image_path' => '/img/products/leonardo/21x30F_dark_3.jpg'
            ],
            [
                'product_id' => 15,
                'image_path' => '/img/products/leonardo/25x38_dark.jpg'
            ],
            [
                'product_id' => 15,
                'image_path' => '/img/products/leonardo/25x38_dark_2.jpg'
            ],
            [
                'product_id' => 16,
                'image_path' => '/img/products/leonardo/30x40_dark.jpg'
            ],
            [
                'product_id' => 16,
                'image_path' => '/img/products/leonardo/30x40_dark_2.jpg'
            ],
            [
                'product_id' => 17,
                'image_path' => '/img/products/frodo/10x15_light.jpg'
            ],
            [
                'product_id' => 17,
                'image_path' => '/img/products/frodo/10x15_light_2.jpg'
            ],
            [
                'product_id' => 17,
                'image_path' => '/img/products/frodo/10x15_light_3.jpg'
            ],
            [
                'product_id' => 18,
                'image_path' => '/img/products/frodo/13x18_light.jpg'
            ],
            [
                'product_id' => 18,
                'image_path' => '/img/products/frodo/13x18_light_2.jpg'
            ],
            [
                'product_id' => 18,
                'image_path' => '/img/products/frodo/13x18_light_3.jpg'
            ],
            [
                'product_id' => 19,
                'image_path' => '/img/products/frodo/15x21_light.jpg'
            ],
            [
                'product_id' => 19,
                'image_path' => '/img/products/frodo/15x21_light_2.jpg'
            ],
            [
                'product_id' => 19,
                'image_path' => '/img/products/frodo/15x21_light_3.jpg'
            ],
            [
                'product_id' => 20,
                'image_path' => '/img/products/frodo/18x24_light.jpg'
            ],
            [
                'product_id' => 20,
                'image_path' => '/img/products/frodo/18x24_light_2.jpg'
            ],
            [
                'product_id' => 20,
                'image_path' => '/img/products/frodo/18x24_light_3.jpg'
            ],
            [
                'product_id' => 21,
                'image_path' => '/img/products/frodo/21x30_light.jpg'
            ],
            [
                'product_id' => 21,
                'image_path' => '/img/products/frodo/21x30_light_2.jpg'
            ],
            [
                'product_id' => 22,
                'image_path' => '/img/products/frodo/25x38_light.jpg'
            ],
            [
                'product_id' => 22,
                'image_path' => '/img/products/frodo/25x38_light_2.jpg'
            ],
            [
                'product_id' => 23,
                'image_path' => '/img/products/frodo/30x40_light.jpg'
            ],
            [
                'product_id' => 23,
                'image_path' => '/img/products/frodo/30x40_light_2.jpg'
            ],
            [
                'product_id' => 24,
                'image_path' => '/img/products/frodo/10x15_dark.jpg'
            ],
            [
                'product_id' => 24,
                'image_path' => '/img/products/frodo/10x15_dark_2.jpg'
            ],
            [
                'product_id' => 24,
                'image_path' => '/img/products/frodo/10x15_dark_3.jpg'
            ],
            [
                'product_id' => 25,
                'image_path' => '/img/products/frodo/13x18_dark.jpg'
            ],
            [
                'product_id' => 25,
                'image_path' => '/img/products/frodo/13x18_dark_2.jpg'
            ],
            [
                'product_id' => 25,
                'image_path' => '/img/products/frodo/13x18_dark_3.jpg'
            ],
            [
                'product_id' => 26,
                'image_path' => '/img/products/frodo/15x21_dark.jpg'
            ],
            [
                'product_id' => 26,
                'image_path' => '/img/products/frodo/15x21_dark_2.jpg'
            ],
            [
                'product_id' => 26,
                'image_path' => '/img/products/frodo/15x21_dark_3.jpg'
            ],
            [
                'product_id' => 27,
                'image_path' => '/img/products/frodo/18x24_dark.jpg'
            ],
            [
                'product_id' => 27,
                'image_path' => '/img/products/frodo/18x24_dark_2.jpg'
            ],
            [
                'product_id' => 27,
                'image_path' => '/img/products/frodo/18x24_dark_3.jpg'
            ],
            [
                'product_id' => 28,
                'image_path' => '/img/products/frodo/21x30_dark.jpg'
            ],
            [
                'product_id' => 28,
                'image_path' => '/img/products/frodo/21x30_dark_2.jpg'
            ],
            [
                'product_id' => 29,
                'image_path' => '/img/products/frodo/25x38_dark.jpg'
            ],
            [
                'product_id' => 29,
                'image_path' => '/img/products/frodo/25x38_dark_2.jpg'
            ],
            [
                'product_id' => 30,
                'image_path' => '/img/products/frodo/30x40_dark.jpg'
            ],
            [
                'product_id' => 30,
                'image_path' => '/img/products/frodo/30x40_dark_2.jpg'
            ],
            [
                'product_id' => 31,
                'image_path' => '/img/products/riko/10x15_light.jpg'
            ],
            [
                'product_id' => 31,
                'image_path' => '/img/products/riko/10x15_light_2.jpg'
            ],
            [
                'product_id' => 31,
                'image_path' => '/img/products/riko/10x15_light_3.jpg'
            ],
            [
                'product_id' => 32,
                'image_path' => '/img/products/riko/13x18_light.jpg'
            ],
            [
                'product_id' => 32,
                'image_path' => '/img/products/riko/13x18_light_2.jpg'
            ],
            [
                'product_id' => 32,
                'image_path' => '/img/products/riko/13x18_light_3.jpg'
            ],
            [
                'product_id' => 33,
                'image_path' => '/img/products/riko/15x21_light.jpg'
            ],
            [
                'product_id' => 33,
                'image_path' => '/img/products/riko/15x21_light_2.jpg'
            ],
            [
                'product_id' => 33,
                'image_path' => '/img/products/riko/15x21_light_3.jpg'
            ],
            [
                'product_id' => 34,
                'image_path' => '/img/products/riko/18x24_light.jpg'
            ],
            [
                'product_id' => 34,
                'image_path' => '/img/products/riko/18x24_light_2.jpg'
            ],
            [
                'product_id' => 34,
                'image_path' => '/img/products/riko/18x24_light_3.jpg'
            ],
            [
                'product_id' => 35,
                'image_path' => '/img/products/riko/21x30_light.jpg'
            ],
            [
                'product_id' => 35,
                'image_path' => '/img/products/riko/21x30_light_2.jpg'
            ],
            [
                'product_id' => 36,
                'image_path' => '/img/products/riko/25x38_light.jpg'
            ],
            [
                'product_id' => 36,
                'image_path' => '/img/products/riko/25x38_light_2.jpg'
            ],
            [
                'product_id' => 37,
                'image_path' => '/img/products/riko/30x40_light.jpg'
            ],
            [
                'product_id' => 37,
                'image_path' => '/img/products/riko/30x40_light_2.jpg'
            ],
            [
                'product_id' => 38,
                'image_path' => '/img/products/riko/10x15_dark.jpg'
            ],
            [
                'product_id' => 38,
                'image_path' => '/img/products/riko/10x15_dark_2.jpg'
            ],
            [
                'product_id' => 38,
                'image_path' => '/img/products/riko/10x15_dark_3.jpg'
            ],
            [
                'product_id' => 39,
                'image_path' => '/img/products/riko/13x18_dark.jpg'
            ],
            [
                'product_id' => 39,
                'image_path' => '/img/products/riko/13x18_dark_2.jpg'
            ],
            [
                'product_id' => 39,
                'image_path' => '/img/products/riko/13x18_dark_3.jpg'
            ],
            [
                'product_id' => 40,
                'image_path' => '/img/products/riko/15x21_dark.jpg'
            ],
            [
                'product_id' => 40,
                'image_path' => '/img/products/riko/15x21_dark_2.jpg'
            ],
            [
                'product_id' => 40,
                'image_path' => '/img/products/riko/15x21_dark_3.jpg'
            ],
            [
                'product_id' => 41,
                'image_path' => '/img/products/riko/18x24_dark.jpg'
            ],
            [
                'product_id' => 41,
                'image_path' => '/img/products/riko/18x24_dark_2.jpg'
            ],
            [
                'product_id' => 41,
                'image_path' => '/img/products/riko/18x24_dark_3.jpg'
            ],
            [
                'product_id' => 42,
                'image_path' => '/img/products/riko/21x30_dark.jpg'
            ],
            [
                'product_id' => 42,
                'image_path' => '/img/products/riko/21x30_dark_2.jpg'
            ],
            [
                'product_id' => 43,
                'image_path' => '/img/products/riko/25x38_dark.jpg'
            ],
            [
                'product_id' => 43,
                'image_path' => '/img/products/riko/25x38_dark_2.jpg'
            ],
            [
                'product_id' => 44,
                'image_path' => '/img/products/riko/30x40_dark.jpg'
            ],
            [
                'product_id' => 44,
                'image_path' => '/img/products/riko/30x40_dark_2.jpg'
            ],
            [
                'product_id' => 45,
                'image_path' => '/img/products/riko/10x15_black.jpg'
            ],
            [
                'product_id' => 45,
                'image_path' => '/img/products/riko/10x15_black_2.jpg'
            ],
            [
                'product_id' => 45,
                'image_path' => '/img/products/riko/10x15_black_3.jpg'
            ],
            [
                'product_id' => 46,
                'image_path' => '/img/products/riko/13x18_black.jpg'
            ],
            [
                'product_id' => 46,
                'image_path' => '/img/products/riko/13x18_black_2.jpg'
            ],
            [
                'product_id' => 46,
                'image_path' => '/img/products/riko/13x18_black_3.jpg'
            ],
            [
                'product_id' => 47,
                'image_path' => '/img/products/riko/15x21_black.jpg'
            ],
            [
                'product_id' => 47,
                'image_path' => '/img/products/riko/15x21_black_2.jpg'
            ],
            [
                'product_id' => 47,
                'image_path' => '/img/products/riko/15x21_black_3.jpg'
            ],
            [
                'product_id' => 48,
                'image_path' => '/img/products/riko/18x24_black.jpg'
            ],
            [
                'product_id' => 48,
                'image_path' => '/img/products/riko/18x24_black_2.jpg'
            ],
            [
                'product_id' => 48,
                'image_path' => '/img/products/riko/18x24_black_3.jpg'
            ],
            [
                'product_id' => 49,
                'image_path' => '/img/products/riko/21x30_black.jpg'
            ],
            [
                'product_id' => 49,
                'image_path' => '/img/products/riko/21x30_black_2.jpg'
            ],
            [
                'product_id' => 50,
                'image_path' => '/img/products/riko/25x38_black.jpg'
            ],
            [
                'product_id' => 50,
                'image_path' => '/img/products/riko/25x38_black_2.jpg'
            ],
            [
                'product_id' => 51,
                'image_path' => '/img/products/riko/30x40_black.jpg'
            ],
            [
                'product_id' => 51,
                'image_path' => '/img/products/riko/30x40_black_2.jpg'
            ],
            [
                'product_id' => 52,
                'image_path' => '/img/products/riko/10x15_white.jpg'
            ],
            [
                'product_id' => 52,
                'image_path' => '/img/products/riko/10x15_white_2.jpg'
            ],
            [
                'product_id' => 52,
                'image_path' => '/img/products/riko/10x15_white_3.jpg'
            ],
            [
                'product_id' => 53,
                'image_path' => '/img/products/riko/13x18_white.jpg'
            ],
            [
                'product_id' => 53,
                'image_path' => '/img/products/riko/13x18_white_2.jpg'
            ],
            [
                'product_id' => 53,
                'image_path' => '/img/products/riko/13x18_white_3.jpg'
            ],
            [
                'product_id' => 54,
                'image_path' => '/img/products/riko/15x21_white.jpg'
            ],
            [
                'product_id' => 54,
                'image_path' => '/img/products/riko/15x21_white_2.jpg'
            ],
            [
                'product_id' => 54,
                'image_path' => '/img/products/riko/15x21_white_3.jpg'
            ],
            [
                'product_id' => 55,
                'image_path' => '/img/products/riko/18x24_white.jpg'
            ],
            [
                'product_id' => 55,
                'image_path' => '/img/products/riko/18x24_white_2.jpg'
            ],
            [
                'product_id' => 55,
                'image_path' => '/img/products/riko/18x24_white_3.jpg'
            ],
            [
                'product_id' => 56,
                'image_path' => '/img/products/riko/21x30_white.jpg'
            ],
            [
                'product_id' => 56,
                'image_path' => '/img/products/riko/21x30_white_2.jpg'
            ],
            [
                'product_id' => 57,
                'image_path' => '/img/products/riko/25x38_white.jpg'
            ],
            [
                'product_id' => 57,
                'image_path' => '/img/products/riko/25x38_white_2.jpg'
            ],
            [
                'product_id' => 58,
                'image_path' => '/img/products/riko/30x40_white.jpg'
            ],
            [
                'product_id' => 58,
                'image_path' => '/img/products/riko/30x40_white_2.jpg'
            ],
            [
                'product_id' => 59,
                'image_path' => '/img/products/riko/10x15_golden.jpg'
            ],
            [
                'product_id' => 59,
                'image_path' => '/img/products/riko/10x15_golden_2.jpg'
            ],
            [
                'product_id' => 59,
                'image_path' => '/img/products/riko/10x15_golden_3.jpg'
            ],
            [
                'product_id' => 60,
                'image_path' => '/img/products/riko/13x18_golden.jpg'
            ],
            [
                'product_id' => 60,
                'image_path' => '/img/products/riko/13x18_golden_2.jpg'
            ],
            [
                'product_id' => 60,
                'image_path' => '/img/products/riko/13x18_golden_3.jpg'
            ],
            [
                'product_id' => 61,
                'image_path' => '/img/products/riko/15x21_golden.jpg'
            ],
            [
                'product_id' => 61,
                'image_path' => '/img/products/riko/15x21_golden_2.jpg'
            ],
            [
                'product_id' => 61,
                'image_path' => '/img/products/riko/15x21_golden_3.jpg'
            ],
            [
                'product_id' => 62,
                'image_path' => '/img/products/riko/18x24_golden.jpg'
            ],
            [
                'product_id' => 62,
                'image_path' => '/img/products/riko/18x24_golden_2.jpg'
            ],
            [
                'product_id' => 62,
                'image_path' => '/img/products/riko/18x24_golden_3.jpg'
            ],
            [
                'product_id' => 63,
                'image_path' => '/img/products/riko/21x30_golden.jpg'
            ],
            [
                'product_id' => 63,
                'image_path' => '/img/products/riko/21x30_golden_2.jpg'
            ],
            [
                'product_id' => 64,
                'image_path' => '/img/products/riko/25x38_golden.jpg'
            ],
            [
                'product_id' => 64,
                'image_path' => '/img/products/riko/25x38_golden_2.jpg'
            ],
            [
                'product_id' => 65,
                'image_path' => '/img/products/riko/30x40_golden.jpg'
            ],
            [
                'product_id' => 65,
                'image_path' => '/img/products/riko/30x40_golden_2.jpg'
            ],
            [
                'product_id' => 66,
                'image_path' => '/img/products/riko/10x15_silver.jpg'
            ],
            [
                'product_id' => 66,
                'image_path' => '/img/products/riko/10x15_silver_2.jpg'
            ],
            [
                'product_id' => 66,
                'image_path' => '/img/products/riko/10x15_silver_3.jpg'
            ],
            [
                'product_id' => 67,
                'image_path' => '/img/products/riko/13x18_silver.jpg'
            ],
            [
                'product_id' => 67,
                'image_path' => '/img/products/riko/13x18_silver_2.jpg'
            ],
            [
                'product_id' => 67,
                'image_path' => '/img/products/riko/13x18_silver_3.jpg'
            ],
            [
                'product_id' => 68,
                'image_path' => '/img/products/riko/15x21_silver.jpg'
            ],
            [
                'product_id' => 68,
                'image_path' => '/img/products/riko/15x21_silver_2.jpg'
            ],
            [
                'product_id' => 68,
                'image_path' => '/img/products/riko/15x21_silver_3.jpg'
            ],
            [
                'product_id' => 69,
                'image_path' => '/img/products/riko/18x24_silver.jpg'
            ],
            [
                'product_id' => 69,
                'image_path' => '/img/products/riko/18x24_silver_2.jpg'
            ],
            [
                'product_id' => 69,
                'image_path' => '/img/products/riko/18x24_silver_3.jpg'
            ],
            [
                'product_id' => 70,
                'image_path' => '/img/products/riko/21x30_silver.jpg'
            ],
            [
                'product_id' => 70,
                'image_path' => '/img/products/riko/21x30_silver_2.jpg'
            ],
            [
                'product_id' => 71,
                'image_path' => '/img/products/riko/25x38_silver.jpg'
            ],
            [
                'product_id' => 71,
                'image_path' => '/img/products/riko/25x38_silver_2.jpg'
            ],
            [
                'product_id' => 72,
                'image_path' => '/img/products/riko/30x40_silver.jpg'
            ],
            [
                'product_id' => 72,
                'image_path' => '/img/products/riko/30x40_silver_2.jpg'
            ],
            [
                'product_id' => 73,
                'image_path' => '/img/products/riko/10x15_red.jpg'
            ],
            [
                'product_id' => 73,
                'image_path' => '/img/products/riko/10x15_red_2.jpg'
            ],
            [
                'product_id' => 73,
                'image_path' => '/img/products/riko/10x15_red_3.jpg'
            ],
            [
                'product_id' => 74,
                'image_path' => '/img/products/riko/13x18_red.jpg'
            ],
            [
                'product_id' => 74,
                'image_path' => '/img/products/riko/13x18_red_2.jpg'
            ],
            [
                'product_id' => 74,
                'image_path' => '/img/products/riko/13x18_red_3.jpg'
            ],
            [
                'product_id' => 75,
                'image_path' => '/img/products/riko/15x21_red.jpg'
            ],
            [
                'product_id' => 75,
                'image_path' => '/img/products/riko/15x21_red_2.jpg'
            ],
            [
                'product_id' => 75,
                'image_path' => '/img/products/riko/15x21_red_3.jpg'
            ],
            [
                'product_id' => 76,
                'image_path' => '/img/products/riko/18x24_red.jpg'
            ],
            [
                'product_id' => 76,
                'image_path' => '/img/products/riko/18x24_red_2.jpg'
            ],
            [
                'product_id' => 76,
                'image_path' => '/img/products/riko/18x24_red_3.jpg'
            ],
            [
                'product_id' => 77,
                'image_path' => '/img/products/riko/21x30_red.jpg'
            ],
            [
                'product_id' => 77,
                'image_path' => '/img/products/riko/21x30_red_2.jpg'
            ],
            [
                'product_id' => 78,
                'image_path' => '/img/products/riko/25x38_red.jpg'
            ],
            [
                'product_id' => 78,
                'image_path' => '/img/products/riko/25x38_red_2.jpg'
            ],
            [
                'product_id' => 79,
                'image_path' => '/img/products/riko/30x40_red.jpg'
            ],
            [
                'product_id' => 79,
                'image_path' => '/img/products/riko/30x40_red_2.jpg'
            ],
            [
                'product_id' => 80,
                'image_path' => '/img/products/back_walls/10x15_back_wall.jpg'
            ],
            [
                'product_id' => 80,
                'image_path' => '/img/products/back_walls/10x15_back_wall_2.jpg'
            ],
            [
                'product_id' => 80,
                'image_path' => '/img/products/back_walls/10x15_back_wall_3.jpg'
            ],
            [
                'product_id' => 81,
                'image_path' => '/img/products/back_walls/13x18_back_wall.jpg'
            ],
            [
                'product_id' => 81,
                'image_path' => '/img/products/back_walls/13x18_back_wall_2.jpg'
            ],
            [
                'product_id' => 81,
                'image_path' => '/img/products/back_walls/13x18_back_wall_3.jpg'
            ],
            [
                'product_id' => 82,
                'image_path' => '/img/products/back_walls/15x21_back_wall.jpg'
            ],
            [
                'product_id' => 82,
                'image_path' => '/img/products/back_walls/15x21_back_wall_2.jpg'
            ],
            [
                'product_id' => 82,
                'image_path' => '/img/products/back_walls/15x21_back_wall_3.jpg'
            ],
            [
                'product_id' => 83,
                'image_path' => '/img/products/back_walls/18x24_back_wall.jpg'
            ],
            [
                'product_id' => 83,
                'image_path' => '/img/products/back_walls/18x24_back_wall_2.jpg'
            ],
            [
                'product_id' => 83,
                'image_path' => '/img/products/back_walls/18x24_back_wall_3.jpg'
            ],
            [
                'product_id' => 84,
                'image_path' => '/img/products/back_walls/21x30_back_wall.jpg'
            ],
            [
                'product_id' => 84,
                'image_path' => '/img/products/back_walls/21x30_back_wall_2.jpg'
            ]
        ]);
    }
}
