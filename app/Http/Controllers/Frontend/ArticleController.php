<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Article;

class ArticleController extends BlogBaseController
{
    public function index()
    {
        $articles = Article::with('menu:id,mn_name,mn_slug')->orderbyDesc('id')->paginate(10);
        $menus = $this->getMenus();
        $viewData = [
            'articles' => $articles,
            'menus' => $menus,
            'tags' => $this->getTags(),
            'getAriticlesLatest' => $this->getAriticlesLatest(),

        ];

        return view('frontend.menu.index', $viewData);
    }
}
