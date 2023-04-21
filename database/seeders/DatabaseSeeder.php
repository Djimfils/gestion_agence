<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Salaire;
use App\Models\Prime;
use App\Models\Vehicule;
use App\Models\Chauffeur;
use App\Models\Apprenti;
use App\Models\Mecanicien;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        Vehicule::factory(20)->create();
        Salaire::factory(20)->create();
        Prime::factory(20)->create();
        Chauffeur::factory(20)->create();
        Apprenti::factory(20)->create();
        Mecanicien::factory(20)->create();
        
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);

        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
    }
}
