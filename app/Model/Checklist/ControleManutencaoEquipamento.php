<?php

namespace App\Model\Checklist;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ControleManutencaoEquipamento extends Model
{
    use SoftDeletes;
    protected $table = "cl_controle_manutenca_equip";
}
