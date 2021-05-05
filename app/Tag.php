<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $primarykey = 'id';
    protected $guarded = [''];
    protected $table = 'tags';
}
