<?php

namespace App\Traits\Repository;

use Illuminate\Database\Eloquent\Model;

trait Editable
{
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes): bool
    {
        return $this->model->fill($attributes)->save();
    }

    public function delete($id): ?bool
    {
        return $this->model->delete($id);
    }
}
