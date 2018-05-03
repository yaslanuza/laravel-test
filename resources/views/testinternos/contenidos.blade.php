<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css')}}">

	<title>{{$article->title}}</title> <!--se usa para que aparezca el nombre de la página en el navegador: href="css/general" No funciona 
	href="../css/general" tampoco funciona
	con href="/css/general" si funciona pero no es recomendable--> 
</head>
<body>
	Hola, Esta es una prueba de archivos o vistas que se encuentran dentro de una carpeta, la php echo $prueba->title ?>cual puede llamarse index.php, le pondremos, contenidos.blade.php dentro de las vistas.<br>
	Nota1: los archivos publicos, js, css, etc-- se guardan en una carpeta llamada public/ ahi pudes crear una carpeta para tu css.
<br>
	nota2: se usa para que aparezca el nombre de la página en el navegador: href="css/general" No funciona 
	href="../css/general" tampoco funciona<br>
	con href="/css/general" si funciona pero no es recomendable, ya que es complicado por que hay que ir a la raíz del proyecto. <br>
	<br>Para ello laravel, usa <strong>Asset</strong> El cual nos permite que el fichero se cargue desde cualquier lado sin importal la ruta. Es util por si debemos mover el fichero a otra carpeta. De la siguente forma en el llamado: href="{{ asset('css/general.css')}}"
	<br>
	<br>
	//dd($prueba); <br>
	##########################################################<br>
	

 <!--< php echo $prueba->title ?>  //muestra el titulo de un articulo, pero no es la formas correcta para esto blade simplica con el siguiente codigo. -->

/*<!--tambien se podrian agregar los @ include, @ section, @ yleid, @ extend todas de blade -->*/

<br>
Mostrar datos: 


{{$article->title }} <!-- las dobles llaves funcional similar al echo de php -->
<br> {{"imprimendo con for"}} 
<!-- otros ejemplos de uso de blade con for e if. imprime del 0 al 5-->
	@for ($i=0;$i<=5;$i++)
		{{$i}}
	@endfor

<br> {{"imprimendo con if"}} 
	@if (1==1)
	{{"Es igual a: 1"}} 
	@endif
<br>
###############################################
<br>Clase 11. Ir a la carpeta resourse/view y crear una nueva carpeta llamada "Admin" Para dividir las vistas del panel de administracion y la de usuario.  Iniciaremos creando un panel de control para la administracion del sitio. <br>

	Dentro de la carpeta admin, crearemos otra llamada <strong>template</strong> y dentro de ella un fichero con extencion .blade.php que se llamara <strong>main.blade.php</strong>
</body>
</html>


