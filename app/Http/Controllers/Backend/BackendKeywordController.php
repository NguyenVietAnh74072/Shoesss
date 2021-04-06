<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BackendKeywordRequest;
use App\Keyword;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class BackendKeywordController extends Controller
{
    protected $folder = "backend.keyword.";
    public function index()
    {
        $keywords = Keyword::orderbyDESC('id')->get();


        $viewData = [
            'keywords' => $keywords

        ];
        return view($this->folder . "index", $viewData);
    }



    public function store(BackendKeywordRequest $request)
    {
        $data = $request->except('_token');
        $data['k_slug'] = Str::slug($request->k_name);
        $data['created_at'] = Carbon::now();
        $keyword = Keyword::create($data);
        return redirect()->back();
    }
    public function edit($id)
    {

        $keyword = Keyword::find($id);
        $keywords = Keyword::orderbyDesc('id')->get();

        $viewData = [
            'keywords' => $keywords,
            'keyword' => $keyword,


        ];
        return view($this->folder . "update", $viewData);
    }
    public function update(BackendKeywordRequest $request, $idd)

    {
        $data = $request->except('_token');
        $data = Keyword::find($idd);
        $data->c_name = $request->c_name;
        $data->c_slug = Str::slug($request->c_name);
        $data['updated_at'] = Carbon::now();
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        DB::table('keywords')->where('id', $id)->delete();
        return redirect()->back();
    }
}
