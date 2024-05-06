<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
    <header>
        <nav>
            <ul>
                @foreach ($data as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </nav>
    </header>
    <h1>Hello World!</h1>
    </body>
</html>
