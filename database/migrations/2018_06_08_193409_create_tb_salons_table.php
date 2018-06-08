<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbSalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_salons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',50)->nullable(false);
            $table->string('horario',50)->nullable(false);
            $table->string('horario1',50);
            $table->string('horario2',50);
            $table->string('dia',50)->nullable(false);
            $table->string('dia1',50);
            $table->string('dia2',50);
            $table->string('ambiente',50)->nullable(false);
            $table->integer('curso')->unsigned();
            $table->foreign('curso')->references('id')->on('tb_cursos')->onDelete('cascade');

            $table->integer('docente')->unsigned();
            $table->foreign('docente')->references('id')->on('tb_docentes')->onDelete('cascade');

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
        Schema::dropIfExists('tb_salons');
    }
}
