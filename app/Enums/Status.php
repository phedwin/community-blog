<?php

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

class Status extends Enum
{
    const DRAFT = 'draft';
    const PUBLISHED = 'published';
}


?>