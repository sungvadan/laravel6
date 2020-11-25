@extends('layout')

@section('content')
    @forelse($articles as $article)
        <div class="title">

        <h2><a href="{{ $article->path() }}">{{ $article->title }}</a></h2>

        <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>

        <p>{{ $article->body }}</p>
    @empty
        <p>No relevant article</p>
    @endforelse
@endsection
