<?php

namespace App\Modules\Category\Repository;

use App\Modules\Category\Contracts\Repository\ICategoryRepository;
use App\Modules\Category\Models\Category;
use App\Repository\BaseRepository;
use Illuminate\Support\Facades\DB;

class CategoryRepository extends BaseRepository implements ICategoryRepository
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
    public function getSubTree()
    {
        return DB::select("select * from menu_tree(2, 2)");
    }
}
