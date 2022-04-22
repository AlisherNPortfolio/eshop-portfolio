<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface IReadableRepository
{
    public function find($id): ?Model;

    public function all(): Collection;

    public function paginate($perPage = 10): Collection;
}
