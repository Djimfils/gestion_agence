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
            $table->foreignId('salaire_id')->constrained();
            $table->foreignId('prime_id')->constrained();
            $table->foreignId('vehicule_id')->constrained();
            $table->timestamps();
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
            $table->dropForeignId(["salaire_id", "prime_id", "vehicule_id"]);
        });
        Schema::dropIfExists('chauffeurs');
    }
}
