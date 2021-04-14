<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    protected $guarded = [''];
    protected $table = 'articles_tags';
}
