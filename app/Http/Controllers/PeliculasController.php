<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

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
}
