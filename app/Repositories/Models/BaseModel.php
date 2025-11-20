<?php

declare(strict_types=1);

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    protected $hidden = [];
    public $timestamps = false;
    protected $keyType = "string";
}
