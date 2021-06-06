<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/18c84ae54e.js"></script>
    </head>
    <body class="antialiased">
        <section id="app-layout">
        @include('includes.side-menu')
        <section id="content-section">
        @yield('content')
        </section>
  </section>
    </body>
</html>
