<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreateCategoriesTagsRelations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_tag_relations')->insert([
            [
                'category_id' => 1,
                'category_tag_id' => 1
            ],
            [
                'category_id' => 2,
                'category_tag_id' => 1
            ],
            [
                'category_id' => 3,
                'category_tag_id' => 1
            ],
        ]);
    }
}
