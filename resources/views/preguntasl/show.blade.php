@extends('layouts.app')

@section('template_title')
    {{ $preguntasl->name ?? 'Show Preguntasl' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar preguntas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preguntasl.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $preguntasl->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $preguntasl->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Respuesta:</strong>
                            {{ $preguntasl->respuesta }}
                        </div>

                    </div>
                    <a class="btn btn-sm btn-success" href="{{ route('preguntasl.edit',$preguntasl->id) }}"><i class="fa fa-fw fa-edit"></i> Responder</a>

                </div>
            </div>
        </div>
    </section>
@endsection

