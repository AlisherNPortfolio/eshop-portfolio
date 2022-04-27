<?php

namespace App\Modules\Setting\database\seeders;

use App\Modules\Setting\Models\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentTypes = [
            [
                'name' => 'Payme',
                'code' => 'payme',
                'status' => true
            ],
            [
                'name' => 'Click',
                'code' => 'click',
                'status' => true
            ],
            [
                'name' => 'Paynet',
                'code' => 'paynet',
                'status' => true
            ],
            [
                'name' => 'Terminal',
                'code' => 'terminal',
                'status' => true
            ],
            [
                'name' => 'Cash',
                'code' => 'cash',
                'status' => true
            ]
        ];

        foreach ($paymentTypes as $type) {
            PaymentType::create($type);
        }
    }
}
