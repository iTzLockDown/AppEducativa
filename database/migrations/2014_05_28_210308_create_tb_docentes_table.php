<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',20)->nullable(false);
            $table->string('apellidop',20)->nullable(false);
            $table->string('apellidom',20)->nullable(false);
            $table->string('documento',20)->unique();
            $table->string('direccion',30);
            $table->string('celular',9)->unique();
            $table->char('profecion');
            $table->string('email',50)->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('tb_docentes');
    }
}
