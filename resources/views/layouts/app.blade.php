<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <section id="welcome">
    <div class="welcome-menu">
      <a href="/" class="logo">
        <img src="https://webstockreview.net/images/clipart-restaurant-restaurant-logo-5.png">
      </a>
      <div class="menu">
        <div class="menu-title">
          Menu
        </div>
        <ul class="links">
          <li>
            <a href="/menu">Menu</a>
          </li>
          <li>
            <a href="/waitlist">Waitlist</a>
          </li>
          <li>
            <a href="/offers">Offers</a>
          </li>
          <li>
            <a href="/giftcards">Giftcards</a>
          </li>
        </ul>
      </div>
      <div class="social-icons">
        <a href="#">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      <div class="location">
        <div class="address">
          234 Main st,<br>
          New York, New York 11747
        </div>
        <div class="phone-number">
          <a href="tel:7182198652">718-219-8652</a>
        </div>
      </div>
    </div>
    @yield('content')
  </section>
    </body>
</html>
