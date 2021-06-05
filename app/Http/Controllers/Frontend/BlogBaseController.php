<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;
use App\Tag;
use App\Article;
use App\Product;
use App\Category;
use App\Keyword;

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

    public function getProductLatest()
    {
        //  lay san pham moi nhat 
        return Product::orderbyDesc('id')->limit(4)->select('id', 'pro_name', 'pro_avatar', 'created_at', 'pro_slug', 'pro_price')->get(); // select lua chon hien thi
    }
    public function getCategorys()
    {   // dem so san pham trong san pham  
        $products = Category::withCount('products')->orderbyDesc('id')->get();
        return $products;
    }
    public function getKeywords()
    {
        // lay giu lieu keyword theo tu tren xuong 
        return Keyword::orderbyDesc('id')->get();
    }
}
