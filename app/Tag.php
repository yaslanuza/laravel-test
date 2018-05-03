<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $table ="tags"; //atributo+nombre tabla en la bd=migrasion

    //atributo+nomre campo(columna) de la BD a mostrar
    protected $fillable= ["name"];//


    //RElacion, M:M (1 articulo puede tener muchos tag-ir a modelo a definir, 1 tag puede estar en varios articulos.)
     public function articles() // 1 tag puede estar en varios articulos.
    {
        return $this->belongsToMany("App\Article")->withTimesTamps(); //relacion M;M
    } //fin articles


} //fin Tag
