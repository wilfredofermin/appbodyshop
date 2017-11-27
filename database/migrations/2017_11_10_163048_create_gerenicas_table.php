<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGerenicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerenicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado')->default(1);
            $table->string('name');
            $table->integer('tipo'); // 1 : SUCURSAL - 2 : CARGO -
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
        Schema::dropIfExists('gerenicas');
    }
}
