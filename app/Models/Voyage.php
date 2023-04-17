<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    public function Vehicules(){
        return $this->belongsTo(Vehicule::class, "vehicule_id", "id");
    }
    public function Chauffeurs(){
        return $this->belongsTo(Chauffeur::class, "Chauffeur_id", "id");
    }
}
