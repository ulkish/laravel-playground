<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Welcome to mission control!</h1>
        <p>
            <a href="{{ route('posts.show', ['id' => 42]) }}">Laravel Hacking and Coffee</a>
        </p>

    </body>
</html>
