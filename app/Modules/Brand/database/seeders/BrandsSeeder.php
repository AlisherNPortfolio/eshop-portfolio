<?php

namespace App\Modules\Brand\database\seeders;

use App\Modules\Brand\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['name' => 'Acne'],
            ['name' => 'Grune Erde'],
            ['name' => 'Albiro'],
            ['name' => 'Ronhill'],
            ['name' => 'Oddmolly'],
            ['name' => 'Boudestijn'],
            ['name' => 'Rosch Creative Culture']
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
