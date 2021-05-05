<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BackendTagRequest;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BackendTagController extends Controller
{
    protected $folder = "backend.tag.";
    public function index()
    {
        $tags = Tag::orderbyDESC('id')->get();


        $viewData = [
            'tags' => $tags

        ];
        return view($this->folder . "index", $viewData);
    }
    public function create()
    {
        return view($this->folder . "create");
    }

    public function store(BackendTagRequest $request)
    {
        $data = $request->except('_token');
        $data['t_slug'] = Str::slug($request->t_name);
        $data['created_at'] = Carbon::now();
        $tag = Tag::create($data);
        return redirect()->back();
    }
    public function edit($id)
    {
        $tag = Tag::find($id);
        $tags = Tag::orderbyDesc('id')->get();

        $viewData = [
            'tags' => $tags,
            'tag' => $tag,


        ];
        return view($this->folder . "update", $viewData);
    }
    public function update(BackendTagRequest $request, $idd)

    {
        $data = $request->except('_token');
        $data = Tag::find($idd);
        $data->t_name = $request->t_name;
        $data->t_slug = Str::slug($request->t_name);
        $data['updated_at'] = Carbon::now();
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        DB::table('tags')->where('id', $id)->delete();
        return redirect()->back();
    }
}
