function Eliminar(id){
  var route = "/usuarios/"+id.value+"";
  var token = $("#token").val();

  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'DELETE',
    dataType: 'json',
    success: function(){
          toastr["success"]("Usuario Eliminado Correctamente");
          location.reload(true);
    }
  });
}


function Mostrar(id){
//  console.log(id.value);
  var route = "/usuarios/"+id.value+"/edit";

  $.get(route,function(res){
    $("#nombre").val(res.nombre);
    $("#tipo_documento").val(res.tipo_ident);
    $("#numero_documento").val(res.num_ident);
    $("#correo").val(res.email);
    $("#telefono").val(res.telefono);
    $("#id").val(res.id);
  });
}
function Actualizar(){
  var valor = $("#id").val();
  var nombre = $("#nombre").val();
  var tipo_documento = $("#tipo_documento").val();
  var numero_documento = $("#numero_documento").val();
  var correo = $("#correo").val();
  var telefono = $("#telefono").val();
  var route = "/usuarios/"+valor+"";
  var token = $("#token").val();

  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType: 'json',
    data: {nombre: nombre,
      tipo_documento: tipo_documento,
      numero_documento: numero_documento,
      correo: correo,
      telefono: telefono},
      success: function(){
            toastr["success"]("Usuario Actualizado Correctamente");
            location.reload(true);
      },
      error:function(msj){
        toastr["error"]("Error al actualizar el usuario");
      }
  });
}
