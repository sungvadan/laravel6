<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" type="text/css"/>

    <title>Document</title>
</head>
<body>

<h1>{{ $conversation->title }}</h1>

<p>{{ $conversation->body }}</p>

<hr/>
<ul>
@foreach($conversation->replies as $reply)
    <li @if($reply->isBestReply())
            style="color:green;"
        @endif>
        {{$reply->body}}
        @can('update', $conversation)
            <form action="/best-reply/{{ $reply->id }}" method="POST">
                @csrf
                <button>Best reply</button>
            </form>
        @endcan
    </li>
@endforeach
</ul>


</body>
</html>
