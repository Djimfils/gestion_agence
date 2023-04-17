<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    public $fillable = [
        "immatriculation", "marque", "modele", "dateAchat"
    ];

    public function Chauffeurs(){
        return $this->hasMany(Chauffeur::class);
    }

    public function Voyages(){
        return $this->hasMany(Voyage::class);

    }

    public function Maintenances(){
        return $this->belongsToMany(Maintenance::class, "Vehicules_Maintenances", "Vehicule_id", "Maintenance_id");
    }

    public function Reparations(){
        return $this->hasMany(Reparation::class);
    }

}
