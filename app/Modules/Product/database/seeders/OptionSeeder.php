<?php

namespace App\Modules\Product\database\seeders;

use App\Modules\Product\Models\Option;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            [
                'name' => 'Size (Shirt)',
                'unique_name' => 'shirt_size'
            ],
            [
                'name' => 'Size (Shoes)',
                'unique_name' => 'shoes_size'
            ],
            [
                'name' => 'Weight',
                'unique_name' => 'weight'
            ],
            [
                'name' => 'Color',
                'unique_name' => 'color'
            ],
            [
                'name' => 'Size (Treasures)',
                'unique_name' => 'treasures_size'
            ],
        ];

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
