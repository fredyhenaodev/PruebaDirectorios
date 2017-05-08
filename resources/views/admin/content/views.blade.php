@push('functions-css')
    <link href="{{ asset('https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
<h1 class="page-title">Usuarios
</h1>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Usuario</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Listar</span>
        </li>
    </ul>
    <div class="page-toolbar">
    </div>
</div>
{!! Form:: hidden('delete', csrf_token(), ['id' => 'token', 'class' => 'form-control']) !!}
{!! Form::open(['url' => '#', 'method' => 'POST', 'class' => 'form-horizonta', 'id' => 'form-control', 'files' => true])!!}
  <table class="table table-hover" id="tabla-datos">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Tipo Documento</th>
          <th>numero documento</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Fecha Creación</th>
          <th>Fecha Actualización</th>
          <th>Modificar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
        <tbody >
          @foreach($usuarios as $usuarios)
            <tr>
              <td>{{$usuarios->nombre}}</td>
              <td>{{$usuarios->tipo_ident}}</td>
              <td>{{$usuarios->num_ident}}</td>
              <td>{{$usuarios->email}}</td>
              <td>{{$usuarios->telefono}}</td>
              <td>{{$usuarios->created_at}}</td>
              <td>{{$usuarios->updated_at}}</td>
              <td>
                <button class='btn btn-primary' value="{{$usuarios->id}}" OnClick='Mostrar(this);' data-toggle='modal' data-target='#myModal'>Editar</button>
              </td>
              <td>
                <button class='btn btn-danger'  value="{{$usuarios->id}}" OnClick='Eliminar(this);'>Eliminar</button>
              </td>
          </tr>
          @endforeach
        </tbody>

  </table>
  {!! Form::close() !!}

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Usuario</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="id">
      {!! Form::open(['url' => '#', 'method' => 'POST', 'class' => 'form-horizonta', 'id' => 'form-actualizar', 'files' => true])!!}
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

                {!! Form::submit('Actualizar',['class' => 'btn btn-primary center-block']) !!}

            {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>

@push('functions')
    <script src="{{ asset('https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.js') }}" type="text/javascript"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/global/scripts/usuario.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/global/scripts/valida-update.js') }}" type="text/javascript"></script>
@endpush
