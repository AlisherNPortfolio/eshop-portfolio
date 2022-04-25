<?php

namespace App\Repository;

use App\Repository\Contracts\ICrudRepository;
use App\Traits\Repository\Editable;
use App\Traits\Repository\Readable;

class CrudRepository extends BaseRepository implements ICrudRepository
{
    use Editable, Readable;
}
