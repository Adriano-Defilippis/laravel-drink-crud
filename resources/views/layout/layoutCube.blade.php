<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>

      <header class="bg_{{ $color }}">
        <h2>  List of Drinks</h2>
      </header>

      <div class="container">

        @yield('content')

      </div>


      <footer class="bg_{{ $color }}">
        Powered by Adriano
      </footer>

    </body>
</html>
