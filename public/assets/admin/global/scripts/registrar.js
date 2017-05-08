function Registro(){
  var nombre = $("#nombre").val();
  var tipo_documento = $("#tipo_documento").val();
  var numero_documento = $("#numero_documento").val();
  var correo = $("#correo").val();
  var telefono = $("#telefono").val();
  var route = "/usuarios";
  var token = $("#token").val();

  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data: {nombre: nombre,
      tipo_documento: tipo_documento,
      numero_documento: numero_documento,
      correo: correo,
      telefono: telefono},

    success:function(){
      toastr["success"]("Usuario Agregado Correctamente");
      $("#form_registrar")[0].reset();

    },
    error:function(msj){
      toastr["error"]("Error al crear el usuario");
    }
  });
}
