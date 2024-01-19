

<?php

namespace App\Enums;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use PhpParser\Builder\EnumCase;
// use Symfony\Component\VarDumper\Caster\EnumStub;

class Status extends EnumCase
{

   
    
    protected $status = status()->enum_exists ?? throw new ModelNotFoundException;
    public function __construct()
    {
        $this->status = $status;
    }

    enum status {
        case DRAFT;
        case PUBLISHED;
    }

    

    
}