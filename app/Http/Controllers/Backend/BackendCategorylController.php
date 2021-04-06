<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BackendCategoryRequest;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BackendCategorylController extends Controller
{

    protected $folder = "backend.category.";
    public function index()
    {
        $categories = Category::orderbyDESC('id')->get();


        $viewData = [
            'categories' => $categories

        ];
        return view($this->folder . "index", $viewData);
    }


    public function store(BackendCategoryRequest $request)
    {
        $data = $request->except('_token');
        $data['c_slug'] = Str::slug($request->c_name);
        $data['created_at'] = Carbon::now();
        $category = Category::create($data);
        return redirect()->back();
    }
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::orderbyDesc('id')->get();

        $viewData = [
            'categories' => $categories,
            'category' => $category,


        ];
        return view($this->folder . "update", $viewData);
    }
    public function update(BackendCategoryRequest $request, $idd)

    {
        $data = $request->except('_token');
        $data = Category::find($idd);
        $data->k_name = $request->k_name;
        $data->k_slug = Str::slug($request->k_name);
        $data['updated_at'] = Carbon::now();
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->back();
    }
}
