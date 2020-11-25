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
    <ul>
        @forelse($notifications as $notification)
            <li>You have paid {{ $notification->data['amount'] }}</li>
        @empty
            You have 0 notification
        @endforelse
    </ul>
</body>
</html>
