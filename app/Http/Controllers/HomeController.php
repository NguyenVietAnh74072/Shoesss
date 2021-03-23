<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function indexx()
    {


        return view('welcome');
    }
}
