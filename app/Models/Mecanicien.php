<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanicien extends Model
{
    use HasFactory;

    public function Salaires(){
        return $this->belongsTo(Salaire::class, "salaire_id", "id");
    }
    public function Primes(){
        return $this->belongsTo(Prime::class, "prime_id", "id");
    }
    public function Reparations(){
        return $this->belongsToMany(Reparation::class, "Mecaniciens_Reparations", "Mecanicien_id", "Reparation_id");
    }
}
