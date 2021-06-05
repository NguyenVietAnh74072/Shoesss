<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

class ProductDetailController extends Controller
{
    public function index(Request $request, $slug)
    {

        $product = Product::where('pro_slug', $slug)->first();   // chi tiet bai viet
        if (!$product) return abort(404);

        $viewData = [
            'products' => $product,
            'categorys' => $this->getCategorys(),
            'keywords' => $this->getKeywords(),
            'getProductLatest' => $this->getProductLatest(),

        ];
        return view('frontend.product_details.index');
    }
}
