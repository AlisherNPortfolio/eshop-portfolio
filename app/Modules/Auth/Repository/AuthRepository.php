<?php

namespace App\Modules\Auth\Repository;

use App\Models\User;
use App\Modules\Auth\Contracts\Repository\IAuthRepository;
use App\Modules\Auth\Resources\AuthResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements IAuthRepository
{
    public function register(array $data): JsonResource
    {
        $user = User::create($data);
        return new AuthResource($user);
    }

    public function login($data): JsonResource|bool
    {
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            $user = Auth::user();
            return new AuthResource($user);
        }

        return false;
    }

    public function getUser(string $email)
    {
        return User::where('email', '=', $email)->first();
    }
}
