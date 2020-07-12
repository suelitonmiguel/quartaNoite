<?php

namespace App\Model\Checklist;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HigeinizacaoEquipamento extends Model
{
    use SoftDeletes;
    protected $table = "cl_higienizacao_equipamento";
}
