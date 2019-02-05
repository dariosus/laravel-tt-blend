@extends("plantilla")

@section("principal")
  <h1>Usted eligio {{$pelicula->title}}</h1>
  <ul>
    <li>Rating: {{$pelicula->rating}}</li>
    <li>Fecha de estreno: {{$pelicula->release_date}}</li>
    <li>Duración: {{$pelicula->length}}</li>
  </ul>
@endsection
