<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaire extends Model
{
    use HasFactory;

    public function Chauffeurs(){
        return $this->hasMany(Chauffeur::class);
    }
    public function Apprentis(){
        return $this->hasMany(Apprenti::class);
    }
    public function Mecaniciens(){
        return $this->hasMany(Mecanicien::class);
    }
}
