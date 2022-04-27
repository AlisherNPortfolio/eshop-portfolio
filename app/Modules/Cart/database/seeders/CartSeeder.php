<?php

namespace App\Modules\Cart\database\seeders;;

use App\Modules\Cart\Models\Cart;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartItems = [
            [
                'product_option_item_id' => 1,
                'total_sum' => 10000,
                'qty' => 2
            ],
            [
                'product_option_item_id' => 10,
                'total_sum' => 18000,
                'qty' => 3
            ],
            [
                'product_option_item_id' => 36,
                'total_sum' => 30000,
                'qty' => 5
            ]
        ];

        foreach ($cartItems as $item) {
            Cart::create($item);
        }
    }
}
