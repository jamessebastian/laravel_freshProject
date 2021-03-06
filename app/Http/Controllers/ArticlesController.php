<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles] );
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', ['article' => $article] );
    }

    public function create()
    {
        return view('articles.create');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update($id)
    {
        request()->validate([
            'title'=>['required','min:3','max:255'],
            'excerpt'=>'required',
            'body'=>'required']);

        $article = Article::findOrFail($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/articles/'.$article->id);

    }

    public function store()
    {
        request()->validate([
            'title'=>['required','min:3','max:255'],
            'excerpt'=>'required',
            'body'=>'required']);


        //die('hee');
        //dump(request()->all());
        $article = new Article;
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/articles');






    }
}
