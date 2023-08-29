<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larafolio | Create your portfolio</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <div class="bg-primary-dark flex justify-center text-primary-light py-2 text-lg">
            <nav>
                <a href="/">Larafolio | Create your portfolio</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('content');
    </main>
    <footer class="text-sm flex justify-end pr-8">
        <a class="hover:text-primary-light" target="_blank" href="https://github.com/OverlyDevoted">
            Made with ❤ in Vilnius @ 2023 OverlyDevoted
        </a>
    </footer>
</body>

</html>
