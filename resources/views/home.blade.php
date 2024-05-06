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
        <style>

        </style>
    </head>
    <body class="antialiased">
    <header>
        <nav>
            <ul>
                
                <li><a href="#">{{$home}}</a></li>
                <li><a href="{{route('about', ['data' => 1]);}}">{{$about}}</a></li>
                <li><a href="{{route('contacts', ['data' => 2]);}}">{{$contacts}}</a></li>
                <li><a href="{{route('products', ['data' => 3]);}}">{{$products}}</a></li>        
                
            </ul>
        </nav>
    </header>
    <h1>Hello World!</h1>

    </body>

    <style>
        header {
            background-color: lightgrey;
        }
        nav {
            width: 1000px;
            margin: auto;
            height: 100px;
            display: flex;
            align-items: center;
        }
        ul {
            display: flex;
            width: 100%;
            list-style: none;
            justify-content: space-between;
        }
        a {
            text-decoration: none;
            color: black;
        }
        
        
    </style>
   
</html>
