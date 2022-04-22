<?php

namespace Database\Seeders;

use App\Modules\Category\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [ // 1
                'name' => 'Category',
                'lft' => 1,
                'rgt' => 62,
                'depth' => 0
            ],
            [ // 2
                'name' => 'Sportswear',
                'lft' => 2,
                'rgt' => 13,
                'depth' => 1,
                'parent_id' => 1
            ],
            [
                'name' => 'Nike',
                'lft' => 3,
                'rgt' => 4,
                'depth' => 2,
                'parent_id' => 2
            ],
            [
                'name' => 'Under Armour',
                'lft' => 5,
                'rgt' => 6,
                'depth' => 2,
                'parent_id' => 2
            ],
            [
                'name' => 'Adidas',
                'lft' => 7,
                'rgt' => 8,
                'depth' => 2,
                'parent_id' => 2
            ],
            [
                'name' => 'Puma',
                'lft' => 9,
                'rgt' => 10,
                'depth' => 2,
                'parent_id' => 2
            ],
            [
                'name' => 'Asics',
                'lft' => 11,
                'rgt' => 12,
                'depth' => 2,
                'parent_id' => 2
            ],
            [ // 8
                'name' => 'Mens',
                'lft' => 14,
                'rgt' => 35,
                'depth' => 1,
                'parent_id' => 1
            ],
            [
                'name' => 'Fendi',
                'lft' => 15,
                'rgt' => 16,
                'depth' => 2,
                'parent_id' => 8
            ],
            [
                'name' => 'Guess',
                'lft' => 17,
                'rgt' => 18,
                'depth' => 2,
                'parent_id' => 8
            ],
            [
                'name' => 'Valentino',
                'lft' => 19,
                'rgt' => 20,
                'depth' => 2,
                'parent_id' => 8
            ],
            [
                'name' => 'Dior',
                'lft' => 21,
                'rgt' => 22,
                'depth' => 2,
                'parent_id' => 8
            ],
            [
                'name' => 'Versace',
                'lft' => 23,
                'rgt' => 24,
                'depth' => 2,
                'parent_id' => 8
            ],
            [
                'name' => 'Armani',
                'lft' => 25,
                'rgt' => 26,
                'depth' => 2,
                'parent_id' => 8
            ],
            [
                'name' => 'Prada',
                'lft' => 27,
                'rgt' => 28,
                'depth' => 2,
                'parent_id' => 8
            ],
            [
                'name' => 'Dolce and Gabbana',
                'lft' => 29,
                'rgt' => 30,
                'depth' => 2,
                'parent_id' => 8
            ],
            [
                'name' => 'Chanel',
                'lft' => 31,
                'rgt' => 32,
                'depth' => 2,
                'parent_id' => 8
            ],
            [
                'name' => 'Gucci',
                'lft' => 33,
                'rgt' => 34,
                'depth' => 2,
                'parent_id' => 8
            ],
            [ // 19
                'name' => 'Womens',
                'lft' => 36,
                'rgt' => 47,
                'depth' => 1,
                'parent_id' => 1
            ],
            [
                'name' => 'Fendi',
                'lft' => 37,
                'rgt' => 38,
                'depth' => 2,
                'parent_id' => 19
            ],
            [
                'name' => 'Guess',
                'lft' => 39,
                'rgt' => 40,
                'depth' => 2,
                'parent_id' => 19
            ],
            [
                'name' => 'Valentino',
                'lft' => 41,
                'rgt' => 42,
                'depth' => 2,
                'parent_id' => 19
            ],
            [
                'name' => 'Dior',
                'lft' => 43,
                'rgt' => 44,
                'depth' => 2,
                'parent_id' => 19
            ],
            [
                'name' => 'Versace',
                'lft' => 45,
                'rgt' => 46,
                'depth' => 2,
                'parent_id' => 19
            ],
            [ // 25
                'name' => 'Kids',
                'lft' => 48,
                'rgt' => 49,
                'depth' => 1,
                'parent_id' => 1
            ],
            [
                'name' => 'Fashion',
                'lft' => 50,
                'rgt' => 51,
                'depth' => 1,
                'parent_id' => 1
            ],
            [
                'name' => 'Households',
                'lft' => 52,
                'rgt' => 53,
                'depth' => 1,
                'parent_id' => 1
            ],
            [
                'name' => 'Interiors',
                'lft' => 54,
                'rgt' => 55,
                'depth' => 1,
                'parent_id' => 1
            ],
            [
                'name' => 'Clothing',
                'lft' => 56,
                'rgt' => 57,
                'depth' => 1,
                'parent_id' => 1
            ],
            [
                'name' => 'Bags',
                'lft' => 58,
                'rgt' => 59,
                'depth' => 1,
                'parent_id' => 1
            ],
            [
                'name' => 'Shoes',
                'lft' => 60,
                'rgt' => 61,
                'depth' => 1,
                'parent_id' => 1
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
