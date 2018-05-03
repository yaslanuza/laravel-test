<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class TestController extends Controller
{

  public function view($id)
  {

  	$article=Article::find("$id");
  	//mostrar todo el recorrido y relaciones
  	// se se usa esta funcion si se tiene varios registro, en nuestro caso solo hay 1. $article->each(function("$article"){
  		//se llama a las funciones que estan en Article.php que hacen las realciones en el modelo.
  		$article->category;//se llama a la funcion del modelo en artcle.
  		$article->user;
  		$article->tag;

  	//}); // fin article-each.
  	//dd($article); //carga completo del contenido de la vista.
      //dd($id);//
      //opcion 1 de como mostrar la vista en el controlador 
      //return view('testinternos.contenidos'); // vista pasada al controlador
      //return view('testinternos.contenidos',['prueba'=> $article]);
      return view('testinternos.contenidos',['article'=> $article]);
   }

}
