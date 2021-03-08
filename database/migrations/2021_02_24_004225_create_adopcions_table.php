<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdopcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopcions', function (Blueprint $table) {
            $table->id();
            $table->string('mascota');
            $table->string('edad');
            $table->string('peso');
            $table->string('sexo');
            $table->string('tipo');
            $table->text('descripcion');
            $table->string('imagen');
            $table->string('vacunado');
            $table->string('desparasitado');
            $table->foreignId('user_id')->references('id')->on('users')->comment('el usuario que crea la adopcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adopcions');
    }
}
