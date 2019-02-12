<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;

class PeliculasController extends Controller
{
    public function listado() {
      $peliculas = Pelicula::paginate(5);

      $vac = compact("peliculas");

      return view("listadoPeliculas", $vac);
    }

    public function top() {
      $peliculas = Pelicula::where("rating", ">", 8)
      ->orderBy("title")
      ->paginate(5);

      $vac = compact("peliculas");

      return view("listadoPeliculas", $vac);
    }

    public function detalle($id) {
      //$pelicula = Pelicula::where("id", "=", $id)->get();

      $pelicula = Pelicula::find($id);

      $vac = compact("pelicula");

      return view("detallePelicula", $vac);
    }

    public function agregar() {
      $generos = Genero::all();

      $vac = compact("generos");

      return view("agregarPelicula", $vac);
    }

    public function almacenar(Request $formulario) {
      //Pelicula::create($formulario);

      $reglas = [
        "titulo" => "required|string|min:3|max:200|unique:movies,title",
        "rating" => "required|numeric|min:0|max:10",
        "fecha_de_estreno" => "required|date",
        "premios" => "required|integer|min:0",
        "duracion" => "integer|min:0",
        "genero" => "required",
        "poster" => "required|image"
      ];

      $this->validate($formulario, $reglas);

      $poster = $formulario->file("poster");
      $rutaDondeSeGuardaElArchivo = $poster->store("public");
      $nombreDelArchivo = basename($rutaDondeSeGuardaElArchivo);

      $pelicula = new Pelicula();

      $pelicula->title =  $formulario["titulo"];
      $pelicula->rating = $formulario["rating"];
      $pelicula->release_date = $formulario["fecha_de_estreno"];
      $pelicula->awards = $formulario["premios"];
      $pelicula->length = $formulario["duracion"];
      $pelicula->genre_id = $formulario["genero"];
      $pelicula->poster = $nombreDelArchivo;

      $pelicula->save();

      return redirect("/peliculas");
    }

    public function eliminar(Request $formulario) {
      $idPelicula = $formulario["idPelicula"];

      $pelicula = Pelicula::find($idPelicula);

      $pelicula->delete();

      return redirect("/peliculas");
    }

    public function listadoAPI() {
      $peliculas = Pelicula::all();

      return $peliculas;
    }
}
