<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreateCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_categories')->insert([
            [
                'title' => 'LEONARDO',
                'title_on_home_page' => 'Фоторамки серії LEONARDO',
                'title_on_category_page' => 'Фоторамки LEONARDO',
                'image_path' => '/img/categories/leonardo.jpg',
                'is_on_home_page' => 1,
                'description' => htmlspecialchars('    
                    <img src="/img/leonardo_shema.png" height="100">
                    <br>
                    <b>Конструкція фоторамки:</b>
                    <ul>
                        <li>Дерев\'яна рамка (покриття - два шари кольорового лаку)</li>
                        <li>Скло, етикетка, задник з ДВП і ніжкою</li>
                        <li>Підвіска, упаковка з термозбіжної плівки</li>
                    </ul>
                '),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'FRODO',
                'title_on_home_page' => 'Фоторамки серії FRODO',
                'title_on_category_page' => 'Фоторамки FRODO',
                'description' => htmlspecialchars('    
                    <img src="/img/frodo_shema.png" height="100">
                    <br>
                    <b>Конструкція фоторамки:</b>
                    <ul>
                        <li>Дерев\'яна рамка (покриття - два шари кольорового лаку)</li>
                        <li>Скло, етикетка, задник з ДВП і ніжкою</li>
                        <li>Підвіска, упаковка з термозбіжної плівки</li>
                    </ul>
                '),
                'image_path' => '/img/categories/frodo.jpg',
                'is_on_home_page' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'RIKO',
                'title_on_home_page' => 'Фоторамки серії RIKO',
                'title_on_category_page' => 'Фоторамки RIKO',
                'description' => htmlspecialchars('    
                    <img src="/img/riko_shema.png" height="100">
                    <br>
                    <b>Конструкція фоторамки:</b>
                    <ul>
                        <li>Дерев\'яна рамка (покриття - два шари кольорового лаку)</li>
                        <li>Скло, етикетка, задник з ДВП і ніжкою</li>
                        <li>Підвіска, упаковка з термозбіжної плівки</li>
                    </ul>
                '),
                'image_path' => '/img/categories/riko.jpg',
                'is_on_home_page' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Фурнітура',
                'title_on_home_page' => '',
                'title_on_category_page' => 'Форнітура',
                'description' => '',
                'image_path' => '/img/categories/Riko.jpg',
                'is_on_home_page' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
