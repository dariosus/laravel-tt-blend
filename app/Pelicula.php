<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = "movies";
    // public $primaryKey = "id";
    // public $timestamps = false;
    public $guarded = [];

    public function genero() {
      return $this->belongsTo(Genero::class, "genre_id");
    }

    public function actores() {
      return $this->belongsToMany(Actor::class, "actor_movie", "movie_id", "actor_id");
    }
}
