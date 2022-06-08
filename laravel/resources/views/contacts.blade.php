<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
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
    <h1>Contatti</h1>
    <p>pagina di contatti</p>
</body>

</html>