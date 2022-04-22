<?php

namespace App\Modules\Auth\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Repository\AuthRepository;
use App\Utils\ErrorMessages;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use PDOException;

class AuthController extends Controller
{
    protected $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function register(array $data): JsonResponse
    {
        $input = [
            ...$data,
            'password' => bcrypt($data['password'])
        ];

        try {
            return $this->successResponse(
                $this->repository->register($input)
            );
        } catch (PDOException $e) {
            return $this->errorResponse(
                ErrorMessages::CAN_NOT_REGISTER_MSG,
                ErrorMessages::CAN_NOT_REGISTER,
                $e->getMessage()
            );
        }
    }

    public function login(array $data): JsonResponse
    {
        $result = $this->repository->login($data);

        if (!$result) {
            return $this->errorResponse(
                ErrorMessages::CAN_NOT_LOGIN_MSG,
                ErrorMessages::CAN_NOT_LOGIN
            );
        }

        return $this->successResponse($result);
    }

    public function checkAuthData(array $data)
    {
        $user = $this->getUser($data['email']);

        if (!$user) {
            return $this->errorResponse(
                ErrorMessages::NOT_FOUND_USER_MSG,
                ErrorMessages::NOT_FOUND_USER
            );
        }

        if (!Hash::check($data['password'], $user->password)) {
            return $this->errorResponse(
                ErrorMessages::WRONG_PASSWORD_MSG,
                ErrorMessages::WRONG_PASSWORD
            );
        }

        return $this->successResponse(true);
    }

    private function getUser($email)
    {
        return $this->repository->getUser($email);
    }
}
