<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }

        return view ('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }


    public function store()
    {
        $this->validateRequestArticle();
        $article = new Article(request()->all(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request()->get('tags'));

        return redirect(route('articles.index'));
    }


    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article
        ]);
    }


    public function update(Article $article)
    {
        $article->update($this->validateRequestArticle());

        return redirect(route('articles.index'));
    }


    public function validateRequestArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
