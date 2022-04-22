<?php

namespace App\Modules\Product\database\seeders;

use App\Modules\Product\Models\OptionItem;
use Illuminate\Database\Seeder;

class OptionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'option_id' => 1,
                'value' => 'S'
            ], // 1
            [
                'option_id' => 1,
                'value' => 'M'
            ], // 2
            [
                'option_id' => 1,
                'value' => 'L'
            ], // 3
            [
                'option_id' => 1,
                'value' => 'XL'
            ], // 4
            [
                'option_id' => 1,
                'value' => 'XXL'
            ], // 5
            [
                'option_id' => 2,
                'value' => 32
            ], // 6
            [
                'option_id' => 2,
                'value' => 33
            ], // 7
            [
                'option_id' => 2,
                'value' => 34
            ], // 8
            [
                'option_id' => 2,
                'value' => 35
            ], // 9
            [
                'option_id' => 2,
                'value' => 36
            ], // 10
            [
                'option_id' => 2,
                'value' => 37
            ], // 11
            [
                'option_id' => 2,
                'value' => 38
            ], // 12
            [
                'option_id' => 2,
                'value' => 39
            ], // 13
            [
                'option_id' => 2,
                'value' => 40
            ], // 14
            [
                'option_id' => 2,
                'value' => 41
            ], // 15
            [
                'option_id' => 2,
                'value' => 42
            ], // 16
            [
                'option_id' => 2,
                'value' => 43
            ], // 17
            [
                'option_id' => 2,
                'value' => 44
            ], // 18
            [
                'option_id' => 2,
                'value' => 45
            ], // 19
            [
                'option_id' => 2,
                'value' => 46
            ], // 20
            [
                'option_id' => 4,
                'value' => 'RED'
            ], // 21
            [
                'option_id' => 4,
                'value' => 'BLACK'
            ], // 22
            [
                'option_id' => 4,
                'value' => 'BLUE'
            ], // 23
            [
                'option_id' => 4,
                'value' => 'GREY'
            ], // 24
            [
                'option_id' => 4,
                'value' => 'YELLOW'
            ], // 25
            [
                'option_id' => 4,
                'value' => 'WHITE'
            ], // 26
            [
                'option_id' => 5,
                'value' => 33
            ], // 27
            [
                'option_id' => 5,
                'value' => 34
            ], // 28
            [
                'option_id' => 5,
                'value' => 35
            ], // 29
            [
                'option_id' => 5,
                'value' => 36
            ], // 30
            [
                'option_id' => 5,
                'value' => 37
            ], // 31
            [
                'option_id' => 5,
                'value' => 38
            ], // 32
        ];

        foreach ($items as $item) {
            OptionItem::create($item);
        }
    }
}
