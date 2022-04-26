<?php

namespace App\Modules\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Category\Contracts\Repository\ICategoryRepository;
use App\Modules\Category\Resources\SubMenuResource;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $repository;

    public function __construct(ICategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getTreeHierarchy(Request $request, $shop_name)
    {
        try {
            $menus = $this->repository->getSubTree($shop_name);

            if (count($menus) === 0) {
                return error_response(
                    $this->cantGetResourceError()
                );
            }

            return success_response(
                menu_tree(SubMenuResource::collection($menus))
            );
        } catch (Exception $e) {
            return $this->cantGetResourceError($e);
        }
    }

    public function getItems(Request $request, $shop_name)
    {
        try {
            $menus = $this->repository->getSubTree($shop_name);

            if (count($menus) === 0) {
                return error_response(
                    $this->cantGetResourceError()
                );
            }

            return success_response(
                SubMenuResource::collection($menus)
            );
        } catch (Exception $e) {
            return $this->cantGetResourceError($e);
        }
    }
}
