<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield("titulo")
    </title>
    <link rel="stylesheet" href="/css/app.css">
    @yield("colorDeFondo")
  </head>
  <body>
    <ul>
      <li><a href="/peliculas">Películas</a></li>
      <li><a href="/generos">Generos</a></li>
      <li><a href="/topPeliculas">Top Películas</a></li>
      <li><a href="/actores">Actores</a></li>

      @if (Auth::check())
        <li>Hola {{Auth::user()->name}}</li>
        <li>
          <a class="" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      @else
        <li><a href="/register">Registración</a></li>
        <li>
          <a href="/login">Login</a>
        </li>
      @endif
    </ul>
    <section id="principal" class="container">
      @yield("principal")
    </section>
  </body>
</html>
