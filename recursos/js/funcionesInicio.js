var boton_inicio= document.getElementById("boton_inicio")
var boton_registro_iniciosesion = document.getElementById("boton_registro_iniciosesion")

function inicio_sesion()
{
    var input_correo = document.getElementById("input_correo").value.trim()
    var input_contra = document.getElementById("input_contra").value.trim()

    if(input_correo.length ==0 || input_contra==0) 
    {
        alert("Campos vacios")
    }
    else
    {
       let datos = new FormData()

       datos.append("correo",input_correo)
       datos.append("contra",input_contra)

       console.log(datos)
       let ajax = new XMLHttpRequest()

       ajax.open("POST","controlador/inicio_sesion.php")

       ajax.send(datos)

       ajax.onreadystatechange =function () 
       {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                    let datos = JSON.parse(ajax.responseText)
                    let tipo_u = datos[0].tipo_usuario
                    
                    console.log(tipo_u)
                    if(tipo_u=="EMPLEADO")
                    {
                        window.location.href="empleado"
                    }
                    if(tipo_u=="ADMINISTRADOR")
                    {
                        window.location.href="administrador"
                    }
                    if(tipo_u=="OPERATIVO")
                    {
                        window.location.href="operativo"
                    }
                    
                    if(tipo_u=="EMPRESA")
                    {
                        window.location.href="empresa"
                    }
                }
                if (ajax.status == 400) 
                {
                    console.log("400 El servidor no entendió la petición");
                }
                if (ajax.status == 404)
                {
                    console.log("404 Página no encontrada");
                }
                if (ajax.status == 500) 
                {
                    console.log("500 Error interno de servidor");
                }
            }            
        }
    }
}    





function agregar_peticion_empresa()
{
    
    var input_rfcEmpresa = document.getElementById("input_rfcEmpresa").value.trim()
    var input_nombreEmpresa = document.getElementById("input_nombreEmpresa").value.trim()
    var input_razonsocialEmpresa = document.getElementById("input_razonsocialEmpresa").value.trim()
    var input_domicilioEmpresa = document.getElementById("input_domicilioEmpresa").value.trim()
    var input_numerocalleEmpresa = document.getElementById("input_numerocalleEmpresa").value.trim()
    var input_coloniaEmpresa = document.getElementById("input_coloniaEmpresa").value.trim()
    var input_cpEmpresa = document.getElementById("input_cpEmpresa").value.trim()
    var input_municipioEmpresa = document.getElementById("input_municipioEmpresa").value.trim()
    var input_estadoEmpresa = document.getElementById("input_estadoEmpresa").value.trim()
    var input_telefonoEmpresa = document.getElementById("input_telefonoEmpresa").value.trim()
    var input_correoEmpresa = document.getElementById("input_correoEmpresa").value.trim()
    var input_contrasenaEmpresa = document.getElementById("input_contrasenaEmpresa").value.trim()


    if( 
        input_rfcEmpresa.length ==0 ||
        input_nombreEmpresa.length ==0 ||
        input_razonsocialEmpresa.length ==0 ||
        input_domicilioEmpresa.length ==0 ||
        input_numerocalleEmpresa.length ==0 ||
        input_coloniaEmpresa.length ==0 ||
        input_cpEmpresa.length ==0 ||
        input_municipioEmpresa.length ==0 ||
        input_estadoEmpresa.length ==0 ||
        input_telefonoEmpresa.length ==0 ||
        input_correoEmpresa.length ==0 ||
        input_contrasenaEmpresa.length ==0 
    ) 
    {
        alert("Los campos se encuentran vacio, favor de ingresar todos los datos...")
    }
    else
    {
    let datos = new FormData()

    datos.append("rfcEmpresa",input_rfcEmpresa)
    datos.append("nombreEmpresa",input_nombreEmpresa)
    datos.append("razonsocialEmpresa",input_razonsocialEmpresa)
    datos.append("domicilioEmpresa",input_domicilioEmpresa)
    datos.append("numerocalleEmpresa",input_numerocalleEmpresa)
    datos.append("coloniaEmpresa",input_coloniaEmpresa)
    datos.append("cpEmpresa",input_cpEmpresa)
    datos.append("municipioEmpresa",input_municipioEmpresa)
    datos.append("estadoEmpresa",input_estadoEmpresa)
    datos.append("telefonoEmpresa",input_telefonoEmpresa)
    datos.append("correoEmpresa",input_correoEmpresa)
    datos.append("contrasenaEmpresa",input_contrasenaEmpresa)



    console.log(datos)
    let ajax = new XMLHttpRequest()

    ajax.open("POST","controlador/agregar_empresa_peticion.php")

    ajax.send(datos)

    ajax.onreadystatechange =function () 
    {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    limpiar_formulario_empresas_peticion_login()
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




// boton_inicio.addEventListener("click",inicio_sesion)


let contenedores_login = document.querySelectorAll(".seccion_login")

//INICIO DESPLAZAMIENTO ENTRE Inicio Session
//Ocultar secciones del menu 
function ocultarSeccionesLogin()
{
    for(let i = 0; i<contenedores_login.length;i++)
    {
        contenedores_login[i].style.display="none";
    }
}
//Mostrar secciones del menu 
function mostrarVistaLogin(elemento)
{
    ocultarSeccionesLogin()
    let contenedor = document.getElementById(elemento)
    contenedor.style.display="flex"
}

// mostrarVista(contenedores[0])
//Desplazamiento secciones del menu en pagina principal 
function mostrarSeccionLogin(event)
{    
    let elemento = event.target
    let identificador = elemento.id
    let regexIncioSession = /login/
    let regexRegistrar = /inicioSesion/
    //console.log(identificador)
    if(regexIncioSession.test(identificador))
    {
        // console.log("coincide dashboard")
        let nombre_elemento = "contenedor_formulario_login"
        mostrarVistaLogin(nombre_elemento)
    }
    if(regexRegistrar.test(identificador))
    {
        // console.log("coincide ticket")
        let nombre_elemento = "contenedor_formulario_registrar"
        mostrarVistaLogin(nombre_elemento)
    }
    
}

/////TERMINO DESPLAZAMIENTO ENTRE Inicio Session


function limpiar_formulario_empresas_peticion_login()
{
    let elementos = document.querySelectorAll(".input_text")
    for(let i =0; i<elementos.length;i++)
    {
        elementos[i].value=""
    }
}


