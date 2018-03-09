<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table ="images"; //atributo+nombre tabla en la bd=migrasion

    //atributo+nomre campo(columna) de la BD a mostrar
    protected $fillable= ["name","article_id"];

/* ************************************************************************** */


     public function article() //relacion 1:M con imagenes 1 articulo puede tener varias imagenes
    {
    	return $this->belongsTo("App\Article");
    } //fin images





} //fin class Images

