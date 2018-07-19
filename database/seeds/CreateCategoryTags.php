<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreateCategoryTags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_tags')->insert([
            [
                'title' => 'Фоторамки'
            ]
        ]);
    }
}
