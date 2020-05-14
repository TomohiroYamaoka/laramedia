<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //views/main/index.blade.phpのindex処理を実行。
        return view('main/index');
    }
}
