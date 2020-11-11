<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['nombre', 'email']; 
    public $timestamps = false;
    public function publicaciones()  
    { 
        return $this->belongsTo('App\Publicaciones');
    }
}


