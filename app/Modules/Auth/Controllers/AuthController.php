<?php

namespace App\Modules\Auth\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Repository\AuthRepository;
use App\Modules\Auth\Requests\LoginRequest;
use App\Modules\Auth\Requests\RegisterRequest;
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

    public function register(RegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        $input = [
            ...$data,
            'password' => bcrypt($data['password'])
        ];

        try {
            return success_response(
                $this->repository->register($input)
            );
        } catch (PDOException $e) {
            return error_response(
                ErrorMessages::CAN_NOT_REGISTER_MSG,
                ErrorMessages::CAN_NOT_REGISTER,
                $e->getMessage()
            );
        }
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $result = $this->repository->login($request->validated());

        if (!$result) {
            return error_response(
                ErrorMessages::CAN_NOT_LOGIN_MSG,
                ErrorMessages::CAN_NOT_LOGIN
            );
        }

        return success_response($result);
    }

    public function checkAuthData(LoginRequest $request)
    {
        $data = $request->validated();

        $user = $this->getUser($data['email']);

        if (!$user) {
            return error_response(
                ErrorMessages::NOT_FOUND_USER_MSG,
                ErrorMessages::NOT_FOUND_USER
            );
        }

        if (!Hash::check($data['password'], $user->password)) {
            return error_response(
                ErrorMessages::WRONG_PASSWORD_MSG,
                ErrorMessages::WRONG_PASSWORD
            );
        }

        return success_response(true);
    }

    private function getUser($email)
    {
        return $this->repository->getUser($email);
    }
}
