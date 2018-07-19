<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreatePrices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            //> Leonardo prices
            [
                'product_id' => 1,
                'type_id' => 1,
                'value' => 26
            ],
            [
                'product_id' => 2,
                'type_id' => 1,
                'value' => 31
            ],
            [
                'product_id' => 3,
                'type_id' => 1,
                'value' => 37
            ],
            [
                'product_id' => 4,
                'type_id' => 1,
                'value' => 45
            ],
            [
                'product_id' => 5,
                'type_id' => 1,
                'value' => 51
            ],
            [
                'product_id' => 6,
                'type_id' => 1,
                'value' => 56
            ],
            [
                'product_id' => 7,
                'type_id' => 1,
                'value' => 73
            ],
            [
                'product_id' => 8,
                'type_id' => 1,
                'value' => 82
            ],
            [
                'product_id' => 9,
                'type_id' => 1,
                'value' => 26
            ],
            [
                'product_id' => 10,
                'type_id' => 1,
                'value' => 31
            ],
            [
                'product_id' => 11,
                'type_id' => 1,
                'value' => 37
            ],
            [
                'product_id' => 12,
                'type_id' => 1,
                'value' => 45
            ],
            [
                'product_id' => 13,
                'type_id' => 1,
                'value' => 51
            ],
            [
                'product_id' => 14,
                'type_id' => 1,
                'value' => 56
            ],
            [
                'product_id' => 15,
                'type_id' => 1,
                'value' => 73
            ],
            [
                'product_id' => 16,
                'type_id' => 1,
                'value' => 82
            ],
            [
                'product_id' => 1,
                'type_id' => 2,
                'value' => 18.73
            ],
            [
                'product_id' => 2,
                'type_id' => 2,
                'value' => 22.52
            ],
            [
                'product_id' => 3,
                'type_id' => 2,
                'value' => 26.64
            ],
            [
                'product_id' => 4,
                'type_id' => 2,
                'value' => 32.12
            ],
            [
                'product_id' => 5,
                'type_id' => 2,
                'value' => 37.13
            ],
            [
                'product_id' => 6,
                'type_id' => 2,
                'value' => 40.30
            ],
            [
                'product_id' => 7,
                'type_id' => 2,
                'value' => 52.98
            ],
            [
                'product_id' => 8,
                'type_id' => 2,
                'value' => 58.99
            ],
            [
                'product_id' => 9,
                'type_id' => 2,
                'value' => 18.73
            ],
            [
                'product_id' => 10,
                'type_id' => 2,
                'value' => 22.52
            ],
            [
                'product_id' => 11,
                'type_id' => 2,
                'value' => 26.64
            ],
            [
                'product_id' => 12,
                'type_id' => 2,
                'value' => 32.12
            ],
            [
                'product_id' => 13,
                'type_id' => 2,
                'value' => 37.13
            ],
            [
                'product_id' => 14,
                'type_id' => 2,
                'value' => 40.30
            ],
            [
                'product_id' => 15,
                'type_id' => 2,
                'value' => 52.98
            ],
            [
                'product_id' => 16,
                'type_id' => 2,
                'value' => 58.99
            ],
            //<
            //> Frodo prices
            [
                'product_id' => 17,
                'type_id' => 1,
                'value' => 24
            ],
            [
                'product_id' => 18,
                'type_id' => 1,
                'value' => 28
            ],
            [
                'product_id' => 19,
                'type_id' => 1,
                'value' => 34
            ],
            [
                'product_id' => 20,
                'type_id' => 1,
                'value' => 40
            ],
            [
                'product_id' => 21,
                'type_id' => 1,
                'value' => 47
            ],
            [
                'product_id' => 22,
                'type_id' => 1,
                'value' => 67
            ],
            [
                'product_id' => 23,
                'type_id' => 1,
                'value' => 74
            ],
            [
                'product_id' => 24,
                'type_id' => 1,
                'value' => 24
            ],
            [
                'product_id' => 25,
                'type_id' => 1,
                'value' => 28
            ],
            [
                'product_id' => 26,
                'type_id' => 1,
                'value' => 34
            ],
            [
                'product_id' => 27,
                'type_id' => 1,
                'value' => 40
            ],
            [
                'product_id' => 28,
                'type_id' => 1,
                'value' => 47
            ],
            [
                'product_id' => 29,
                'type_id' => 1,
                'value' => 67
            ],
            [
                'product_id' => 30,
                'type_id' => 1,
                'value' => 74
            ],
            [
                'product_id' => 17,
                'type_id' => 2,
                'value' => 17.02
            ],
            [
                'product_id' => 18,
                'type_id' => 2,
                'value' => 20.47
            ],
            [
                'product_id' => 19,
                'type_id' => 2,
                'value' => 24.22
            ],
            [
                'product_id' => 20,
                'type_id' => 2,
                'value' => 29.20
            ],
            [
                'product_id' => 21,
                'type_id' => 2,
                'value' => 33.76
            ],
            [
                'product_id' => 22,
                'type_id' => 2,
                'value' => 48.17
            ],
            [
                'product_id' => 23,
                'type_id' => 2,
                'value' => 53.63
            ],
            [
                'product_id' => 24,
                'type_id' => 2,
                'value' => 17.02
            ],
            [
                'product_id' => 25,
                'type_id' => 2,
                'value' => 20.47
            ],
            [
                'product_id' => 26,
                'type_id' => 2,
                'value' => 24.22
            ],
            [
                'product_id' => 27,
                'type_id' => 2,
                'value' => 29.20
            ],
            [
                'product_id' => 28,
                'type_id' => 2,
                'value' => 33.76
            ],
            [
                'product_id' => 29,
                'type_id' => 2,
                'value' => 48.17
            ],
            [
                'product_id' => 30,
                'type_id' => 2,
                'value' => 53.63
            ],
            //<
            //> Riko prices
            [
                'product_id' => 31,
                'type_id' => 1,
                'value' => 24
            ],
            [
                'product_id' => 32,
                'type_id' => 1,
                'value' => 28
            ],
            [
                'product_id' => 33,
                'type_id' => 1,
                'value' => 34
            ],
            [
                'product_id' => 34,
                'type_id' => 1,
                'value' => 40
            ],
            [
                'product_id' => 35,
                'type_id' => 1,
                'value' => 47
            ],
            [
                'product_id' => 36,
                'type_id' => 1,
                'value' => 67
            ],
            [
                'product_id' => 37,
                'type_id' => 1,
                'value' => 74
            ],
            [
                'product_id' => 38,
                'type_id' => 1,
                'value' => 24
            ],
            [
                'product_id' => 39,
                'type_id' => 1,
                'value' => 28
            ],
            [
                'product_id' => 40,
                'type_id' => 1,
                'value' => 34
            ],
            [
                'product_id' => 41,
                'type_id' => 1,
                'value' => 40
            ],
            [
                'product_id' => 42,
                'type_id' => 1,
                'value' => 47
            ],
            [
                'product_id' => 43,
                'type_id' => 1,
                'value' => 67
            ],
            [
                'product_id' => 44,
                'type_id' => 1,
                'value' => 74
            ],
            [
                'product_id' => 45,
                'type_id' => 1,
                'value' => 24
            ],
            [
                'product_id' => 46,
                'type_id' => 1,
                'value' => 28
            ],
            [
                'product_id' => 47,
                'type_id' => 1,
                'value' => 34
            ],
            [
                'product_id' => 48,
                'type_id' => 1,
                'value' => 40
            ],
            [
                'product_id' => 49,
                'type_id' => 1,
                'value' => 47
            ],
            [
                'product_id' => 50,
                'type_id' => 1,
                'value' => 67
            ],
            [
                'product_id' => 51,
                'type_id' => 1,
                'value' => 74
            ],
            [
                'product_id' => 52,
                'type_id' => 1,
                'value' => 24
            ],
            [
                'product_id' => 53,
                'type_id' => 1,
                'value' => 28
            ],
            [
                'product_id' => 54,
                'type_id' => 1,
                'value' => 34
            ],
            [
                'product_id' => 55,
                'type_id' => 1,
                'value' => 40
            ],
            [
                'product_id' => 56,
                'type_id' => 1,
                'value' => 47
            ],
            [
                'product_id' => 57,
                'type_id' => 1,
                'value' => 67
            ],
            [
                'product_id' => 58,
                'type_id' => 1,
                'value' => 74
            ],
            [
                'product_id' => 59,
                'type_id' => 1,
                'value' => 24
            ],
            [
                'product_id' => 60,
                'type_id' => 1,
                'value' => 28
            ],
            [
                'product_id' => 61,
                'type_id' => 1,
                'value' => 34
            ],
            [
                'product_id' => 62,
                'type_id' => 1,
                'value' => 40
            ],
            [
                'product_id' => 63,
                'type_id' => 1,
                'value' => 47
            ],
            [
                'product_id' => 64,
                'type_id' => 1,
                'value' => 67
            ],
            [
                'product_id' => 65,
                'type_id' => 1,
                'value' => 74
            ],
            [
                'product_id' => 66,
                'type_id' => 1,
                'value' => 24
            ],
            [
                'product_id' => 67,
                'type_id' => 1,
                'value' => 28
            ],
            [
                'product_id' => 68,
                'type_id' => 1,
                'value' => 34
            ],
            [
                'product_id' => 69,
                'type_id' => 1,
                'value' => 40
            ],
            [
                'product_id' => 70,
                'type_id' => 1,
                'value' => 47
            ],
            [
                'product_id' => 71,
                'type_id' => 1,
                'value' => 67
            ],
            [
                'product_id' => 72,
                'type_id' => 1,
                'value' => 74
            ],
            [
                'product_id' => 73,
                'type_id' => 1,
                'value' => 24
            ],
            [
                'product_id' => 74,
                'type_id' => 1,
                'value' => 28
            ],
            [
                'product_id' => 75,
                'type_id' => 1,
                'value' => 34
            ],
            [
                'product_id' => 76,
                'type_id' => 1,
                'value' => 40
            ],
            [
                'product_id' => 77,
                'type_id' => 1,
                'value' => 47
            ],
            [
                'product_id' => 78,
                'type_id' => 1,
                'value' => 67
            ],
            [
                'product_id' => 79,
                'type_id' => 1,
                'value' => 74
            ],
            [
                'product_id' => 31,
                'type_id' => 2,
                'value' => 17.02
            ],
            [
                'product_id' => 32,
                'type_id' => 2,
                'value' => 20.47
            ],
            [
                'product_id' => 33,
                'type_id' => 2,
                'value' => 24.22
            ],
            [
                'product_id' => 34,
                'type_id' => 2,
                'value' => 29.20
            ],
            [
                'product_id' => 35,
                'type_id' => 2,
                'value' => 33.76
            ],
            [
                'product_id' => 36,
                'type_id' => 2,
                'value' => 48.17
            ],
            [
                'product_id' => 37,
                'type_id' => 2,
                'value' => 53.63
            ],
            [
                'product_id' => 38,
                'type_id' => 2,
                'value' => 17.02
            ],
            [
                'product_id' => 39,
                'type_id' => 2,
                'value' => 20.47
            ],
            [
                'product_id' => 40,
                'type_id' => 2,
                'value' => 24.22
            ],
            [
                'product_id' => 41,
                'type_id' => 2,
                'value' => 29.20
            ],
            [
                'product_id' => 42,
                'type_id' => 2,
                'value' => 33.76
            ],
            [
                'product_id' => 43,
                'type_id' => 2,
                'value' => 48.17
            ],
            [
                'product_id' => 44,
                'type_id' => 2,
                'value' => 53.63
            ],
            [
                'product_id' => 45,
                'type_id' => 2,
                'value' => 17.02
            ],
            [
                'product_id' => 46,
                'type_id' => 2,
                'value' => 20.47
            ],
            [
                'product_id' => 47,
                'type_id' => 2,
                'value' => 24.22
            ],
            [
                'product_id' => 48,
                'type_id' => 2,
                'value' => 29.20
            ],
            [
                'product_id' => 49,
                'type_id' => 2,
                'value' => 33.76
            ],
            [
                'product_id' => 50,
                'type_id' => 2,
                'value' => 48.17
            ],
            [
                'product_id' => 51,
                'type_id' => 2,
                'value' => 53.63
            ],
            [
                'product_id' => 52,
                'type_id' => 2,
                'value' => 17.02
            ],
            [
                'product_id' => 53,
                'type_id' => 2,
                'value' => 20.47
            ],
            [
                'product_id' => 54,
                'type_id' => 2,
                'value' => 24.22
            ],
            [
                'product_id' => 55,
                'type_id' => 2,
                'value' => 29.20
            ],
            [
                'product_id' => 56,
                'type_id' => 2,
                'value' => 33.76
            ],
            [
                'product_id' => 57,
                'type_id' => 2,
                'value' => 48.17
            ],
            [
                'product_id' => 58,
                'type_id' => 2,
                'value' => 53.63
            ],
            [
                'product_id' => 59,
                'type_id' => 2,
                'value' => 17.02
            ],
            [
                'product_id' => 60,
                'type_id' => 2,
                'value' => 20.47
            ],
            [
                'product_id' => 61,
                'type_id' => 2,
                'value' => 24.22
            ],
            [
                'product_id' => 62,
                'type_id' => 2,
                'value' => 29.20
            ],
            [
                'product_id' => 63,
                'type_id' => 2,
                'value' => 33.76
            ],
            [
                'product_id' => 64,
                'type_id' => 2,
                'value' => 48.17
            ],
            [
                'product_id' => 65,
                'type_id' => 2,
                'value' => 53.63
            ],
            [
                'product_id' => 66,
                'type_id' => 2,
                'value' => 17.02
            ],
            [
                'product_id' => 67,
                'type_id' => 2,
                'value' => 20.47
            ],
            [
                'product_id' => 68,
                'type_id' => 2,
                'value' => 24.22
            ],
            [
                'product_id' => 69,
                'type_id' => 2,
                'value' => 29.20
            ],
            [
                'product_id' => 70,
                'type_id' => 2,
                'value' => 33.76
            ],
            [
                'product_id' => 71,
                'type_id' => 2,
                'value' => 48.17
            ],
            [
                'product_id' => 72,
                'type_id' => 2,
                'value' => 53.63
            ],
            [
                'product_id' => 73,
                'type_id' => 2,
                'value' => 17.02
            ],
            [
                'product_id' => 74,
                'type_id' => 2,
                'value' => 20.47
            ],
            [
                'product_id' => 75,
                'type_id' => 2,
                'value' => 24.22
            ],
            [
                'product_id' => 76,
                'type_id' => 2,
                'value' => 29.20
            ],
            [
                'product_id' => 77,
                'type_id' => 2,
                'value' => 33.76
            ],
            [
                'product_id' => 78,
                'type_id' => 2,
                'value' => 48.17
            ],
            [
                'product_id' => 79,
                'type_id' => 2,
                'value' => 53.63
            ],
            //<
            //> Back walls prices
            [
                'product_id' => 80,
                'type_id' => 1,
                'value' => 3.8
            ],
            [
                'product_id' => 81,
                'type_id' => 1,
                'value' => 4.2
            ],
            [
                'product_id' => 82,
                'type_id' => 1,
                'value' => 4.6
            ],
            [
                'product_id' => 83,
                'type_id' => 1,
                'value' => 5.2
            ],
            [
                'product_id' => 84,
                'type_id' => 1,
                'value' => 6.5
            ],
            [
                'product_id' => 80,
                'type_id' => 2,
                'value' => 4.6
            ],
            [
                'product_id' => 81,
                'type_id' => 2,
                'value' => 5
            ],
            [
                'product_id' => 82,
                'type_id' => 2,
                'value' => 5.6
            ],
            [
                'product_id' => 83,
                'type_id' => 2,
                'value' => 6.3
            ],
            [
                'product_id' => 84,
                'type_id' => 2,
                'value' => 7.8
            ],
            //<
        ]);
    }
}
