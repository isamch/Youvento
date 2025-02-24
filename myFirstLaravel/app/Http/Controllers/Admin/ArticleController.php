<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;


class ArticleController extends Controller
{
    //

    public function index()
    {

        $articles = Article::all();
        // dd($articles);

        return view('admin.index', compact('articles'));
    }


    public function getArticleById($id)
    {

        // $article = Article::find($id);

        $article = Article::findorfail($id);

        return view('article.index', compact('article'));
    }




}
