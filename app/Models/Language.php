<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

     // La tabla a conectar
     protected $table = "languages";
     // La clave primaria de la tabla
     protected $primaryKey = "language_id"; 
 
     // Omitir campos de auritoria: 
     public $timestamps = false; 
     
    use HasFactory;

    //Relacion m a m con paises

    public function paises(){
        return $this->belongsToMany(Country::class, 'country_languages', 'language_id', 'country_id');
    }
}
