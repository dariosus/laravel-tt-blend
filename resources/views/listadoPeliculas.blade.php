@extends("plantilla")

@section("principal")
  <h1>Listado de películas</h1>


  <ul>
    @foreach($peliculas as $pelicula)
      <li>
        <a href="detallePelicula/{{$pelicula->id}}">
          {{$pelicula->title}}: {{$pelicula->rating}}
        </a>
      </li>
    @endforeach
  </ul>

  {{$peliculas->links()}}
@endsection

@section("titulo")
  Películas
@endsection

@section("colorDeFondo")
  <style media="screen">
    body {
      background-color:lightblue;
    }
  </style>
@endsection
