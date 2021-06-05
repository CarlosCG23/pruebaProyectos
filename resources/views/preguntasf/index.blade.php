
<!-- matematicas -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>StackOverLearn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/CSS.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.botones_respuestas{
  margin-bottom: 20px;
  margin-left: auto;
  margin-right: auto;
}

.respuestas{
  color: black;
}
.titulo{
  color: white;
  text-align: center;
}
h1{
    color: black;
    text-align: center;
    margin-top: 50px;
}
p{
    text-align: left;
    color: white;
}
label{
  color: white;
}
</style>

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
        Foros
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="preguntasm">Matematicas</a>
          <a class="dropdown-item" href="preguntasl">Lengua</a>
          <a class="dropdown-item" href="preguntasf">Física</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profesores">Profesores</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contacto">Contacto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="perfil">Perfil</a>
    </li>
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
      <a class="nav-link" href="chat">Chat</a>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link" href="perfil">Perfil</a>
    </li> -->
</nav>
<!-- barra de navegación fin -->
@section('template_title')
    Preguntas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Preguntas - Foro de física.') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('preguntasf.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva pregunta') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th style="color:black">Título</th>
										<th style="color:black">Descripción</th>
										<th style="color:black">Respuesta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($preguntasfs as $preguntasf)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $preguntasf->titulo }}</td>
											<td>{{ $preguntasf->descripcion }}</td>
											<td>{{ $preguntasf->respuesta }}</td>

                                            <td>
                                                <form action="{{ route('preguntasf.destroy',$preguntasf->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('preguntasf.show',$preguntasf->id) }}"><i class="fa fa-fw fa-eye"></i>Ver pregunta</a>
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $preguntasfs->links() !!}
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
