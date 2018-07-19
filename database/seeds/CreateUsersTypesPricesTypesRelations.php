<?php

use Illuminate\Database\Seeder;

class CreateUsersTypesPricesTypesRelations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_types_prices_types_relations')->insert([
           [
               'users_type_id' => 1,
               'prices_type_id' => 1
           ],
           [
               'users_type_id' => 2,
               'prices_type_id' => 2
           ]
        ]);
    }
}
