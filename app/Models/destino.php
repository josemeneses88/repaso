<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destino extends Model
{
    use HasFactory;
    
        // Destino es la entidad fuerte, por lo tanto envia los campos a la otra entidad que recibe. (palabra reservada hasmany)
        public function destinos (){
            return $this->hasMany('App\Models\Destino');
        }
}
