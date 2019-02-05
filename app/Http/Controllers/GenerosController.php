<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function listado() {
      return view("listadoGeneros");
    }
}
