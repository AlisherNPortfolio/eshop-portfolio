<?php

namespace App\Modules\Auth\Contracts\Repository;

use Illuminate\Http\Resources\Json\JsonResource;

interface IAuthRepository
{
    public function register(array $data): JsonResource;

    public function login(array $data): JsonResource|bool;
}
