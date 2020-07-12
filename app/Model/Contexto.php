<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contexto extends Model
{
    use SoftDeletes;
    protected $table = "contexto";
}
