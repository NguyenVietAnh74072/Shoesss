<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;


class CategoryController extends BlogBaseController
{
    public function index(Request $request, $slug)
    {;
        $categorys = $this->getCategorys();
        $category = Category::where('c_slug', $slug)->first();

        if (!$category) return abort(404);
        $products = Product::with('category:id,c_name,c_slug')->where('pro_category_id', $category->id)->orderbyDesc('id')->paginate(10);

        $viewData = [
            'products' => $products,
            'categorys' => $categorys,
            'category' => $category,
            'keywords' => $this->getKeywords(),
            'getProductLatest' => $this->getProductLatest(),
        ];
        return view('frontend.category.index', $viewData);
    }
}
