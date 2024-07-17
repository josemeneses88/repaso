<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viajero extends Model
{
    use HasFactory;

            // Viajero es la entidad fuerte, por lo tanto envia los campos a la otra entidad que recibe. (palabra reservada hasmany, se envia en plural)
            public function viajeros (){
                return $this->hasMany('App\Models\Viajero');
            }

}
