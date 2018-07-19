<?php

use Illuminate\Database\Seeder;

class CreateUsersTypesDiscounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_types_discounts_relations')->insert([
           [
               'users_type_id' => 1,
               'discount_id' => 1
           ],
           [
               'users_type_id' => 1,
               'discount_id' => 2
           ],
           [
               'users_type_id' => 2,
               'discount_id' => 3
           ]
        ]);
    }
}
