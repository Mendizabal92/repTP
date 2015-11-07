//entra en el ready cuando se ha cargado todo el dom
$(document).ready(function(){
     //evento change del input file
    document.getElementById("fichero").addEventListener('change', cargar, false);
    
    $("#mensaje").hide();
    //Validacion del formulario
    $("#frmRegistro").validate({
    	event: "blur",
        rules: 
        {
            'nombre': "required",           
            'correo': {required: true,  correo: true},           
            'pass': "required",
            'fichero': "required"
        },
    	messages: 
        {
            'nombre': "<span class='error1'>Ingresa tu nombre</span>",           
            'correo':{required: "<span class='error1'>Ingresa tu email</span>", correo: "<span class='error1'>Por favor, indica una dirección de email válida</span>"},           
            'pass': "<span class='error1'>Ingresa tu password supersecreta</span>",            
            'fichero': "<span class='error1'>Selecciona una imagen copada</span>"
            
        },
    	debug: true,
        errorElement: "label",
    	submitHandler: function(form){
    	    var envio = new FormData();
    	    var files = $("#fichero").get(0).files; // $("#fichero") slector por id de jquery 
            envio.append("correo", $("#correo").val());
            envio.append("clave", $("#clave").val());
            envio.append("nombre", $("#nombre").val());

            for (var i = 0; i < files.length; i++) {
            envio.append("fichero0", files[i]);
            }
           // alert("antes de ajax");
    		var miAjax = $.ajax({
    			type: "POST",
    			url:"validarNuevoUsuario.php",
    			contentType: false,
    		    processData: false,
    			data: envio,
    		});
    		miAjax.done(function(msg){
                    
                    msg = msg.trim();

                    if(msg=="Admin")
                    {
                        window.location.href = "indexAdmin.html";
                    }
                    else
                    {
                        window.location.href = "indexUsuario.html";
                    }

                    /*    
    		        var strIndex = msg.indexOf('Error');
                    if(strIndex == -1) {
                        //string no encontrado
        		        $("#mensaje").html(msg + "<br><strong>Gracias por registrarte, bienvenido!</strong>");
        		        $("#mensaje").show();
    					document.getElementById("nombre").value="";      				
        				document.getElementById("correo").value="";
        				
        				document.getElementById("pass").value="";
        				
        				document.getElementById("fichero").value="";
        				setTimeout(function() {
        				    $('#mensaje').fadeOut('fast');
        				    window.location.href="menu.php";
        				    
        				}, 2500);
                    }
                   else
                    {
                        alert(msg);
                    }
                    */
    			});//fin done
    	    }
    });
});

function cargar(){
    var files = $("#fichero").get(0).files; // $("#fichero") slector por id de jquery  
    var envio = new FormData();
    for (var i = 0; i < files.length; i++) {
    envio.append("fichero0", files[i]);
    }
    var promise = $.ajax
            ({
            type: "POST",
            url: "validarFoto.php",
            contentType: false,
    		processData: false,
            data: envio,
            cache: false,
            dataType: "text"
          });// fin del ajax
            
    // la funcion Ajax me devuelve una promesa de javascript, algo que va a hacerse. Cuando el servidor responde y si la respuesta del servidor es exitosa ingresa al done y ejecuta la función que se le pasa
    promise.done(function (dato){ 
                    $('#error').hide();
                    console.log(dato);
                    var strIndex = dato.indexOf('Error');
                    if(strIndex == -1) {
                        //string no encontrado
                        $('#imagen').attr("src", "FotosTemp/" + files[0].name);
                         $('#error').html("");
                    } else {
                        //string encontrado
                        $('#error').html(dato);
                        $('#error').show();
                        $('#imagen').attr("src", "");
                        $('#fichero').val("");
                    }
                       
    });

}