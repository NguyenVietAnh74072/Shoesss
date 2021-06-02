<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [''];
    protected $table = 'articles';


    public function menu()
    {
        return $this->belongsTo(Menu::class, 'a_menu_id');
    }
}
