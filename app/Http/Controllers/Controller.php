<?php

namespace App\Http\Controllers;

use App\Utils\ErrorMessages;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function cantGetResourceError(Exception $exception = null)
    {
        $details = $exception?->getMessage();

        return error_response(
            ErrorMessages::CAN_NOT_GET_RESOURCE_MSG,
            ErrorMessages::CAN_NOT_GET_RESOURCE,
            $details
        );
    }

    protected function cantUpdateResourceError(Exception $exception = null)
    {
        $details = $exception?->getMessage();

        return error_response(
            ErrorMessages::CAN_NOT_UPDATE_MSG,
            ErrorMessages::CAN_NOT_UPDATE,
            $details
        );
    }

    protected function cantCreateResourceError(Exception $exception = null)
    {
        $details = $exception?->getMessage();

        return error_response(
            ErrorMessages::CAN_NOT_CREATE_MSG,
            ErrorMessages::CAN_NOT_CREATE,
            $details
        );
    }
}
