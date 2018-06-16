<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('deg',40)->nullable(false)->unique();
            $table->integer('salon')->unsigned();
            $table->foreign('salon')->references('id')->on('tb_salons')->onDelete('cascade');
            $table->integer('estudiantes')->unsigned();
            $table->foreign('estudiantes')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tb_matriculas');
    }
}
