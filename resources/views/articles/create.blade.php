@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" type="text/css"/>
@endsection

@section('content')
    <h1 class="title">Create new article</h1>
    <form method="POST" action="/articles">
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input class="input @error('title') is-danger @enderror" type="text" placeholder="Title" name="title" value="{{ old('title') }}">
                @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                @enderror
            </div>
        </div>
        <div class="field">
            <label class="label" for="excerpt">Excerpt</label>
            <div class="control">
                <textarea class="textarea @error('excerpt') is-danger @enderror" placeholder="Excerpt" name="excerpt">{{ old('excerpt') }}</textarea>
                @error('excerpt')
                <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                @enderror
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">content</label>
            <div class="control">
                <textarea class="textarea @error('body') is-danger @enderror" placeholder="Content" name="body">{{ old('body') }}</textarea>
                @error('body')
                <p class="help is-danger">{{ $errors->first('body') }}</p>
                @enderror
            </div>
        </div>
        <div class="field">
            <label class="label" for="tags">Tags</label>
            <div class="control select is-multiple">
                <select name="tags[]" id="tags" multiple>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
                @error('tags')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
    </form>
@endsection
