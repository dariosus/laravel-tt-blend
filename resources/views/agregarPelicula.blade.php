@extends("plantilla")

@section("principal")
  <h1>Película nueva</h1>
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <form class="" action="/agregarPelicula" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Titulo</label>
      <input type="text" name="titulo" value="{{old("titulo")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Rating</label>
      <input type="text" name="rating" value="{{old("rating")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Premios</label>
      <input type="text" name="premios" value="{{old("premios")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Fecha de estreno</label>
      <input type="date" name="fecha_de_estreno" value="{{old("fecha_de_estreno")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Duración</label>
      <input type="text" name="duracion" value="{{old("duracion")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Poster</label>
      <input type="file" name="poster" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Género</label>
      <select class="form-control" name="genero">
        @foreach($generos as $genero)
          @if (old("genero") == $genero->id)
            <option value="{{$genero->id}}" selected>
              {{$genero->name}}
            </option>
          @else
            <option value="{{$genero->id}}">
              {{$genero->name}}
            </option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="">
      <button type="submit" name="button" class="btn btn-primary">Agregar película</button>
    </div>
  </form>
@endsection
