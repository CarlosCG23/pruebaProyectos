@extends('layouts.app')

@section('template_title')
    Respuesta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Respuesta a la pregunta.</span>
                        <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('preguntasm.index') }}">Atrás</a>
                    </div>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('preguntasm.update', $preguntasm->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('preguntasm.formedit')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
