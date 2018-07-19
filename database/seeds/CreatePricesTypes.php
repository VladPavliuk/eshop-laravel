<?php

use Illuminate\Database\Seeder;

class CreatePricesTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices_types')->insert([
           [
               'title' => 'Закупівельна ціна'
           ],
           [
               'title' => 'Оптова ціна'
           ]
        ]);
    }
}
