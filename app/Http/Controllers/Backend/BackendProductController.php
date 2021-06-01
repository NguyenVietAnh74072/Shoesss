<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendProdcutRequest;
use App\Http\Requests\BackendProductRequest;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BackendProductController extends Controller
{
    protected $folder = "backend.product.";
    public function index()
    {
        $products = Product::orderbyDESC('id')->paginate(20);
        $categories = Category::all();

        $viewData = [
            'products' => $products,
            'categories' => $categories

        ];
        return view($this->folder . "index", $viewData);
    }



    public function store(BackendProductRequest $request)
    {
        $data = $request->except('_token', 'pro_avatar');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now();
        $product = Product::create($data);
        return redirect()->back();
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $products = Product::orderbyDesc('id')->get();

        $viewData = [
            'categories' => $categories,
            'product' => $product,
            'products' => $products,


        ];
        return view($this->folder . "update", $viewData);
    }
    public function update(BackendProductRequest $request, $idd)

    {
        $data = $request->except('_token');
        $data = Product::find($idd);
        $data->pro_name = $request->pro_name;
        $data->pro_price = $request->pro_price;
        $data->pro_content = $request->pro_content;
        $data->pro_description = $request->pro_description;
        $data->pro_number = $request->pro_number;
        $data->pro_category_id = $request->pro_category_id;
        $data->pro_slug = Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now();
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->back();
    }
}
