<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparation extends Model
{
    use HasFactory;

    public function Vehicules(){
        return $this->belongsTo(Vehicule::class, "vehicule_id", "id");
    }
    public function Mecaniciens(){
        return $this->belongsToMany(Mecanicien::class, "Mecaniciens_Reparations", "Reparation_id", "Mecanicien_id");
    }
}
