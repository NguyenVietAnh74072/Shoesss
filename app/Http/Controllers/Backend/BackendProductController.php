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
use App\Keyword;

class BackendProductController extends Controller
{
    protected $folder = "backend.product.";
    public function index()
    {
        //$products = Product::orderbyDESC('id')->paginate(20);
        $products = Product::with('category:id,c_name')->orderbyDesc('id')->paginate(20);
        $categories = Category::all();
        $keywords = Keyword::all();

        $viewData = [
            'products' => $products,
            'categories' => $categories,
            'keywords' => $keywords,
            'keywordOld' => []


        ];
        return view($this->folder . "index", $viewData);
    }



    public function store(BackendProductRequest $request)
    {


        $data = $request->except('_token', 'pro_avatar');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now();
        $get_image = $request->file('pro_avatar');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 10000) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['pro_avatar'] = $new_image;
        }

        $product = Product::create($data);
        if ($request->keywords) {
            $datas = [];
            foreach ($request->keywords as $keyword) {

                $datas[] = [
                    'pk_product_id' => $product->id,
                    'pk_keyword_id' => $keyword,

                ];
            }

            DB::table('products_keywords')->where('pk_product_id', $product->id)->delete();
            DB::table('products_keywords')->insert($datas);
        }
        return redirect()->back();
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $products = Product::orderbyDesc('id')->get();
        $keywords = Keyword::all();
        $keywordOld = DB::table('products_keywords')->where('pk_product_id', $id)->pluck('pk_keyword_id')->toArray();


        $viewData = [
            'categories' => $categories,
            'product' => $product,
            'products' => $products,
            'keywords' => $keywords,
            'keywordOld' => $keywordOld,



        ];
        return view($this->folder . "update", $viewData);
    }
    public function update(BackendProductRequest $request, $idd)

    {

        $data = $request->except('_token');
        $data = Product::find($idd);
        $data['pro_name'] = $request->pro_name;
        $data->pro_price = $request->pro_price;
        $data->pro_content = $request->pro_content;
        $data->pro_description = $request->pro_description;
        $data->pro_number = $request->pro_number;
        $data->pro_category_id = $request->pro_category_id;
        $get_image = $request->file('pro_avatar');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data->pro_avatar = $new_image;
        }
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now();
        $data->save();
        return redirect()->back();

        /*$data = $request->except('_token');
        $data = Product::find($idd);
        $data->pro_name = $request->pro_name;
        $data->pro_price = $request->pro_price;
        $data->pro_content = $request->pro_content;
        $data->pro_description = $request->pro_description;
        $data->pro_number = $request->pro_number;
        $data->pro_category_id = $request->pro_category_id;
        $data->pro_slug = Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now();
        $data->save();*/
    }

    public function active($id)
    {
        $product = Product::find($id);
        $product->pro_active = !$product->pro_active;
        $product->save();
        return redirect()->back();
    }
    public function hot($id)
    {
        $product = Product::find($id);
        $product->pro_hot = !$product->pro_hot;
        $product->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->back();
    }
}
