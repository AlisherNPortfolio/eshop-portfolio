<?php

namespace App\Traits\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait Readable
{
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function all(): Collection
    {
        return $this->model->get();
    }

    public function paginate($perPage = 10): Collection
    {
        return $this->model->paginate($perPage);
    }
}
