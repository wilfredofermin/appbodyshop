<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignsTable extends Migration
{

    public function up()
    {
        Schema::create('assigns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado')->default(1);
            $table->integer('category');
            $table->string('subcategory');
            $table->integer('type');
            $table->string('ubicacion');
            $table->string('support_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assigns');
    }
}
