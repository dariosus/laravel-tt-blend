@extends("plantilla")

@section("principal")
  <h1>Usted eligio {{$pelicula->title}}</h1>
  <ul>
    <li>Rating: {{$pelicula->rating}}</li>
    <li>Fecha de estreno: {{$pelicula->release_date}}</li>
    <li>Duración: {{$pelicula->length}}</li>
    <li>Genero: {{$pelicula->genero->name}}</li>
    <li>Actores:
      <ul>
        @foreach ($pelicula->actores as $actor)
          <li>
            {{$actor->nombreCompleto()}}
          </li>
        @endforeach
      </ul>
    </li>
    <img src="/storage/{{$pelicula->poster}}" alt="">

  </ul>
  <form class="" action="/eliminarPelicula" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="idPelicula" value="{{$pelicula->id}}">
    <button type="submit" name="button" class="btn btn-danger">Eliminar película</button>
  </form>
@endsection
