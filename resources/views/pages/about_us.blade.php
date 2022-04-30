<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Us | Hello City</title>
    </head>
    <body class="antialiased">
       <h1>Built with &hearts; by Zman Jr</h1>
       <p>It's currently {{ date('h:i A')}}. <a href = "/">Back to welcome page</a></p>

       <footer>
           <p>&copy; Copyright {{ date('Y')}} &middot; </p>
       </footer>
    </body>
</html>
