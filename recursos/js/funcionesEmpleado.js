var boton_agrega_empleado = document.getElementById("boton_agrega_empleado")

function agregar_empleado()
{
    
    var input_nombre_empleado = document.getElementById("input_nombre_empleado").value.trim()
    var input_apellidoP_empleado = document.getElementById("input_apellidoP_empleado").value.trim()
    var input_apellidoM_empleado = document.getElementById("input_apellidoM_empleado").value.trim()
    var input_domicilo_empleado = document.getElementById("input_domicilo_empleado").value.trim()
    var input_numero_exterior_empleado = document.getElementById("input_numero_exterior_empleado").value.trim()
    var input_colonia_empleado = document.getElementById("input_colonia_empleado").value.trim()
    var input_telefono_empleado = document.getElementById("input_telefono_empleado").value.trim()
    var input_puesto_empleado = document.getElementById("input_puesto_empleado").value.trim()
    var input_correo_empleado = document.getElementById("input_correo_empleado").value.trim()
    var input_contrasena_empleado = document.getElementById("input_contrasena_empleado").value.trim()


    if( input_nombre_empleado.length==0 || 
        input_apellidoP_empleado.length ==0 || 
        input_apellidoM_empleado.length==0 || 
        input_domicilo_empleado.length==0 || 
        input_numero_exterior_empleado.length==0 || 
        input_colonia_empleado.length==0 || 
        input_telefono_empleado.length==0 ||  
        input_puesto_empleado.length==0 ||
        input_correo_empleado.length==0 ||
        input_contrasena_empleado.length==0) 
    {
        alert("Los campos se encuentran vacio, favor de ingresar todos los datos...")
    }
    else
    {
       let datos = new FormData()

       datos.append("nombreEmpleado",input_nombre_empleado)
       datos.append("apellidopEmpleado",input_apellidoP_empleado)
       datos.append("apellidomEmpleado",input_apellidoM_empleado)
       datos.append("domicilioEmpleado",input_domicilo_empleado)
       datos.append("numeroextEmpleado",input_numero_exterior_empleado)
       datos.append("coloniaEmpleado",input_colonia_empleado)
       datos.append("telefonoEmpleado",input_telefono_empleado)
       datos.append("puestoEmpleado",input_puesto_empleado)
       datos.append("correoEmpleado",input_correo_empleado)
       datos.append("contrasenaEmpleado",input_contrasena_empleado)


       console.log(datos)
       let ajax = new XMLHttpRequest()

       ajax.open("POST","../controlador/agregar_empleado.php")

       ajax.send(datos)

       ajax.onreadystatechange =function () 
       {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                }
                if (ajax.status == 400) 
                {
                    console.log("400 El servidor no entendió la petición");
                }
                if (ajax.status == 404)
                {
                    console.log("404 Página no encontrada");
                }
                if (ajax.status == 500) {
                    console.log("500 Error interno de servidor");
                }
            }            
        }
    }
}
