<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->string('depart');
            $table->string('destination');
            $table->string('TC');
            $table->dateTime('dateDepart');
            $table->foreignId('chauffeur_id')->constrained();
            $table->foreignId('vehicule_id')->constrained();
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
        Schema::table('voyages', function(Blueprint $table){
            $table->dropConstrainedForeignId("chauffeur_id");
            $table->dropConstrainedForeignId("vehicule_id");
        });
        Schema::dropIfExists('voyages');
    }
}
