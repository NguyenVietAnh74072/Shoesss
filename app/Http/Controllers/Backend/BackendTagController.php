<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BackendTagRequest;

class BackendTagController extends Controller
{
    protected $folder = "backend.tag.";
    public function index()
    {
        return view($this->folder . "index");
    }
    public function create()
    {
        return view($this->folder . "create");
    }

    public function store(BackendTagRequest $request)
    {
        return view($this->folder . "store");
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
        dd("delete");
    }
}
