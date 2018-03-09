<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//el nombre de esta clase es usando camelnode osea Mayuscula la primera letra y debe ser igual al nombre del modelo pero en singular
/* *Las relaciones de las tablas tambien se definen en esta pagina del modelo.
	*Recordar primero crear el modelo desde la consola de artisan*/
class Category extends Model
{
    //atributo+nombre tabla en la bd=migrasion
    protected $table ="categories";

/* *Los campos fillabe son los permitidos para mostrar objetos json, cuando se trae un dato y que campo se quiere mostrar*/
			  //atributo+nomre campo(columna) de la BD a mostrar
    protected $fillable= ["name"];

/*Establerecermos una relacion de modelos entre los modelos o clases category y article de 1:M,
hay que poner la relacion de las funciones dentro de cada modelo.

Se recomienda que el nombre sea en plural 
Una categoria puede tener varios articulos, pero un articulo solo puede tener una categoria. */

public function articles ()  //se establece la relacion con el modelo, no recibe parametro
{
return $this->hasMany("App\Article"); //se retorna el tipo de relacion 1.M y el nombre del modelo o clase 
//esto del lado de categoria, hay que establecerla del lado de article igual a la inversa.
}  //fin fun articles



} //fin class Category
