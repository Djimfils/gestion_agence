<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChauffeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('nationalite');
            $table->string('age');
            $table->string('adresse');
            $table->string('telephone');
            $table->dateTime('dateEmbauche');
            $table->foreignId('salaire_id');
            $table->foreignId('prime_id');
            $table->foreignId('vehicule_id');
        });
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chauffeurs', function(Blueprint $table){
            $table->dropConstrainedForeignId("salaire_id");
            $table->dropConstrainedForeignId("prime_id");
            $table->dropConstrainedForeignId("vehicule_id");
        });
        Schema::dropIfExists('chauffeurs');
    }
}
