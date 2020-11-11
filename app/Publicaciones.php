<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    protected $fillable = ['titulo', 'cuerpo']; 
    public $timestamps = false;
    public function usuarios()  
    { 
        return $this->belongsTo('App\Usuarios');
    }
}
