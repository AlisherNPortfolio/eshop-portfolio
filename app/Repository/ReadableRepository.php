<?php

namespace App\Repository;

use App\Repository\Contracts\IReadableRepository;
use App\Traits\Repository\Readable;

class ReadableRepository extends BaseRepository implements IReadableRepository
{
    use Readable;
}
