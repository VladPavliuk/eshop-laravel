<?php

use Illuminate\Database\Seeder;

class CreateDiscounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            [
                'title' => 'Безкоштовна доставка при замовленні від 444 грн.',
//                'description' => 'Опис знижки 3',
                'image_path' => '/img/discounts/truck.png',
                'active_from_value' => 444,
                'numeric_discount_value' => 0,
                'percent_discount_value' => 0,
                'is_free_delivery' => true
            ],
            [
                'title' => '15% знижка + безкоштовна доставка при замовленні від 1177 грн.',
//                'description' => 'Опис знижки 1',
                'active_from_value' => 1144,
                'image_path' => '/img/discounts/truck.png',
                'numeric_discount_value' => 0,
                'percent_discount_value' => 15,
                'is_free_delivery' => false
            ],
            [
                'title' => 'Безкоштовна доставка',
//                'description' => 'Опис знижки 2',
                'image_path' => '/img/discounts/truck.png',
                'active_from_value' => 0,
                'numeric_discount_value' => 0,
                'percent_discount_value' => 0,
                'is_free_delivery' => true
            ]
        ]);
    }
}
