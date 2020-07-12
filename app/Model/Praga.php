<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Praga extends Model
{
    use SoftDeletes;
    protected $table = "praga";
}
