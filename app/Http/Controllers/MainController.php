<?php

namespace App\Http\Controllers;

//モデルのArticleのModelを継承する。
use App\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //sortByDescメソッドを使って、created_atの降順で並び替えをする。
        //Articleモデルの全データが最新の投稿日時順で
        $articles = Article::all()->sortByDesc('created_at');
        
        //views/main/index.blade.phpのindex処理を実行。
        return view('main/index');
    }
}
