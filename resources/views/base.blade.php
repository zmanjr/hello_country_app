<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title',config('app.name'))</title>
    </head>
    <body class="antialiased">
        @yield('content')

       <footer>
        <p>
            &copy; Copyright {{ date('Y')}} &middot; 
            @if(!Route::is('app_about'))
            <a href="{{route('app_about')}}">About Us</a>
            @endif
        </p>
       </footer>
    </body>
</html>
