<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="{{ asset('plugins/miplantilla-boots/css/bootstrap.css') }}">  <!-- vincular el css personalidado que se encuentra en la ruta de mi plantilla personalizada usando asset -->
	<link rel="stylesheet"  href="{{ asset('plugins/miplantilla-boots/css/estilos.css') }}">

	<title>@yield("title", "Default") | Mi Panel de administración </title> <!-- titulo que se mostrara en la barra de navegación -->
</head>
<body>
	@include("admin.template.partials.header")
		

	

	<section> 
		@yield("content")
		<p>NOta de clase 11: Dentro de la etiquita <strong>title</strong> vamos a crear seccion o etiqutas llamadas yeil, las cuales crean secciones dentro de nuestra plantialla, vacias para luego rellenarlas desde el archivo o desde la vista donde esten siendo usadas, en nuestro caso en la vistal welcome.blade.php  </p>
		<br>
		Procederemos a estructurar nuestro sitio web, segun nuestro diseño básico: header.php. aside.php, estilos.php, footer.php, index.php, main-articles.php, meta-datos.php, migas.php, paginacion.php, quienes.php, scripts.php, <strong>Estas deben tener la extencion del nombre del fichero.blade.php</strong>

		<br>
		1. El primer paso es crear el primer fichero, llamado header.blade.php, el cual contendra el header de la plantilla y su contenido principal del banner, menus de navegacion y jumbotron. <br>
		2. en el archivo principal de la plantilla index o mejor dicho <strong>main.blade.php</strong> llamaremos el fichero header.blade.php usando <strong>@ include</strong> con su ruta completa dentro de la vista. <br>
	</section><br>


 <!-- ###################################################### -->

 	@include ("admin.template.partials.footer")

<!-- el jqyuere debe ir antes del bootstrap.min / "{{ asset('plugins/miplantilla-boots/css/bootstrap.css') }}"-->
 	<script src="{{ asset('plugins/miplantilla-boots/js/jquery.js')}}"></script>
 	<script src="{{ asset('plugins/miplantilla-boots/js/bootstrap.min.js')}}"></script>
		
</body>
</html>