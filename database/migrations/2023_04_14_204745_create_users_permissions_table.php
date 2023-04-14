<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_permissions', function (Blueprint $table) {
            $table->foreignId("user_id");
            $table->foreignId("permission_id");
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
        Schema::table('users_permissions', function(Blueprint $table){
            $table->dropConstrainedForeignId(["user_id", "permission_id"]);
        });
        Schema::dropIfExists('users_permissions');
    }
}
