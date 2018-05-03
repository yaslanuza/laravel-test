@extends('admin.template.main') <!-- importa desde la vista-->
<!--i mporta desde la vista main.php funcianan como estilo de include -->
@section("title") 
Control Panel 
@endsection

@section("content")
	<h1>Hola mundo</h1>
	<p>Muestra uno de un boton, para este primer ejemplo el enlace no se muestra con el estilo de bootstrab, ya que aun no se a 	aplicado la clase <strong>@ extends</strong> con la ruta de 	origen</p>
	<a href="" class="btn btn-success">Soy un boton de sin estilo 	bootstrab</a><br><br> o bien <a href="">soy un boton simple </a>
	<p>En este segundo ejemplo si se vizualizara el boton una vez 	agregado la clase <strong>@ extends </strong>al inicio del 	archivo welcom.blade.php</p><br>
	<a href="" class="btn btn-primary">boton con estilo bootstrab </a> <br>
	tercera clase
@endsection