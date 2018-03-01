<?php
//clases bluprint y migrations
use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum ("type",["member", "admin"])->dafaul("member"); 
            //poner por defecto categ miembro al crear nuevo user.
            $table->rememberToken(); //por defecto de laravel
            $table->timestamps(); //por defecto de laravel para poner hora y fecha de creacion de usuarios
        });
    }

    /**
     * Reverse the migrations.
     *Cuando se esta reiniciando las migraciones
     * @return void
     */
    public function down() 
    {
        Schema::dropIfExists('users'); //boorando user para volver a ejecutar la funcion uo
    }
}
