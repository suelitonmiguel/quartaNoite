<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estabelecimento extends Model
{
    use SoftDeletes;
    protected $table = "estabelecimento";
}
