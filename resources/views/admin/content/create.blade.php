@push('functions-css')
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
<h1 class="page-title"> Crear Usuario
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
            <span>Crear</span>
        </li>
    </ul>
    <div class="page-toolbar">
    </div>
</div>
<div class="note note-info">
<div class="row">
  <div class="col col-md-8">

<!-- END PAGE HEADER-->
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
@push('functions')
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.js') }}" type="text/javascript"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/global/scripts/valida-forms.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/global/scripts/registrar.js') }}" type="text/javascript"></script>
@endpush
