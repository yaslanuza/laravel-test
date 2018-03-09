<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table ="articles";

    protected $fillable= ["title", "content","category_id", "user_id"]; //para este caso no esta de mas traer las llaves foraneas.

    /*Establecer relacion con la clase Category pero a la inversa que en Category usando belongTO*/

    public function category()
    {
    	return $this->belongsTo("App\Category"); //un articulo solo puede tener 1 categorua M:1
    } //fin category

/* ************************************************************************** */
// Relecion con user

    public function user() //rel articulo y usuario. 1 usuario puede publica varios articulos 1:M pero un articulo no puede tener varios usuarios.
    {
    	return $this->belongsTo("App\User");//nombre tabla App/User
    } //fin user

/* ************************************************************************** */
//Rel con images

    public function images() //relacion 1:M con imagenes 1 articulo puede tener varias imagenes
    {
        return $this->hasMany("App\Image");
    } //fin images

/* ************************************************************************** */
//1:M un articulo puede tener muchos tags.
    public function tags() 
    {
        return $this->belongsToMany("App\Tag");
    } //fin tags


}//fin Article
