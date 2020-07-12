<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ambiente extends Model
{
    use SoftDeletes;
    protected $table = "ambiente";
}
