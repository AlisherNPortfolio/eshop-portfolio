<?php

namespace App\Modules\Product\database\seeders;

use App\Modules\Product\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'user_id' => 2,
                'brand_id' => 1,
                'shop_id' => 1,
                'category_id' => 9,
                'name' => 'Anne Klein Sleeveless Colorblock Scuba',
                'description' => '<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_NEW,
                'recommended' => 1,
                'image' => 'shops/products/apple-uzb/product-1.jpg'
            ],
            [
                'user_id' => 2,
                'brand_id' => 1,
                'shop_id' => 1,
                'category_id' => 9,
                'name' => 'Куртка Calvin Klein',
                'description' => '<span>Calvin Klein</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_SALE,
                'recommended' => 1,
                'image' => 'shops/products/apple-uzb/product-2.jpeg'
            ],
            [
                'user_id' => 2,
                'brand_id' => 3,
                'shop_id' => 1,
                'category_id' => 3,
                'name' => 'Брюки Charter Club',
                'description' => '<span>Брюки Charter Club</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_STANDARD,
                'recommended' => 1,
                'image' => 'shops/products/apple-uzb/product-3.jpeg'
            ],
            [
                'user_id' => 2,
                'brand_id' => 3,
                'shop_id' => 1,
                'category_id' => 3,
                'name' => 'Джинсы Ralph Lauren',
                'description' => '<span>Джинсы Ralph Lauren</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_STANDARD,
                'recommended' => 0,
                'image' => 'shops/products/apple-uzb/product-4.jpeg'
            ],
            [
                'user_id' => 2,
                'brand_id' => 4,
                'shop_id' => 1,
                'category_id' => 5,
                'name' => 'Брюки льняные Tchibo',
                'description' => '<span>Брюки льняные Tchibo</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_STANDARD,
                'recommended' => 0,
                'image' => 'shops/products/apple-uzb/product-5.jpeg'
            ],
            //  samsung products
            [
                'user_id' => 2,
                'brand_id' => 1,
                'shop_id' => 2,
                'category_id' => 9,
                'name' => 'Anne Klein Sleeveless Colorblock Scuba samsung',
                'description' => '<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_NEW,
                'recommended' => 1,
                'image' => 'shops/products/apple-uzb/product-1.jpg'
            ],
            [
                'user_id' => 2,
                'brand_id' => 1,
                'shop_id' => 2,
                'category_id' => 9,
                'name' => 'Куртка Calvin Klein samsung',
                'description' => '<span>Calvin Klein</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_SALE,
                'recommended' => 1,
                'image' => 'shops/products/apple-uzb/product-2.jpeg'
            ],
            [
                'user_id' => 2,
                'brand_id' => 3,
                'shop_id' => 2,
                'category_id' => 3,
                'name' => 'Брюки Charter Club samsung',
                'description' => '<span>Брюки Charter Club</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_STANDARD,
                'recommended' => 1,
                'image' => 'shops/products/apple-uzb/product-3.jpeg'
            ],
            [
                'user_id' => 2,
                'brand_id' => 3,
                'shop_id' => 2,
                'category_id' => 3,
                'name' => 'Джинсы Ralph Lauren samsung',
                'description' => '<span>Джинсы Ralph Lauren</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_STANDARD,
                'recommended' => 0,
                'image' => 'shops/products/apple-uzb/product-4.jpeg'
            ],
            [
                'user_id' => 2,
                'brand_id' => 4,
                'shop_id' => 2,
                'category_id' => 5,
                'name' => 'Брюки льняные Tchibo samsung',
                'description' => '<span>Брюки льняные Tchibo</span>',
                'has_attribute' => true,
                'stock_status' => true,
                'product_status' => Product::STATUS_STANDARD,
                'recommended' => 0,
                'image' => 'shops/products/apple-uzb/product-5.jpeg'
            ]
        ];

        foreach ($products as $product) {
            $product['unique_name'] = Str::slug($product['name']);
            Product::create($product);
        }
    }
}
