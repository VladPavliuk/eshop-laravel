<?php

use Illuminate\Database\Seeder;

class CreateUsersTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_types')->insert([
           [
               'title' => 'Анонім'
           ],
           [
               'title' => 'Оптовий покупець'
           ]
        ]);
    }
}
