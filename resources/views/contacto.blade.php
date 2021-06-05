@extends('layouts.app')

<!-- contacto -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>StackOverLearn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/CSS.css">
  
</head>
<body>

<!-- barra de navegación para el escalado -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
    <!-- <li class="nav-item">
      <a class="nav-link" href="profesores">Profesores</a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="contacto">Contacto</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="perfil">Perfil</a>
    </li> -->
</nav>
<!-- barra de navegación fin -->

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
    <!-- <li class="nav-item">
      <a class="nav-link" href="profesores">Profesores</a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="contacto">Contacto</a>
    </li>
    
    <!-- <li class="nav-item">
      <a class="nav-link" href="perfil">Perfil</a>
    </li> -->
</nav>
<!-- barra de navegación fin -->

<!-- formulario -->
<div class="container">
  <div class="jumbotron" style="background-color: rgba(4, 97, 135, 0.8)">
    
    <hr>
    <!-- datos personales  -->
    	<!-- datos personales  -->
    	<h1>Datos Personales</h1>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <img src="multimedia/imagenes/carlos.png" style="max-width: 96.3%">
          <p>Nombre: Carlos</p>
          <p>Apellidos: Castillo González</p>
          <p>Email: carlos.castillog7@gmail.com</p>
          <p>Teléfono: 673055072</p>
        </div>
        <div class="col-sm">
          <img src="multimedia/imagenes/guisado.png" style="max-width: 100%">
          <p>Nombre: Álvaro</p>
          <p>Apellidos: Guisado García</p>
          <p>Email: aguisado.ufv@gmail.com</p>
          <p>Teléfono: 622552649</p>
        </div>
        <div class="col-sm">
          <img src="multimedia/imagenes/ortiz.png" style="max-width: 100%">
          <p>Nombre: Álvaro</p>
          <p>Apellidos: Ortiz Ballesteros</p>
          <p>Email: xzitrox222@gmail.com</p>
          <p>Teléfono: 648801269</p>
        </div>
        <div class="col-sm">
          <img src="multimedia/imagenes/jato.png" style="max-width: 100%">
          <p>Nombre: Javier</p>
          <p>Apellidos: Torres Solis</p>
          <p>Email: javi31498@gmail.com</p>
          <p>Teléfono: 606264989</p>
        </div>
        <div class="col-sm">
          <img src="multimedia/imagenes/marcos.png" style="max-width: 100%">
          <p>Nombre: Marcos</p>
          <p>Apellidos: Zotes Calleja</p>
          <p>Email: mzotesc@outlook.com</p>
          <p>Teléfono: 671958158</p>
        </div>
      </div>
    </div>
  </div> <!-- fin jumbotron -->
</div> <!-- fin container -->
<div class="row h-full">
  <div class="col-8 offset-2 col-lg-8 offset-lg-2 align-self-center espacio">
    <div class="gameplay">
      <iframe width="20%" height="20%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.5359842141606!2d-3.836747784350537!3d40.44127256206987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4185cfe04a3987%3A0x50d6db0ba10cb305!2sUniversidad%20Francisco%20de%20Vitoria!5e0!3m2!1ses!2ses!4v1620214878667!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
    </div>
  </div>
</div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


</body>
</html>


