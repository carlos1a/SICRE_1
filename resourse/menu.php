<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../usuario/inicio.php"><i>SICRE</i></a>
  </div>

  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Usuario <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="../usuario/registrar_usuario.php">Registrar Usuario</a></li>
          <li><a href="../usuario/consultar_usuario.php">Consultar Usuarios</a></li>
           <li><a href="../usuario/buscar_usuario.php">Buscar Usuario</a></li>
          <li><a href="#">Modificar Usuario</a></li>
          <li><a href="#">Bloquear Usuario</a></li>
        </ul>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Inventario <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="../inventario/registrar_equipo.php">Registrar Equipo</a></li>
          <li><a href="#">Consultar Inventario</a></li>
          <li><a href="#">Consultar Asignados</a></li>
          <li class="divider"></li>
          <li><a href="#">Asignar Equipo</a></li>
          <li><a href="#">Cambio de Equipos</a></li>
          <li class="divider"></li>
          <li><a href="#">Reasignar Equipos</a></li>
        </ul>
      </li>
     <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Fallas <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Reportar Falla</a></li>
          <li><a href="#">Consultar Caso</a></li>

        </ul>
      </li>
      <li><a href="#">Solicitud de Equipos</a></li>

       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Asignacion de Tareas <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Nueva Tarea</a></li>
          <li><a href="#">Consultar Tarea</a></li>
          <li><a href="#">Eliminar Tarea</a></li>
        </ul>
      </li>

    </ul>

    <!--<form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>-->

    <ul class="nav navbar-nav navbar-right">

    <li><a href="#">Contacto</a></li>
    <li><a href="../../index.php">Salir</a></li>

    </ul>
  </div>
</nav>