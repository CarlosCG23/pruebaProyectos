@extends('layouts.app')

@section('template_title')
    Create Preguntasl
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header" style="text-align:center">
                        <span class="card-title" >Nueva pregunta para el foro.</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preguntasl.index') }}"> Atrás</a>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <form method="POST" action="{{ route('preguntasl.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('preguntasl.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

