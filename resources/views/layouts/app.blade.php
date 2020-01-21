<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Blog</title>
</head>
<body>

    <div>
        @yield('content')
    </div>

    @section('advertisement')
        <p>
            Score some new PHP books in my store!
        </p>
    @show

</body>
</html>
