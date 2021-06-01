<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendMenuRequest;
use Illuminate\Http\Request;
use App\Menu;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BackendMenuController extends Controller
{
    protected $folder = "backend.menu.";
    public function index()
    {
        $menus = Menu::orderbyDESC('id')->get();


        $viewData = [
            'menus' => $menus

        ];
        return view($this->folder . "index", $viewData);
    }

    public function store(BackendMenuRequest $request)
    {
        $data = $request->except('_token');
        $data['mn_slug'] = Str::slug($request->mn_name);
        $data['created_at'] = Carbon::now();
        $menu = Menu::create($data);
        return redirect()->back();
    }
    public function edit($id)
    {
        $menu = Menu::find($id);
        $menus = Menu::orderbyDesc('id')->get();

        $viewData = [
            'menus' => $menus,
            'menu' => $menu,


        ];
        return view($this->folder . "update", $viewData);
    }
    public function update(BackendMenuRequest $request, $idd)

    {
        $data = $request->except('_token');
        $data = Menu::find($idd);
        $data->mn_name = $request->mn_name;
        $data->mn_slug = Str::slug($request->mn_name);
        $data['updated_at'] = Carbon::now();
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {

        DB::table('menus')->where('id', $id)->delete();
        return redirect()->back();
    }
}
