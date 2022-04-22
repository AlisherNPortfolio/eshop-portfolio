<?php

namespace App\Modules\Shop\database\seeders;

use App\Modules\Shop\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = [
            [
                'user_id' => 2,
                'name' => 'Apple Uzbekistan',
                'logo' => 'shops/logos/apple.png',
                'address' => 'Toshkent sh. Yunusobod t.',
                'phone' => '+998999999999',
                'email' => 'apple.uzb@gmail.com',
                'unique_name' => 'apple-uzb'
            ],
            [
                'user_id' => 3,
                'name' => 'Samsung Uzbekistan',
                'logo' => 'shops/logos/samsung.png',
                'address' => 'Toshkent sh. Shayhontoxur t.',
                'phone' => '+998998888888',
                'email' => 'samsung.uzb@gmail.com',
                'unique_name' => 'samsung-uzb'
            ]
        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}
