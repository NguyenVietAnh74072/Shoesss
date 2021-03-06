<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Menu;

class MenuController extends BlogBaseController
{
    public function index(Request $request, $slug)
    {
        $menus = $this->getMenus();
        $menu = Menu::where('mn_slug', $slug)->first();     // lay bai viet theo menu
        if (!$menu) return abort(404);
        $articles = Article::with('menu:id,mn_name,mn_slug')->where('a_menu_id', $menu->id)->orderbyDesc('id')->paginate(10);
        $viewData = [
            'articles' => $articles,
            'menu' => $menu,
            'menus' => $menus,
            'tags' => $this->getTags(),
            'getAriticlesLatest' => $this->getAriticlesLatest(),

        ];
        return view('frontend.menu.index', $viewData);
    }
}
