<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbrequests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado')->default(1);
            $table->integer('condicion')->default(3);// 4:DECLINADO | 3 :PENDIENTE | 2 :EN PROCESO | 1 :COMPLETADO
            $table->integer('servicio');
            $table->string('description');
            $table->string('ubicacion');
            $table->string('category');
            $table->string('subcategory');
            $table->string('area');
            $table->integer('type'); // 1 : PROBLEMA | 2 : SOLICITUD | 3 : ASISTENCIA
            $table->string('prioridad');
            $table->string('imagen')->default('img/soporte.png');

            $table->timestamps();

            //USER
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dbrequests');
    }
}
