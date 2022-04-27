<?php

namespace App\Modules\Setting\database\seeders;

use App\Modules\Setting\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [ // 1
                'name' => 'Toshkent shahar',
                'code' => 'tc',
                'status' => true
            ],
            [ // 2
                'name' => 'Andijon',
                'code' => 'an',
                'status' => true
            ],
            [ // 3
                'name' => 'Buxoro',
                'code' => 'bux',
                'status' => true
            ],
            [ // 4
                'name' => 'Farg\'ona',
                'code' => 'far',
                'status' => true
            ],
            [ // 5
                'name' => 'Jizzax',
                'code' => 'jiz',
                'status' => true
            ],
            [ // 6
                'name' => 'Xorazm',
                'code' => 'xor',
                'status' => true
            ],
            [ // 7
                'name' => 'Namangan',
                'code' => 'nam',
                'status' => true
            ],
            [ // 8
                'name' => 'Navoiy',
                'code' => 'nav',
                'status' => true
            ],
            [ // 9
                'name' => 'Qashqadaryo',
                'code' => 'qas',
                'status' => true
            ],
            [ // 10
                'name' => 'Qoraqalpog\'iston',
                'code' => 'qor',
                'status' => true
            ],
            [ // 11
                'name' => 'Samarqand',
                'code' => 'sam',
                'status' => true
            ],
            [ // 12
                'name' => 'Sirdaryo',
                'code' => 'syr',
                'status' => true
            ],
            [ // 13
                'name' => 'Surxondaryo',
                'code' => 'sur',
                'status' => true
            ],
            [ // 14
                'name' => 'Toshent viloyati',
                'code' => 'tosh',
                'status' => true
            ]
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
