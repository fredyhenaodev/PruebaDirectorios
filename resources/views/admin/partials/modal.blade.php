<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Actualizar Genero</h4>
    </div>
    <div class="modal-body">

      {!! Form:: hidden('create', csrf_token(), ['id' => 'token', 'class' => 'form-control']) !!}
      {!! Form::open(['route' => 'usuarios.store','method' => 'POST', 'class' => 'form-horizonta', 'id' => 'form_registrar', 'files' => true]) !!}
              <div class="form-group">
                {!! Form::label('Nombre:') !!}
                {!! Form::text('nombre',null,['class' => 'form-control','id' => 'nombre','placeholder' => 'Nombre']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('Tipo de Documento:') !!}
                {!! Form::select('tipo_documento',[
                  'Cedula Ciudadania' => 'Cedula Ciudadania','Tarjeta Identidad' => 'Tarjeta Identidad','Pasaporte' => 'Pasaporte'
                ], null, ['class' => 'form-control','id' => 'tipo_documento',]);!!}
              </div>
              <div class="form-group">
                {!! Form::label('Numero de Documento:') !!}
                {!! Form::number('numero_documento',null,['class' => 'form-control','id' => 'numero_documento','placeholder' => 'Numero de Documento']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('Correo:') !!}
                {!! Form::email('correo',null,['class' => 'form-control','id' => 'correo','placeholder' => 'Correo']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('Telefono:') !!}
                {!! Form::text('telefono',null,['class' => 'form-control','id '=> 'telefono','placeholder' => 'Telefono']) !!}
              </div>

              {!! Form::submit('Registrar',['class' => 'btn btn-primary center-block']) !!}

          {!! Form::close() !!}
    </div>
  </div>
</div>
</div>
