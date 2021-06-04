<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [''];
    protected $table = 'menus';

    public function articles()
    {
        return $this->hasMany(Article::class, 'a_menu_id');
    }
}
