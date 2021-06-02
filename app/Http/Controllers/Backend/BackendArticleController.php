<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendProdcutRequest;
use App\Http\Requests\BackendArticleRequest;
use Illuminate\Http\Request;
use App\Article;
use App\Menu;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BackendArticleController extends Controller
{
    protected $folder = "backend.article.";
    public function index()
    {
        $articles = Article::with('menu:id,mn_name')->orderbyDesc('id')->paginate(20);
        $menus = Menu::all();


        $viewData = [
            'articles' => $articles,
            'menus' => $menus

        ];
        return view($this->folder . "index", $viewData);
    }


    public function store(BackendArticleRequest $request)
    {
        $data = $request->except('_token', 'a_avatar');
        $data['a_slug'] = Str::slug($request->a_name);
        $data['created_at'] = Carbon::now();
        $get_image = $request->file('a_avatar');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 10000) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/article', $new_image);
            $data['a_avatar'] = $new_image;
        }
        $article = Article::create($data);
        return redirect()->back();
    }
    public function edit($id)
    {
        $menus = Menu::all();
        $article = Article::find($id);
        $articles = Article::orderbyDesc('id')->get();

        $viewData = [
            'menus' => $menus,
            'article' => $article,
            'articles' => $articles,


        ];
        return view($this->folder . "update", $viewData);
    }
    public function update(BackendArticleRequest $request, $idd)

    {
        $data = $request->except('_token', 'a_avatar');
        $data = Article::find($idd);
        $data->a_content = $request->a_content;
        $data->a_description = $request->a_description;
        $data->a_menu_id = $request->a_menu_id;
        $data->a_slug = Str::slug($request->a_name);
        $data['updated_at'] = Carbon::now();
        $get_image = $request->file('a_avatar');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 10000) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/article', $new_image);
            $data['a_avatar'] = $new_image;
        }
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        dd("delete");
    }
}
