<?php

namespace App\Modules\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Category\Contracts\Repository\ICategoryRepository;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $repository;

    public function __construct(ICategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getTree()
    {
        return success_response(
            DB::select("select * from menu_tree(2, 1)")
        );
    }
}
