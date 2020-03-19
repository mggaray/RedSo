<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CambioDeNombreTablaAmigos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('amigos', function (Blueprint $table) {
            $table->renameColumn('amigo_id', 'seguido_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('amigos', function (Blueprint $table) {
            $table->renameColumn('seguido_id', 'amigo_id');
        });
    }
}
