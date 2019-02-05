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
    </ul>
    <section id="principal" class="container">
      @yield("principal")
    </section>
  </body>
</html>
