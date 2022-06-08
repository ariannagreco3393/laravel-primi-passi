<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        header ul {
            display: flex;
            gap: 2rem;
        }
         header li {
             list-style: none;
         }
         a {
             text-decoration: none;
             color: yellowgreen;
             font-size: 30px;
         }
        </style>
    </head>
    <body>
    <header>    
            <ul class="main-menu">
                <li class="menu-item">
                    <a href="/">
                        Home Page
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('contatti') }}">
                        Contatti
                    </a>
                </li>
            </ul>       
    </header>
        <h1>Hello World</h1>
        <ul>
            @foreach ($names as $name)
            <li>{{ $name }}</li>
            @endforeach
        </ul>
    </body>
</html>
