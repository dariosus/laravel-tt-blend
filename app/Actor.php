<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $guarded = [];

    public function nombreCompleto() {
      return $this->first_name . " " . $this->last_name;
    }

    public function peliculas() {
      return $this->belongsToMany(Pelicula::class, "actor_movie", "actor_id", "movie_id");
    }
}
