<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules_maintenances', function (Blueprint $table) {
            $table->foreignId("vehicule_id")->constrained();
            $table->foreignId("maintenance_id")->constrained();
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
        Schema::table('vehicules_maintenances', function(Blueprint $table){
            $table->dropConstrainedForeignId(["vehicule_id", "maintenance_id"]);
        });
        Schema::dropIfExists('vehicules_maintenances');
    }
}
