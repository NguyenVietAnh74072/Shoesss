<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;
use App\Tag;
use App\Article;

class BlogBaseController extends Controller
{
    public function getMenus()
    {
        $menus = Menu::withCount('articles')->orderbyDesc('id')->get();
        return $menus;
    }
    public function getTags()
    {

        return Tag::orderbyDesc('id')->get();
    }
    public function getAriticlesLatest()
    {

        return Article::orderbyDesc('id')->limit(4)->select('id', 'a_name', 'a_avatar', 'created_at', 'a_slug')->get();
    }
}
