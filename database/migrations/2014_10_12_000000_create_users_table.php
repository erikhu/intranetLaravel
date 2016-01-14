<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('colegio');
            $table->string('grado');
            $table->string('seccion_primaria');
            $table->string('seccion_secundaria');
            $table->string('docente_tutor');
            $table->string('docente_religion');
            $table->string('cargo');
            $table->string('password', 60);
            $table->string('proyecto_huellas');
            $table->string('proyecto_jmf');
            $table->string('tipo_usuario');
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
        Schema::drop('users');
    }
}
