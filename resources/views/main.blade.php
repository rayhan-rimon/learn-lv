<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @include('includes.style')
    </head>
    <body class="antialiased">
        @include('includes.navbar')
        <section>
            @yield('content')
        </section>

        <footer class="container-fluid text-center fixed-bottom bg-dark">
            @include('includes.footer')
        </footer>
    </body>
</html>
