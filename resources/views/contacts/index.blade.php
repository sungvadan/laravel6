<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" type="text/css"/>
    <title>Contact</title>
</head>
<body>
<div class="container mx-auto px-4 box-border h-32 w-32 p-4 border-4">
    <form method="POST" action="/contact">
        @csrf
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="text" name="email" id="email">
                @error('email')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="control">
            <button class="button is-link">Send</button>
        </div>

        @if (session('message'))
            {{ session('message') }}
        @endif
    </form>
</div>
</body>
</html>
