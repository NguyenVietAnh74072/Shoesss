<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexx()
    {
        return view('welcome');
    }
    public   function vans()
    {

        return view('vans');
    }
}
