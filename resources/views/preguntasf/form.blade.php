<div class="box box-info padding-1">

    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $preguntasf->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo de la pregunta']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $preguntasf->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion de la pregunta']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group" style = "display:none">
            {{ Form::label('respuesta') }}
            {{ Form::text('respuesta', $preguntasf->respuesta='Sin responder', ['class' => 'form-control' . ($errors->has('respuesta') ? ' is-invalid' : ''), 'placeholder' => 'respuesta de la pregunta']) }}
            {!! $errors->first('respuesta', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar pregunta</button>
    </div>
</div>