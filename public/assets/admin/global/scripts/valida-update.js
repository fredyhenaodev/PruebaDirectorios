var FormValidation = function () {

    // basic validation
    var handleValidation1 = function() {
        // for more info visit the official plugin documentation:
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#form-actualizar');
            var error1 = $('.alert-danger', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    nombre: {
                      maxlength:"Maximo 40 Caracteres",
                      required: "Campo Requerido"
                    },
                    tipo_documento: {
                        required: "Campo Requerido"
                    },
                    numero_documento: {
                        maxlength:"Maximo 15 Caracteres",
                        required: "Campo Requerido",
                        number: "Solo Debe Contener Numeros"
                    },
                    correo: {
                        required: "Campo Requerido",
                        email: "ejemplo@ejemplo.com"
                    },
                    telefono: {
                        maxlength:"Maximo 10 Caracteres",
                        required: "Campo Requerido"
                    }
                },
                rules: {
                    nombre: {
                      maxlength:40,
                        required: true
                    },
                    tipo_documento: {
                        required: true
                    },
                    numero_documento: {
                        maxlength: 15,
                        required: true,
                        number: true
                    },
                    correo: {
                        required: true,
                        email: true
                    },
                    telefono: {
                        maxlength: 10,
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var cont = $(element).parent('.input-group');
                    if (cont.size() > 0) {
                        cont.after(error);
                    } else {
                        element.after(error);
                    }
                },

                highlight: function (element) { // hightlight error inputs

                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    Actualizar();
                    success1.show();
                    error1.hide();
                }
            });


    }
    var handleWysihtml5 = function() {
        if (!jQuery().wysihtml5) {

            return;
        }

        if ($('.wysihtml5').size() > 0) {
            $('.wysihtml5').wysihtml5({
                "stylesheets": ["../assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
            });
        }
    }

    return {
        //main function to initiate the module
        init: function () {

            handleWysihtml5();
            handleValidation1();

        }

    };

}();



$( "form" ).submit(function( event ) {
  event.preventDefault();
});

jQuery(document).ready(function() {
    FormValidation.init();
});
