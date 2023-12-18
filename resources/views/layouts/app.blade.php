<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'DC comics')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    Comics
                </div>
                <div class="col">
                    <ul class="d-flex">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('comics.index') }}">Comics</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </header>

    <main class="bg-light">
        @yield('content')
    </main>

</body>

</html>