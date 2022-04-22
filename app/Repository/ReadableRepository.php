<?php

namespace App\Repositories\Base;

use App\Repositories\Contracts\IReadableRepository;
use App\Traits\Repository\Readable;

class ReadableRepository extends BaseRepository implements IReadableRepository
{
    use Readable;
}
