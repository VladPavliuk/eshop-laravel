<?php

use Illuminate\Database\Seeder;

class CreateSizes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_sizes')->insert([
            [
                'title' => '10x15'
            ],
            [
                'title' => '13x18'
            ],
            [
                'title' => '15x21'
            ],
            [
                'title' => '18x24'
            ],
            [
                'title' => '21x30'
            ],
            [
                'title' => '25x38'
            ],
            [
                'title' => '30x40'
            ]
        ]);
    }
}
