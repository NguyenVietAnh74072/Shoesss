<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArticleDetailController extends BlogBaseController
{
    public function index(Request $request, $slug)
    {

        $article = Article::where('a_slug', $slug)->first();
        if (!$article) return abort(404);

        $viewData = [
            'article' => $article,
            'tags' => $this->getTags(),
            'menus' => $this->getMenus(),
            'getAriticlesLatest' => $this->getAriticlesLatest(),

        ];
        return view('frontend.article_detail.index', $viewData);
    }
}
