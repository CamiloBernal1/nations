<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // La tabla a conectar
    protected $table = "countries";
    // La clave primaria de la tabla
    protected $primaryKey = "country_id"; 

    // Omitir campos de auritoria: 
    public $timestamps = false; 
    
    use HasFactory;

    //Relacion con Region

    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }

    //Relacion m a m con Lenguage

    public function idioma(){
        return $this->belongsToMany(Language::class, 'country_languages', 'country_id', 'language_id');
    }


}