<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

| Archivo de rutas ejemplo raiz/ o el resto /registro etc..
|
put si vamos aditar cateria o articulo
*/

Route::get('/', function () {
    return view('welcome'); //vista del archivo welcom.blade.pho en /resours/view/welcom.blade.php
});
Route::get('/testinternos', function () {
    return view('testinternos.contenidos'); //vista del archivo contenidos.blade.php en punto (.) funciona igual que un bleca /
});

Route::group(["prefix" =>"articles"], function(){

	Route::get("view/{id}",[
		
		"uses" => "TestController@view", //llama al metodo en TestController.php
		"as" => "articlesView" 
		
	]); //fin get
 	
}); //fin group

/*Route::get('articles', function () {
 echo 'Esta es la seccion Para ruta de articulos'; //'Esta es la seccion Para ruta de articulos poner en pantalla: /articles
}); */

//puede recibir parametro como nombre 
/*Route::get('articles/{nombre}', function ($nombre) {
 echo 'hola tu nombre es: ' .$nombre; //'Esta es la seccion Para ruta de articulos poner en pantalla: /articles
}); */

// tambien se le puede pasar un valor por defecto de la siguiente manera
/*
Route::get('articles/{nombre?}', function ($nombre="No colocaste nombre") {
 echo 'hola tu nombre es: ' .$nombre; //'Esta es la seccion Para ruta de articulos poner en pantalla: /articles
});
/*

/*Tambien se le podria poner nombre a las rutas, se recomienda que sea igual al nombre de ruta, para ello se crea dentro de un arregleo Ejemplo:*/
/*
Route:: get("articles", [
	"as" =>"articles", //nombre ruta
	"uses" =>"UserControlloer@view" //para indicar que esta ruta usa un controlador si se esta trabajando con ella, mas el metodo view o index despues del arroba.
	]); 
*/