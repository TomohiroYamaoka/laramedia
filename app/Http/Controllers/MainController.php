<?php

namespace App\Http\Controllers;

//モデルのArticleのModelを継承する。
use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //sortByDescメソッドを使って、created_atの降順で並び替えをする。
        //Articleモデルの全データが最新の投稿日時順で
        $articles = Article::all()->sortByDesc('created_at');
        
        //views/main/index.blade.phpのindex処理を実行。
        return view('articles.index', ['articles' => $articles]);
    
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        //articlesのindexのところへジャンプ
        return redirect()->route('articles.index');
    }
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);    
    }
    public function update(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all())->save();
        return redirect()->route('articles.index');
    }
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }  
}
