<?php

namespace App\Modules\Brand\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Brand\Contracts\Repository\IBrandRepository;
use App\Modules\Brand\Resources\BrandProductResource;
use Exception;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $repository;

    public function __construct(IBrandRepository $repository)
    {
        $this->repository = $repository;
    }

    public function items(Request $request, $shop_name)
    {
        try {
            $data = $this->repository->getItems($shop_name);

            if (count($data) === 0) {
                return $this->cantGetResourceError();
            }

            return success_response(
                BrandProductResource::collection($data)
            );
        } catch (Exception $e) {
            return $this->cantGetResourceError($e);
        }
    }
}
