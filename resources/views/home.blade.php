@extends('layouts.app') 

<!-- index -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>StackOverLearn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" href="css/CSS.css">
 
<style>
  .jumbotron{
	margin-top: 5%;
	background-color: rgba(4, 97, 135, 0.8);
}
</style>

</head>
<body>

<!-- barra de navegación -->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top justify-content-center">
  <!-- Brand/logo -->
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home">Inicio</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Foro
      </a>
     
      <div class="dropdown-menu">
          <a class="dropdown-item" href="preguntasm">Matematicas</a>
          <a class="dropdown-item" href="preguntasl">Lengua</a>
          <a class="dropdown-item" href="preguntasf">Física</a>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="contacto">Contacto</a>
    </li>
  <!--  <li class="nav-item">
      <a class="nav-link" href="perfil">Perfil</a>
    </li>-->
    
</nav>
<!-- barra de navegación fin -->



<!-- trayectoria ubisoft  -->
<div class="container" id="carlos">
  <div class="jumbotron" style="background-color: rgba(4, 97, 135, 0.8)">
    <h1>StackOverLearn</h1>
  </div> <!-- fin jumbotron -->

<!-- carousel --> 
<div id="demo" class="carousel slide center-block" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">         
      <img src="multimedia/imagenes/Estudio1.jpg" alt="ubisoft">
      <div class="carousel-caption">
        <h3>Consigue lo que te propongas</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="multimedia/imagenes/Estudio2.jpg" alt="valhalla">
      <div class="carousel-caption">
        <h3>Crea un espacio de estudio</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="multimedia/imagenes/Profesor.jpg" alt="pelicula">
      <div class="carousel-caption">
        <h3>Profesores especializados</h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- carousel fin -->
  <div class="jumbotron" style="background-color: rgba(4, 97, 135, 0.8)">
  	<p>Nuestro producto ofrece un servicio, a modo de red social, que permite a sus usuarios buscar y ponerse en contacto con otras personas para ofrecer un servicio educativo, además de ofrecer un espacio para compartir conocimiento.</p>
    <p>Nuestro producto les ofrece tanto a alumnos como profesores un espacio donde
pueden ayudarse mutuamente. De esta forma, los alumnos que necesitan ayuda en sus estudios pueden
encontrarla en nuestra página y a su vez se incentiva una dinámica de aprendizaje y
beneficio mutuo.</p>
    <p>Si quiere recibir noticias, avisos y diversas notificaciones, no dude en registrarse para formar parte de esta gran familia!. Para registrarse, clicke en el banner de Usuarios para mas información</p>
    <p>Atentamente, equipo de StackOverLearn</p>
  </div>
</div> <!-- fin container -->

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>