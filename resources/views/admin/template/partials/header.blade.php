<header>
  <!-- Aca se agrega un nav para poder crear el menu de navegacion de la página -->
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">

      <div class="container">
            <div class="navbar-header"><!-- boton para mostrar y ocultar el menú en dispositivos móviles -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-geo" aria-expended="false" aria-controls="navbar">
                  <span class="sr-only">Desplegar / Ocultar menu</span><!-- se vera solo para dispositivos moviles -->
                  <span class="icon-bar"></span> <!-- se triplica class="icon-bar" -->
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- <a href="#" class="navbar-brand">Principal</a> -->
            </div>
            <!-- inicia menu top -->

            <div class="collapse navbar-collapse" id="navegacion-geo">

                <ul class="nav navbar-nav"><!-- inicio lista menu top -->
                    <li class="active"><a href="#">Inicio</a></li>
                    <li><a href="#">¿Quiénes Somos?</a></li>               
                    <li class="dropdown"><!-- inicio de clase para desplegar submenus -->
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expended="false">Sub-Menú Materias<span class="caret"></span></a><!-- inicio menu desplegable sub menu -->
                      <ul class="dropdown-menu" role="menu"> <!-- elementos dentro del submenu -->
                        <li><a href="#">Página 1</a></li>
                        <!-- <li role="separator" class="divider"></li> -->
                        <li><a href="#">-Sociales</a></li>
                        <li><a href="#">-Español</a></li>
                        <li><a href="#">-Matemáticas</a></li>
                        <li><a href="#">-Ciencías</a></li>
                        <li><a href="#">-Física</a></li>
                        <li><a href="#">-Geología</a></li>
                        <li><a href="#">-Practicas</a></li>
                      </ul>   <!-- fin elementos dentro del submenu -->

                    </li>  <!-- fin de clase para desplegar submenus -->

                    <li><a href="#">Nuestro Trabajo</a></li>
                    <li><a href="#">Contacto </a></li>
                </ul><!-- fin lista menu top -->    

                <!-- inicio de formulario de busqueda ubicado al lado derecho de topmenu -->
                <form action="" class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                        <input type="text" name="buscar" class="form-control" placeholder="buscar">                    
                  </div>

                  <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>

                 
                </form>

            </div>
     
    </div><!-- centra el contenido respecto al navegador -->

  </nav>

  </header>