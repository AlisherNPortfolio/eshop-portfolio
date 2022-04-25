<?php

namespace App\Repository;

use App\Repository\Contracts\IEditableRepository;
use App\Traits\Repository\Editable;

class EditableRepository extends BaseRepository implements IEditableRepository
{
    use Editable;
}
