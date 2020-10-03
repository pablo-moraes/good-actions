<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Good Actions - @yield('title')</title>
        <link rel="stylesheet" href={{ asset('css/global.css') }}> {{--Certo--}}
    </head>
    <body>
        @section('header')
            <header>
                <h1 class="title-header"><a href="#">Good Actions</a></h1>
            </header>
        @show
        
        <div class="container">
            @yield('content')
        </div>
        <!-- choose one -->
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace();
        </script>
    </body>
</html>
