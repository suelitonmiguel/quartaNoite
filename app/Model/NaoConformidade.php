<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NaoConformidade extends Model
{
    use SoftDeletes;
    protected $table = 'nao_conformidade';
}
