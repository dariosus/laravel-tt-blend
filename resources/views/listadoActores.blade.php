@extends("plantilla")

@section("titulo")
  Actores
@endsection

@section("principal")
  <h1>Listado de actores</h1>

  <ul>
    @foreach($actores as $actor)
      <li>
        {{$actor->nombreCompleto()}}
      </li>
    @endforeach
  </ul>
@endsection
