<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //use HasFactory;
    /*Relacionar el modelo con la tabla (migracion)*/
    public function nivel(){
        return $this-> BelongsTo(Nivel::class,'nivel_id','id');
    }
}
