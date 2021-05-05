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
        $category = Category::orderbyDESC('id')->get();


        $viewData = [
            'categories' => $category

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
    }
    public function update(BackendCategoryRequest $request, $idd)

    {
    }
    public function delete($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->back();
    }
}
