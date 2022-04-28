<?php

namespace Database\Seeders;

use App\Modules\User\database\seeders\UserSeeder;
use App\Modules\Brand\database\seeders\BrandsSeeder;
use App\Modules\Cart\database\seeders\CartSeeder;
use App\Modules\Category\database\seeders\CategorySeeder;
use App\Modules\Product\database\seeders\OptionItemSeeder;
use App\Modules\Product\database\seeders\OptionSeeder;
use App\Modules\Product\database\seeders\ProductImageSeeder;
use App\Modules\Product\database\seeders\ProductOptionItemSeeder;
use App\Modules\Product\database\seeders\ProductSeeder;
use App\Modules\Setting\database\seeders\DistrictSeeder;
use App\Modules\Setting\database\seeders\PaymentTypeSeeder;
use App\Modules\Setting\database\seeders\RegionSeeder;
use App\Modules\Shop\database\seeders\ShopSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BrandsSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(OptionItemSeeder::class);
        $this->call(ProductOptionItemSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(PaymentTypeSeeder::class);

        Artisan::call('passport:install');
    }
}
