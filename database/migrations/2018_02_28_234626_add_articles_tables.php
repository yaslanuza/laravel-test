<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticlesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title",160);
            $table->text("content");
            //se agregan ahora las llaves foraneas
            //user_id es el nombre de la columna en esta tabla
            $table->integer("user_id")->unsigned();  //se debe poner para indicar que es llave foranea.
            $table->integer("category_id")->unsigned();  //se debe poner para indicar que es llave foranea.    

    //ahora debe establecerse la refencia, ponersele la referencia de las columnas con la bd de tipo foreign con nombre de la columna+nombre tabla
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            

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
        Schema::dropIfExists('articles');
    }
}
