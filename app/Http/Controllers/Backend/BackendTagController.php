<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BackendTagRequest;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BackendTagController extends Controller
{
    protected $folder = "backend.tag.";
    public function index()
    {
        $tags = Tag::orderbyDesc('id')->get();

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
        return view($this->folder . "update");
    }
    public function update($id)

    {
    }
    public function delete($id)
    {
        DB::table('tags')->where('id', $id)->delete();
        return redirect()->back();
    }
}
