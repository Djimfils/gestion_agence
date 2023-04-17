<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["libelle"=> "ajouter un apprenti"],
            ["libelle"=> "consulter un apprenti"],
            ["libelle"=> "éditer un apprenti"],
            ["libelle"=> "supprimer un apprenti"],

            ["libelle"=> "ajouter une chauffeur"],
            ["libelle"=> "consulter une chauffeur"],
            ["libelle"=> "éditer une chauffeur"],
            ["libelle"=> "supprimer une chauffeur"],

            ["libelle"=> "ajouter un mécanicien"],
            ["libelle"=> "consulter un mécanicien"],
            ["libelle"=> "éditer un mécanicien"],
            ["libelle"=> "supprimer un mécanicien"],

            ["libelle"=> "ajouter un voyage"],
            ["libelle"=> "consulter un voyage"],
            ["libelle"=> "éditer un voyage"],
            ["libelle"=> "supprimer un voyage"],

            ["libelle"=> "ajouter un véhicule"],
            ["libelle"=> "consulter un véhicule"],
            ["libelle"=> "éditer un véhicule"],
            ["libelle"=> "supprimer un véhicule"],

        ]);
    }
}
