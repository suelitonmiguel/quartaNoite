<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treinamento extends Model
{
    use SoftDeletes;
    protected $table = "solicitacao";
}
