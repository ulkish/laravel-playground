<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posts Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Welcome to the posts index!</h1>

        <ul>
            @forelse ($posts as $posts)
                <li>{{ $posts }}</li>
            @empty
                <li>No events available.</li>
            @endforelse
        </ul>



    </body>
</html>
