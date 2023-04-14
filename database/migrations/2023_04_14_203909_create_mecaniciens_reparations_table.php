<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMecaniciensReparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mecaniciens_reparations', function (Blueprint $table) {
            $table->foreignId("mecanicien_id");
            $table->foreignId("reparation_id");
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
        Schema::table('mecaniciens_reparations', function(Blueprint $table){
            $table->dropConstrainedForeignId(["mecanicien_id", "reparation_id"]);
        });
        Schema::dropIfExists('mecaniciens_reparations');
    }
}
