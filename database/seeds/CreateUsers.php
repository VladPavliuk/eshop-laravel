<?php

use Illuminate\Database\Seeder;

class CreateUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Valys',
                'last_name' => 'Pav',
                'email' => 'vlad@gmail.com',
                'phone' => '+3801231231',
                'type_id' => 2,
                'password' => bcrypt('123456')
            ],
            [
                'first_name' => 'client',
                'last_name' => 'client',
                'email' => 'vip-client',
                'phone' => '+3801231232',
                'type_id' => 2,
                'password' => bcrypt('3971')
            ],
        ]);
    }
}
