<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //nombre del tags
            $table->timestamps();
        });
   
        // fusion de tablas Articles y Tags en laravel se defen definir en singular de las 2 tablas q se van a relacionar, nombre de tabla pivote.
         // Articles & Tags = articles & tags = article_tag

        Schema::create('article_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();//se debe poner para indicar que es llave foranea. 
            $table->integer('tag_id')->unsigned();

            //establecer las refencias
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('tag_id')->references('id')->on('tags');

            $table->timestamps();
        }); //fin shema:: article_tag

    } //fin class up
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }

// fin class AddTagsTables
} 
