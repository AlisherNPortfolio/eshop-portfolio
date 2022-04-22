<?php

namespace App\Repositories\Base;

use App\Repositories\Contracts\IEditableRepository;
use App\Traits\Repository\Editable;

class EditableRepository extends BaseRepository implements IEditableRepository
{
    use Editable;
}
