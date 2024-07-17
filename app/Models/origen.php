<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class origen extends Model
{
    use HasFactory;

        // Origen es la entidad fuerte, por lo tanto envia los campos a la otra entidad que recibe. (palabra reservada hasmany)
        public function origens (){
            return $this->hasMany('App\Models\Origen');
        }

}
