<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Menu;
use App\Tag;

class TagController extends BlogBaseController
{
    public function index(Request $request, $slug)
    {

        $tag = Tag::where('t_slug', $slug)->first();     // lay bai viet theo menu
        if (!$tag) return abort(404);
        $articles = Article::with('menu:id,mn_name,mn_slug')->whereHas('tags', function ($query) use ($tag) {
            $query->where('at_tag_id', $tag->id);
        })->orderbyDesc('id')->paginate(10);
        $viewData = [
            'articles' => $articles,
            'tag' => $tag,
            'tags' => $this->getTags(),
            'menus' => $this->getMenus(),
            'getAriticlesLatest' => $this->getAriticlesLatest(),

        ];
        return view('frontend.menu.index', $viewData);
    }
}
