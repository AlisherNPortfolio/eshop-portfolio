<?php

namespace App\Modules\Product\database\seeders;

use App\Modules\Product\Models\ProductOptionItem;
use Illuminate\Database\Seeder;

class ProductOptionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionItems = [
            [
                'product_id' => 1,
                'option_item_id' => 1,
                'price' => 5000,
                'qty' => 100,
                'is_default' => 1
            ],
            [
                'product_id' => 1,
                'option_item_id' => 2,
                'price' => 5200,
                'qty' => 140
            ],
            [
                'product_id' => 1,
                'option_item_id' => 3,
                'price' => 5500,
                'qty' => 150
            ],
            [
                'product_id' => 1,
                'option_item_id' => 4,
                'price' => 4500,
                'qty' => 100
            ],
            [
                'product_id' => 1,
                'option_item_id' => 5,
                'price' => 6000,
                'qty' => 200
            ],
            [
                'product_id' => 1,
                'option_item_id' => 22,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 1,
                'option_item_id' => 23,
                'price' => 6500,
                'qty' => 150
            ],
            [
                'product_id' => 1,
                'option_item_id' => 24,
                'price' => 6000,
                'qty' => 200
            ],
            [
                'product_id' => 2,
                'option_item_id' => 27,
                'price' => 6000,
                'qty' => 200,
                'is_default' => 1
            ],
            [
                'product_id' => 2,
                'option_item_id' => 28,
                'price' => 6000,
                'qty' => 200
            ],
            [
                'product_id' => 2,
                'option_item_id' => 29,
                'price' => 6500,
                'qty' => 200
            ],
            [
                'product_id' => 2,
                'option_item_id' => 30,
                'price' => 7000,
                'qty' => 200
            ],
            [
                'product_id' => 2,
                'option_item_id' => 22,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 2,
                'option_item_id' => 23,
                'price' => 6500,
                'qty' => 150
            ],
            [
                'product_id' => 2,
                'option_item_id' => 24,
                'price' => 6000,
                'qty' => 200
            ],
            [
                'product_id' => 3,
                'option_item_id' => 29,
                'price' => 6500,
                'qty' => 200,
                'is_default' => 1
            ],
            [
                'product_id' => 3,
                'option_item_id' => 30,
                'price' => 7000,
                'qty' => 200
            ],
            [
                'product_id' => 3,
                'option_item_id' => 22,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 3,
                'option_item_id' => 23,
                'price' => 6500,
                'qty' => 150
            ],
            [
                'product_id' => 4,
                'option_item_id' => 31,
                'price' => 6500,
                'qty' => 200,
                'is_default' => 1
            ],
            [
                'product_id' => 4,
                'option_item_id' => 32,
                'price' => 7000,
                'qty' => 200
            ],
            [
                'product_id' => 4,
                'option_item_id' => 23,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 4,
                'option_item_id' => 24,
                'price' => 6500,
                'qty' => 150
            ],
            //
            [
                'product_id' => 5,
                'option_item_id' => 29,
                'price' => 6500,
                'qty' => 200,
                'is_default' => 1
            ],
            [
                'product_id' => 5,
                'option_item_id' => 30,
                'price' => 7000,
                'qty' => 200
            ],
            [
                'product_id' => 5,
                'option_item_id' => 31,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 5,
                'option_item_id' => 22,
                'price' => 6500,
                'qty' => 150
            ],
            [
                'product_id' => 5,
                'option_item_id' => 26,
                'price' => 6500,
                'qty' => 150
            ],
            // samsung product options
            [
                'product_id' => 6,
                'option_item_id' => 1,
                'price' => 5000,
                'qty' => 100,
                'is_default' => 1
            ],
            [
                'product_id' => 6,
                'option_item_id' => 2,
                'price' => 5200,
                'qty' => 140
            ],
            [
                'product_id' => 6,
                'option_item_id' => 3,
                'price' => 5500,
                'qty' => 150
            ],
            [
                'product_id' => 6,
                'option_item_id' => 4,
                'price' => 4500,
                'qty' => 100
            ],
            [
                'product_id' => 6,
                'option_item_id' => 5,
                'price' => 6000,
                'qty' => 200
            ],
            [
                'product_id' => 6,
                'option_item_id' => 22,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 6,
                'option_item_id' => 23,
                'price' => 6500,
                'qty' => 150
            ],
            [
                'product_id' => 6,
                'option_item_id' => 24,
                'price' => 6000,
                'qty' => 200
            ],
            [
                'product_id' => 7,
                'option_item_id' => 27,
                'price' => 6000,
                'qty' => 200,
                'is_default' => 1
            ],
            [
                'product_id' => 7,
                'option_item_id' => 28,
                'price' => 6000,
                'qty' => 200
            ],
            [
                'product_id' => 7,
                'option_item_id' => 29,
                'price' => 6500,
                'qty' => 200
            ],
            [
                'product_id' => 7,
                'option_item_id' => 30,
                'price' => 7000,
                'qty' => 200
            ],
            [
                'product_id' => 7,
                'option_item_id' => 22,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 7,
                'option_item_id' => 23,
                'price' => 6500,
                'qty' => 150
            ],
            [
                'product_id' => 7,
                'option_item_id' => 24,
                'price' => 6000,
                'qty' => 200
            ],
            [
                'product_id' => 8,
                'option_item_id' => 29,
                'price' => 6500,
                'qty' => 200,
                'is_default' => 1
            ],
            [
                'product_id' => 8,
                'option_item_id' => 30,
                'price' => 7000,
                'qty' => 200
            ],
            [
                'product_id' => 8,
                'option_item_id' => 22,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 8,
                'option_item_id' => 23,
                'price' => 6500,
                'qty' => 150
            ],
            [
                'product_id' => 9,
                'option_item_id' => 31,
                'price' => 6500,
                'qty' => 200,
                'is_default' => 1
            ],
            [
                'product_id' => 9,
                'option_item_id' => 32,
                'price' => 7000,
                'qty' => 200
            ],
            [
                'product_id' => 9,
                'option_item_id' => 23,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 9,
                'option_item_id' => 24,
                'price' => 6500,
                'qty' => 150
            ],
            //
            [
                'product_id' => 10,
                'option_item_id' => 29,
                'price' => 6500,
                'qty' => 200,
                'is_default' => 1
            ],
            [
                'product_id' => 10,
                'option_item_id' => 30,
                'price' => 7000,
                'qty' => 200
            ],
            [
                'product_id' => 10,
                'option_item_id' => 31,
                'price' => 3000,
                'qty' => 140
            ],
            [
                'product_id' => 10,
                'option_item_id' => 22,
                'price' => 6500,
                'qty' => 150
            ],
            [
                'product_id' => 10,
                'option_item_id' => 26,
                'price' => 6500,
                'qty' => 150
            ],
        ];

        foreach ($optionItems as $item) {
            ProductOptionItem::create($item);
        }
    }
}
