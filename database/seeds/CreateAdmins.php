<?php

use Illuminate\Database\Seeder;

class CreateAdmins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'first_name' => 'Valys',
                'last_name' => 'Pav',
                'email' => 'vas.pav@gmail.com',
                'password' => bcrypt('123456')
            ]
        ]);
    }
}
