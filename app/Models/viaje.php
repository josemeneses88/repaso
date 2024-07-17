<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    use HasFactory;

    // Viaje es la entidad debil, por lo tanto recibe los campos de las otras entidades (palabra reservada belongsto)
    public function viajero (){
        return $this->belongsTo('App\Models\Viajero');
    }

    public function destino (){
        return $this->belongsTo('App\Models\Destino');
    }
    
    public function origen (){
        return $this->belongsTo('App\Models\Origen');
    }

}
