@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" type="text/css"/>
@endsection

@section('content')
    <h1 class="title">update article</h1>
    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input class="input" type="text" placeholder="Title" name="title" value="{{ $article->title }}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="excerpt">Excerpt</label>
            <div class="control">
                <textarea class="textarea" placeholder="Excerpt" name="excerpt">{{ $article->excerpt }}</textarea>
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">content</label>
            <div class="control">
                <textarea class="textarea" placeholder="Content" name="body">{{ $article->body }}</textarea>
            </div>
        </div>
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
    </form>
@endsection
