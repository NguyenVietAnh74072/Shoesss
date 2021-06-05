<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends BlogBaseController
{
    public function index()
    {
        $products = Product::with('category:id,c_name,c_slug')->orderbyDesc('id')->paginate(10); // hien thi bai viet
        $categorys = $this->getCategorys();
        $viewData = [
            'products' => $products,
            'categorys' => $categorys,
            'keywords' => $this->getKeywords(),
            'getProductLatest' => $this->getProductLatest(),

        ];

        return view('frontend.category.index', $viewData);
    }
}
