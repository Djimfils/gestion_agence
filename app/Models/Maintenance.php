<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    public function Vehicules(){
        return $this->belongsToMany(Vehicule::class, "Vehicules_Maintenances", "Maintenance_id", "Vehicule_id");
    }
}
