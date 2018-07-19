<?php

use Illuminate\Database\Seeder;

class CreateTransportationOptions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transportation_options')->insert([
            [
                'title' => 'Нова пошта'
            ],
            [
                'title' => 'Інтайм'
            ]
        ]);
    }
}
