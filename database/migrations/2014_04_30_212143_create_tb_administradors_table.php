<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_administradors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',20)->nullable(false);
            $table->string('apellidop',20)->nullable(false);
            $table->string('apellidom',20)->nullable(false);
            $table->string('documento',20)->unique();
            $table->string('direccion',30);
            $table->string('celular',9)->unique();
            $table->char('tipo_adm',2);
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
        Schema::dropIfExists('tb_administradors');
    }
}
