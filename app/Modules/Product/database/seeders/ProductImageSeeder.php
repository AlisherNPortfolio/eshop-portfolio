<?php

namespace App\Modules\Product\database\seeders;

use App\Modules\Product\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'product_id' => 1,
                'image' => 'shops/products/apple-uzb/image-1.jpg',
                'thumbnail' => 'shops/products/apple-uzb/image-1.jpg'
            ],
            [
                'product_id' => 1,
                'image' => 'shops/products/apple-uzb/image-2.jpg',
                'thumbnail' => 'shops/products/apple-uzb/image-2.jpg'
            ],
            [
                'product_id' => 2,
                'image' => 'shops/products/apple-uzb/image-3.jpg',
                'thumbnail' => 'shops/products/apple-uzb/image-3.jpg'
            ],
            [
                'product_id' => 2,
                'image' => 'shops/products/apple-uzb/image-4.jpg',
                'thumbnail' => 'shops/products/apple-uzb/image-4.jpg'
            ],
            [
                'product_id' => 3,
                'image' => 'shops/products/apple-uzb/image-5.jpeg',
                'thumbnail' => 'shops/products/apple-uzb/image-5.jpeg'
            ],
            [
                'product_id' => 3,
                'image' => 'shops/products/apple-uzb/image-6.jpeg',
                'thumbnail' => 'shops/products/apple-uzb/image-6.jpeg'
            ],
            [
                'product_id' => 4,
                'image' => 'shops/products/apple-uzb/image-7.jpeg',
                'thumbnail' => 'shops/products/apple-uzb/image-7.jpeg'
            ],
            [
                'product_id' => 4,
                'image' => 'shops/products/apple-uzb/image-8.jpeg',
                'thumbnail' => 'shops/products/apple-uzb/image-8.jpeg'
            ],
            [
                'product_id' => 4,
                'image' => 'shops/products/apple-uzb/image-9.jpeg',
                'thumbnail' => 'shops/products/apple-uzb/image-9.jpeg'
            ],
            [
                'product_id' => 5,
                'image' => 'shops/products/apple-uzb/image-10.jpeg',
                'thumbnail' => 'shops/products/apple-uzb/image-10.jpeg'
            ],
            [
                'product_id' => 5,
                'image' => 'shops/products/apple-uzb/image-11.jpeg',
                'thumbnail' => 'shops/products/apple-uzb/image-11.jpeg'
            ],
            [
                'product_id' => 5,
                'image' => 'shops/products/apple-uzb/image-12.jpeg',
                'thumbnail' => 'shops/products/apple-uzb/image-12.jpeg'
            ],
        ];

        foreach ($images as $image) {
            ProductImage::create($image);
        }
    }
}
