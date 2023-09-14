<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Accesories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serv_name')->nullable();
            $table->string('serv_desc')->nullable();
            $table->string('img')->nullable();
            $table->integer('qty')->nullable();
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
        Schema::dropIfExists('Accesories');
    }
}
