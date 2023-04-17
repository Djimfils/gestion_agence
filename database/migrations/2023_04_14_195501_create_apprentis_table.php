<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprentisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprentis', function (Blueprint $table) {
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
        Schema::table('apprentis', function(Blueprint $table){
            $table->dropConstrainedForeignId("salaire_id");
            $table->dropConstrainedForeignId("prime_id");
        });
        Schema::dropIfExists('apprentis');
    }
}
