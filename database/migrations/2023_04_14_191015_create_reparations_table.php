<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            $table->string('panne');
            $table->double('cout');
            $table->date('dateRepa');
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
        Schema::table('reparations', function(Blueprint $table){
            $table->dropConstrainedForeignId("vehicule_id");
        });
        Schema::dropIfExists('reparations');
    }
}
