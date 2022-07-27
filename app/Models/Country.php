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

}