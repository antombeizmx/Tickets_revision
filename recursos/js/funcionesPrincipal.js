// ########################################################
// ignorar este fragmento de codigo hasta nuevo aviso
// ########################################################
// console.log(contenedores)
// class Ajax {
//     constructor(url, metodo, data) {
//         this.respuesta;
//         this.url = url;
//         this.data = data;
//         this.metodo = metodo;

//         let metodo_final = this.metodo.toUpperCase();
//         var ajax = new XMLHttpRequest();
//         ajax.open(metodo_final, this.url);
//         // ajax.setRequestHeader('content-type','application/x-www-form-urlencoded');
//         ajax.send(this.data);   
//         ajax.onreadystatechange = function () {
//             if (ajax.readyState == 4) {
//                 if (ajax.status == 200) {
//                     console.log("200 Respuesta Exitosa");
//                     this.respuesta = ajax.responseText
//                 }
//                 if (ajax.status == 400) {
//                     console.log("400 El servidor no entendió la petición");
//                 }
//                 if (ajax.status == 404) {
//                     console.log("404 Página no encontrada");
//                 }
//                 if (ajax.status == 500) {
//                     console.log("500 Error interno de servidor");
//                 }
//             }
//             else {
//                 console.log("conectando...");
//             }
//         };
//         this.listo = function ()
//         {
//             console.log( this.respuesta)
//             return this.respuesta
//         }
//     }   
// }

// ########################################################
// ignorar este fragmento de codigo hasta nuevo aviso
// ########################################################


var navegador = window.navigator.vendor || window.navigator.userAgent


window.onload= function()
{
    if(navegador.includes("Mozilla"))
    {
        let elemento = getCookie("vista-actual")
        mostrarVista(elemento)
    }
    if(navegador.includes("Google"))
    {
        let cookies = document.cookie
        // console.log(cookies)
        datos_totales = cookies.split(";")
        // console.log(datos_totales)
    }
}


function limpiar_formulario_empleado()
{
    let elementos = document.querySelectorAll(".input_text_empleado")
    for(let i =0; i<elementos.length;i++)
    {
        elementos[i].value=""
    }
}
function limpiar_formulario_adn()
{
    let elementos = document.querySelectorAll(".input_text_administrador")
    for(let i =0; i<elementos.length;i++)
    {
        elementos[i].value=""
    }
}

//Variables para desplazamiento del menus

let contenedores = document.querySelectorAll(".seccion")
let contenedor_dashboard= document.querySelectorAll(".seccion_tabla")
let contenedores_tickets = document.querySelectorAll(".seccion_tickets")
let contenedores_empresas = document.querySelectorAll(".seccion_empresa")
let contenedores_empleado = document.querySelectorAll(".seccion_empleado")
let contenedores_inicio_sesion = document.querySelectorAll(".seccion_empleado")
let contenedores_administradores = document.querySelectorAll(".seccion_administradores")


//INICIO DESPLAZAMIENTO ENTRE MENUS
//Ocultar secciones del menu 
function ocultarSecciones()
{
    for(let i = 0; i<contenedores.length;i++)
    {
        contenedores[i].style.display="none";
    }
}
//Mostrar secciones del menu 
function mostrarVista(elemento)
{
    ocultarSecciones()
    let contenedor = document.getElementById(elemento)
    contenedor.style.display="flex"
}

// mostrarVista(contenedores[0])

// crear cookie

function crearCookie(metodo,url,datos)
{
    let ajax = new XMLHttpRequest()

       ajax.open(metodo,url)

       ajax.send(datos)

       ajax.onreadystatechange =function () 
       {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                    // respuesta = ajax.responseText
                    // return respuesta
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

//Desplazamiento secciones del menu en pagina principal 
function mostrarSeccion(event)
{    
    let elemento = event.target
    let identificador = elemento.id
    let regexDashboard = /dashboard/
    let regexTicket = /ticket/
    let regexEmpresa = /empresas/
    let regexEmpleado = /empleado/
    let regexAdministrador = /administrador/

    
    
    // console.log(navegador)

    //console.log(identificador)
    if(regexDashboard.test(identificador))
    {
        // console.log("coincide dashboard")
        let nombre_elemento = "contenedor_dashboard"
        mostrarVista(nombre_elemento)
        
        if(navegador.includes("Mozilla"))
        {
            // alert("Es mozilla")
            setCookie("vista-actual",nombre_elemento,1)
        }
        if(navegador.includes("Google"))
        {
            // alert("Es Google")
            let datos = new FormData()
            datos.append("valor",nombre_elemento);
            crearCookie("POST","../controlador/crear_cookie_vista.php",datos)
        }
    }
    if(regexTicket.test(identificador))
    {
        // console.log("coincide ticket")
        let nombre_elemento = "contenedor_tickets"
        mostrarVista(nombre_elemento)
        if(navegador.includes("Mozilla"))
        {
            // alert("Es mozilla")
            setCookie("vista-actual",nombre_elemento,1)
        }
        if(navegador.includes("Google"))
        {
            // alert("Es Google")
            let datos = new FormData()
            datos.append("valor",nombre_elemento);
            crearCookie("POST","../controlador/crear_cookie_vista.php",datos)
        }

    }
    if(regexEmpresa.test(identificador))
    {
        //console.log("coincide empresa")
        let nombre_elemento = "contenedor_empresas"
        mostrarVista(nombre_elemento)
        tomar_datos_empresas()
        if(navegador.includes("Mozilla"))
        {
            // alert("Es mozilla")
            setCookie("vista-actual",nombre_elemento,1)
        }
        if(navegador.includes("Google"))
        {
            // alert("Es Google")
            let datos = new FormData()
            datos.append("valor",nombre_elemento);
            crearCookie("POST","../controlador/crear_cookie_vista.php",datos)
        }

    }
    if(regexEmpleado.test(identificador))
    {
        //console.log("coincide empleado")
        let nombre_elemento = "contenedor_empleado"
        mostrarVista(nombre_elemento)
        
        tomar_datos_empleado()

        if(navegador.includes("Mozilla"))
        {
            // alert("Es mozilla")
            setCookie("vista-actual",nombre_elemento,1)
        }
        if(navegador.includes("Google"))
        {
            // alert("Es Google")
            let datos = new FormData()
            datos.append("valor",nombre_elemento);
            crearCookie("POST","../controlador/crear_cookie_vista.php",datos)
        }
    }
    if(regexAdministrador.test(identificador))
    {
        //console.log("coincide empleado")
        let nombre_elemento = "contenedor_administradores"
        mostrarVista(nombre_elemento)
        if(navegador.includes("Mozilla"))
        {
            // alert("Es mozilla")
            setCookie("vista-actual",nombre_elemento,1)
        }
        if(navegador.includes("Google"))
        {
            // alert("Es Google")
            let datos = new FormData()
            datos.append("valor",nombre_elemento);
            crearCookie("POST","../controlador/crear_cookie_vista.php",datos)
        }
        

    }
}

/////TERMINO DESPLAZAMIENTO ENTRE MENUS



///INICIO DESPLAZAMIENTO OPCIONES DEL DASHBOARD
//Ocultar secciones del dashboard  
function ocultarSeccionesDashboard()
{
    
    for(let i =0;i<contenedor_dashboard.length;i++)
    {
        contenedor_dashboard[i].style.display="none"
    }

}

//Mostrar secciones del dashboard 
function mostrarVistaDashboard(elemento)
{
    ocultarSeccionesDashboard()
    let contenedor_dashboard = document.getElementById(elemento)
    contenedor_dashboard.style.display="flex"
}

function mostrarSeccionDashboard(event)
{    
    let elemento = event.target
    let identificador = elemento.id
    let regexPendiente = /pendiente/
    let regexNoResuelto = /noResuelto/
    let regexResuelto = /resuelto/
    let regexPeticion = /peticion/
    //console.log(identificador)
    if(regexPendiente.test(identificador))
    {
        //console.log("coincide pendiente")
        let nombre_elemento = "contenedor_tickets_pendientes"
        mostrarVistaDashboard(nombre_elemento)
    }
    if(regexNoResuelto.test(identificador))
    {
        //console.log("coincide no resuelto")
        let nombre_elemento = "contenedor_tickets_no_resueltos"
        mostrarVistaDashboard(nombre_elemento)
    }
    if(regexResuelto.test(identificador))
    {
        //console.log("coincide resuelto")
        let nombre_elemento = "contenedor_tickets_resuelto"
        mostrarVistaDashboard(nombre_elemento)
    }
    if(regexPeticion.test(identificador))
    {
        console.log("coincide peticiones")
        let nombre_elemento = "contenedor_peticion"
        mostrarVistaDashboard(nombre_elemento)
        tomar_datos_empresas_peticion_dashboard()

    }
}
///TERMINO DESPLAZAMIENTO OPCIONES DEL DASHBOARD


//INICIO DESPLAZAMIENTO ENTRE TICKETS

//Ocultar secciones del menu 
function ocultarSeccionesTickets()
{
    for(let i = 0; i<contenedores_tickets.length;i++)
    {
        contenedores_tickets[i].style.display="none";
    }
}
//Mostrar secciones del menu 
function mostrarVistaTickets(elemento)
{
    ocultarSeccionesTickets()
    let contenedor = document.getElementById(elemento)
    contenedor.style.display="flex"
}

// mostrarVista(contenedores[0])
//Desplazamiento secciones del menu en pagina principal 
function mostrarSeccionTickets(event)
{    
    let elemento = event.target
    let identificador = elemento.id
    let regexTicketsPendientes = /ticketsPendientes/
    let regexTicketsNoResueltos = /ticketsNoResuelto/
    let regexTicketsResueltos = /ticketsResuelto/
    let regexTicketsAgregar = /ticketsAgergar/ 
    //console.log(identificador)
    if(regexTicketsPendientes.test(identificador))
    {
        //console.log("coincide dashboard")
        let nombre_elemento = "contenedor_contenido_ticketsPendientes"
        mostrarVistaTickets(nombre_elemento)
    }
    if(regexTicketsNoResueltos.test(identificador))
    {
        //console.log("coincide ticket")
        let nombre_elemento = "contenedor_contenido_ticketsNoResueltos"
        mostrarVistaTickets(nombre_elemento)
    }
    if(regexTicketsResueltos.test(identificador))
    {
        //console.log("coincide empresa")
        let nombre_elemento = "contenedor_contenido_ticketsResueltos"
        mostrarVistaTickets(nombre_elemento)
    }
    if(regexTicketsAgregar.test(identificador))
    {
        //console.log("coincide empleado")
        let nombre_elemento = "contenedor_contenido_ticketsAgregarTicket"
        mostrarVistaTickets(nombre_elemento)
    }
}

/////TERMINO DESPLAZAMIENTO ENTRE TICKETS




//INICIO DESPLAZAMIENTO ENTRE EMPRESAS
//Ocultar secciones del menu 
function ocultarSeccionesEmpresas()
{
    for(let i = 0; i<contenedores_empresas.length;i++)
    {
        contenedores_empresas[i].style.display="none";
    }
}
//Mostrar secciones del menu 
function mostrarVistaEmpresas(elemento)
{
    ocultarSeccionesEmpresas()
    let contenedor = document.getElementById(elemento)
    contenedor.style.display="flex"
}

// mostrarVista(contenedores[0])
//Desplazamiento secciones del menu en pagina principal 
function mostrarSeccionEmpresas(event)
{    
    let elemento = event.target
    let identificador = elemento.id
    let regexEmpresaActiva = /activa/
    let regexEmpresaNoActiva = /noactiva/
    let regexPeticionEmpresa = /peticion/
    let regexEmpresaAgregar = /agregar/ 
    //console.log(identificador)
    if(regexEmpresaActiva.test(identificador))
    {
        // console.log("coincide dashboard")
        let nombre_elemento = "contenedor_empresas_activas"
        mostrarVistaEmpresas(nombre_elemento)
        tomar_datos_empresas()
    }
    if(regexEmpresaNoActiva.test(identificador))
    {
        // console.log("coincide ticket")
        let nombre_elemento = "contenedor_empresas_noactivas"
        mostrarVistaEmpresas(nombre_elemento)
        tomar_datos_empresas_noactivas()
    }
    if(regexPeticionEmpresa.test(identificador))
    {
        //console.log("coincide empresa")
        let nombre_elemento = "contenedor_peticion_empresas"
        mostrarVistaEmpresas(nombre_elemento)
        tomar_datos_empresas_peticion()
    }
    if(regexEmpresaAgregar.test(identificador))
    {
        //console.log("coincide empleado")
        let nombre_elemento = "contenedor_agregar_empresas"
        mostrarVistaEmpresas(nombre_elemento)
    }
}

/////TERMINO DESPLAZAMIENTO ENTRE EMPRESA





//INICIO DESPLAZAMIENTO ENTRE Empleado
//Ocultar secciones del menu 
function ocultarSeccionesEmpleado()
{
    for(let i = 0; i<contenedores_empleado.length;i++)
    {
        contenedores_empleado[i].style.display="none";
    }
}
//Mostrar secciones del menu 
function mostrarVistaEmpleado(elemento)
{
    ocultarSeccionesEmpleado()
    let contenedor = document.getElementById(elemento)
    contenedor.style.display="flex"
}

// mostrarVista(contenedores[0])
//Desplazamiento secciones del menu en pagina principal 
function mostrarSeccionEmpleado(event)
{    
    let elemento = event.target
    let identificador = elemento.id
    let regexEmpleadoActiva = /activo/
    let regexEmpleadoNoActiva = /noactivo/
    let regexEmpleadoAgregar = /agregar/ 
    //console.log(identificador)
    if(regexEmpleadoActiva.test(identificador))
    {
        // console.log("coincide dashboard")
        let nombre_elemento = "contenedor_empleado_activas"
        mostrarVistaEmpleado(nombre_elemento)
        tomar_datos_empleado()
    }
    if(regexEmpleadoNoActiva.test(identificador))
    {
        // console.log("coincide ticket")
        let nombre_elemento = "contenedor_empleado_noactivo"
        mostrarVistaEmpleado(nombre_elemento)
        tomar_datos_empleado_noactivos()
    }
    if(regexEmpleadoAgregar.test(identificador))
    {
        //console.log("coincide empresa")
        let nombre_elemento = "contenedor_form_agregar_empleado"
        mostrarVistaEmpleado(nombre_elemento)
    }
}

/////TERMINO DESPLAZAMIENTO ENTRE EMPRESA


//INICIO DESPLAZAMIENTO ENTRE Administradores
//Ocultar secciones del menu 
function ocultarSeccionesAdministradores()
{
    for(let i = 0; i<contenedores_administradores.length;i++)
    {
        contenedores_administradores[i].style.display="none";
    }
}
//Mostrar secciones del menu 
function mostrarVistaAdministradores(elemento)
{
    ocultarSeccionesAdministradores()
    let contenedor = document.getElementById(elemento)
    contenedor.style.display="flex"
}

// mostrarVista(contenedores[0])
//Desplazamiento secciones del menu en pagina principal 
function mostrarSeccionAdministradores(event)
{    
    let elemento = event.target
    let identificador = elemento.id
    let regexAdministradoresActiva = /activo/
    let regexAdministradoresNoActiva = /noactivos/
    let regexAdministradoresAgregar = /agregar/ 
    console.log(identificador)
    if(regexAdministradoresActiva.test(identificador))
    {
        // console.log("coincide dashboard")
        let nombre_elemento = "contenedor_administradores_activos"
        mostrarVistaAdministradores(nombre_elemento)
        tomar_datos_empleado()
    }
    if(regexAdministradoresNoActiva.test(identificador))
    {
        // console.log("coincide ticket")
        let nombre_elemento = "contenedor_administradores_noactivos"
        mostrarVistaAdministradores(nombre_elemento)
        tomar_datos_empleado_noactivos()
    }
    if(regexAdministradoresAgregar.test(identificador))
    {
        //console.log("coincide empresa")
        let nombre_elemento = "contenedor_administradores_agregar"
        mostrarVistaAdministradores(nombre_elemento)
    }
}

/////TERMINO DESPLAZAMIENTO ENTRE EMPRESA

///Formulario agrega Empleado en dashboard admin
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
    var select_tipo_empleado = document.getElementById("select_tipo_empleado").value


    if( input_nombre_empleado.length==0 || 
        input_apellidoP_empleado.length ==0 || 
        input_apellidoM_empleado.length==0 || 
        input_domicilo_empleado.length==0 || 
        input_numero_exterior_empleado.length==0 || 
        input_colonia_empleado.length==0 || 
        input_telefono_empleado.length==0 ||  
        input_puesto_empleado.length==0 ||
        input_correo_empleado.length==0 ||
        input_contrasena_empleado.length==0 ||
        select_tipo_empleado == 0) 
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
       datos.append("tipo_usuario",select_tipo_empleado)


    //    console.log(select_tipo_empleado)
    //    console.log("-------")

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
                    limpiar_formulario_empleado()
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

///Formulario agrega Empleado en dashboard admin
var boton_agrega_administrador = document.getElementById("boton_agrega_administrador")

function agregar_administrador()
{
    
    var input_nombre_administrador = document.getElementById("input_nombre_administrador").value.trim()
    var input_apellidoP_administrador = document.getElementById("input_apellidoP_administrador").value.trim()
    var input_apellidoM_administrador = document.getElementById("input_apellidoM_administrador").value.trim()
    var input_domicilo_administrador = document.getElementById("input_domicilo_administrador").value.trim()
    var input_numero_exterior_administrador = document.getElementById("input_numero_exterior_administrador").value.trim()
    var input_colonia_administrador = document.getElementById("input_colonia_administrador").value.trim()
    var input_telefono_administrador = document.getElementById("input_telefono_administrador").value.trim()
    var input_puesto_administrador = document.getElementById("input_puesto_administrador").value.trim()
    var input_correo_administrador = document.getElementById("input_correo_administrador").value.trim()
    var input_contrasena_administrador = document.getElementById("input_contrasena_administrador").value.trim()


    if( input_nombre_administrador.length==0 || 
        input_apellidoP_administrador.length ==0 || 
        input_apellidoM_administrador.length==0 || 
        input_domicilo_administrador.length==0 || 
        input_numero_exterior_administrador.length==0 || 
        input_colonia_administrador.length==0 || 
        input_telefono_administrador.length==0 ||  
        input_puesto_administrador.length==0 ||
        input_correo_administrador.length==0 ||
        input_contrasena_administrador.length==0) 
    {
        alert("Los campos se encuentran vacio, favor de ingresar todos los datos...")
    }
    else
    {
       let datos = new FormData()

       datos.append("nombreAdministrador",input_nombre_administrador)
       datos.append("apellidopAdministrador",input_apellidoP_administrador)
       datos.append("apellidomAdministrador",input_apellidoM_administrador)
       datos.append("domicilioAdministrador",input_domicilo_administrador)
       datos.append("numeroextAdministrador",input_numero_exterior_administrador)
       datos.append("coloniaAdministrador",input_colonia_administrador)
       datos.append("telefonoAdministrador",input_telefono_administrador)
       datos.append("puestoAdministrador",input_puesto_administrador)
       datos.append("correoAdministrador",input_correo_administrador)
       datos.append("contrasenaAdministrador",input_contrasena_administrador)


    //    console.log(select_tipo_empleado)
    //    console.log("-------")

       let ajax = new XMLHttpRequest()

       ajax.open("POST","../controlador/agregar_adn.php")

       ajax.send(datos)

       ajax.onreadystatechange =function () 
       {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                    limpiar_formulario_adn()
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


//funcion para desactivar empleado

function desactivar_empleado(event)
{
    let elemento = event.target
    let padre = elemento.parentNode.parentNode
    let id_objetivo = padre.id
    // alert(padre)
    // console.log(elemento)    
    let estado  = "0"
    let datos = new FormData()
    datos.append("id_empleado",id_objetivo)
    datos.append("estado",estado)

    let confirmacion = confirm("¿Esta seguro de desactivar este empleado?")
    // confirmacion = false
    if(confirmacion)
    {
        let ajax = new XMLHttpRequest()

    ajax.open("POST","../controlador/desactivar_empleado.php")

    ajax.send(datos)

    ajax.onreadystatechange =function () 
    {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                    let elementId =id_objetivo
                    let node=document.getElementById(elementId);
                    node.parentNode.removeChild(node);        
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
    
    console.log(padre)
}
/////// Activar Empleado
function activar_empleado(event)
{
    let elemento = event.target
    let padre = elemento.parentNode.parentNode
    let id_objetivo = padre.id
    let estado  = "1"

    let datos = new FormData()
    datos.append("id_empleado",id_objetivo)
    datos.append("estado",estado)

    let confirmacion = confirm("¿Esta seguro de activar nuevamente este empleado?")
    if(confirmacion)
    {
        let ajax = new XMLHttpRequest()

    ajax.open("POST","../controlador/activar_empleado.php")

    ajax.send(datos)

    ajax.onreadystatechange =function () 
    {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                    let elementId =id_objetivo
                    let node=document.getElementById(elementId);
                    node.parentNode.removeChild(node);        
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
    
    console.log(padre)
}
//funcion para desactivar empresas
function desactivar_empresas(event)
{
    let elemento = event.target
    let padre = elemento.parentNode.parentNode
    let id_objetivo = padre.id
    let estado  = "0"
    let datos = new FormData()
    datos.append("id_empleado",id_objetivo)
    datos.append("estado",estado)

    let confirmacion = confirm("¿Esta seguro de desactivar esta empresa?")
    if(confirmacion)
    {
        let ajax = new XMLHttpRequest()

    ajax.open("POST","../controlador/desactivar_empresa.php")

    ajax.send(datos)

    ajax.onreadystatechange =function () 
    {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                    let elementId =id_objetivo
                    let node=document.getElementById(elementId);
                    node.parentNode.removeChild(node);        
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
    
    console.log(padre)
}

/////// Activar empresas
function activar_empresas(event)
{
    let elemento = event.target
    let padre = elemento.parentNode.parentNode
    let id_objetivo = padre.id
    let estado  = "1"

    let datos = new FormData()
    datos.append("id_empleado",id_objetivo)
    datos.append("estado",estado)

    let confirmacion = confirm("¿Esta seguro de activar esta empresa?")
    if(confirmacion)
    {
        let ajax = new XMLHttpRequest()

    ajax.open("POST","../controlador/activar_empresa.php")

    ajax.send(datos)

    ajax.onreadystatechange =function () 
    {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                    let elementId =id_objetivo
                    let node=document.getElementById(elementId);
                    node.parentNode.removeChild(node);        
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
    
    console.log(padre)
}

function setCookie(nombreCookie, contenido, fechaFinal) 
{
    var fecha = new Date();
    fecha.setTime(fecha.getTime() + (fechaFinal * 24 * 60 * 60 * 1000));
    var caducidad = "expires}="+fecha.toUTCString();
    document.cookie = nombreCookie + "=" + contenido + ";"+"SameSite=None; Secure"+ + caducidad + ";path=/";
}

function getCookie(nombreCookie) 
{
    var nCookie = nombreCookie + "=";
    var arregloCookie = document.cookie.split(';');
    for(var i = 0; i < arregloCookie.length; i++) 
    {
        var c = arregloCookie[i];
        while (c.charAt(0) == ' ') 
        {
            c = c.substring(1);
        }
    if (c.indexOf(nCookie) == 0) 
    {
        return c.substring(nCookie.length, c.length);
    }
    }
    return "";
}

var array_editar_empleados = []
var array_editados_empleados = []
var checar_editar_usuarios = true

var nombre2
var apellidoP2
var apellidoM2
var domicilio2
var numExt2
var colonia2
var telefono2
var puesto2
var correo2

var nombre
var apellidoP
var apellidoM
var domicilio
var numExt
var colonia
var telefono
var puesto
var correo


var id_input



function editar_empleado(event)
{ 
    

    let elemento=event.target
    let padre = elemento.parentNode.parentNode
    let hijos = padre.children

    
    // console.log(hijos)
    if(checar_editar_usuarios)
    {
        // let nombre_input = hijos[1].children[0].value
        id_input = hijos[0].children[0].value
        nombre =hijos[1].children[0].value.trim()
        apellidoP = hijos[2].children[0].value.trim()
        apellidoM =hijos[3].children[0].value.trim()
        domicilio =hijos[4].children[0].value.trim()
        numExt = hijos[5].children[0].value.trim()
        colonia = hijos[6].children[0].value.trim()
        telefono = hijos[7].children[0].value.trim()
        puesto = hijos[8].children[0].value.trim()
        correo = hijos[9].children[0].value.trim()

        console.log("primera coincidencia")
        console.log(nombre)
        console.log("------------")


        for(let i=0; i<hijos.length;i++)
        {
            let inputs = hijos[i].children
            let numero_input= inputs.length
            if(numero_input==1)
            {
                let valorID = inputs[0].value.trim()
                // let valorNombre inputs[1]
                inputs[0].style.border= "solid 2px red"
                inputs[0].disabled=false
                // console.log(inputs) 
                // array_editar_empleados.push(valor)
            }
            if(numero_input==2)
            {
                let hijos_editar = hijos[i].children
                hijos_editar[1].src = "../recursos/img/alta.png"
                console.log(hijos_editar)
            }
        }
        checar_editar_usuarios=false
    }
    else
    {
        nombre2 =hijos[1].children[0].value.trim()
        apellidoP2 = hijos[2].children[0].value.trim()
        apellidoM2 =hijos[3].children[0].value.trim()
        domicilio2 =hijos[4].children[0].value.trim()
        numExt2 = hijos[5].children[0].value.trim()
        colonia2 = hijos[6].children[0].value.trim()
        telefono2 = hijos[7].children[0].value.trim()
        puesto2 = hijos[8].children[0].value.trim()
        correo2 = hijos[9].children[0].value.trim()

        console.log("Segunda coincidencia")
        console.log(nombre2)
        console.log("------------")

        for(let i=0; i<hijos.length;i++)
        {
            let inputs = hijos[i].children
            let numero_input= inputs.length
            if(numero_input==1)
            {
                let valor = inputs[0].value
                inputs[0].style.border= "none"
                inputs[0].disabled=true
                // console.log(valor) 
                // array_editados_empleados.push(valor)
            }
            if(numero_input==2)
            {
                let hijos_editar = hijos[i].children
                hijos_editar[1].src = "../recursos/img/editar.png"
                console.log(hijos_editar)
            }
        }

        if(nombre!=nombre2)
        {
            console.log("se edito nombre")

            let info = new FormData()

            info.append("id",id_input)
            info.append("tipo","nombre")
            info.append("valor",nombre2)
            enviarDatos("POST","../controlador/editar_empleado.php",info)

        }
        if(apellidoP!=apellidoP2)
        {
            console.log("se edito apellido P")
            let info = new FormData()

            info.append("id",id_input)
            info.append("tipo","apellidoP")
            info.append("valor",apellidoP2)
            enviarDatos("POST","../controlador/editar_empleado.php",info)
        }
        if(apellidoM!=apellidoM2)
        {
            console.log("se edito apellido M")
            let info = new FormData()

            info.append("id",id_input)
            info.append("tipo","apellidoM")
            info.append("valor",apellidoM2)
            enviarDatos("POST","../controlador/editar_empleado.php",info)
        }
        if(domicilio!=domicilio2)
        {
            console.log("se edito domicilio")

            let info = new FormData()

            info.append("id",id_input)
            info.append("tipo","domicilio")
            info.append("valor",domicilio2)
            enviarDatos("POST","../controlador/editar_empleado.php",info)
        }
        if(numExt!=numExt2)
        {
            console.log("se edito numExt")
            let info = new FormData()

            info.append("id",id_input)
            info.append("tipo","numExt")
            info.append("valor",numExt2)
            enviarDatos("POST","../controlador/editar_empleado.php",info)
        }
        if(colonia!=colonia2)
        {
            console.log("se edito colonia")
            let info = new FormData()

            info.append("id",id_input)
            info.append("tipo","colonia")
            info.append("valor",colonia2)
            enviarDatos("POST","../controlador/editar_empleado.php",info)
        }
        if(telefono!=telefono2)
        {
            console.log("se edito telefono")

            let info = new FormData()

            info.append("id",id_input)
            info.append("tipo","telefono")
            info.append("valor",telefono2)
            enviarDatos("POST","../controlador/editar_empleado.php",info)
        }
        if(puesto!=puesto2)
        {
            console.log("se edito puesto")
            let info = new FormData()

            info.append("id",id_input)
            info.append("tipo","puesto")
            info.append("valor",puesto2)
            enviarDatos("POST","../controlador/editar_empleado.php",info)
        }
        if(correo!=correo2)
        {
            console.log("se edito correo")
            let info = new FormData()

            info.append("id",id_input)
            info.append("tipo","correo")
            info.append("valor",correo2)
            enviarDatos("POST","../controlador/editar_empleado.php",info)
        }
        tomar_datos_empleado()
        checar_editar_usuarios=true
    }
    console.log(array_editar_empleados)
    console.log(array_editados_empleados)
}


function eliminar_empleado(event)
{   
    let elemento = event.target
    let padre = elemento.parentNode.parentNode
    let id_objetivo = padre.id
    // alert(padre)
    // console.log(id_objetivo)    
    // let estado  = "0"
    let datos = new FormData()
    datos.append("id_empleado",id_objetivo)
    // datos.append("estado",estado)
    let confirmacion = confirm("¿Esta seguro de elimiar a este empleado?")
    // confirmacion = false
    if(confirmacion)
    {
        let ajax = new XMLHttpRequest()

    ajax.open("POST","../controlador/eliminar_empleado.php")

    ajax.send(datos)

    ajax.onreadystatechange =function () 
    {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                    let elementId =id_objetivo
                    let node=document.getElementById(elementId);
                    node.parentNode.removeChild(node);  
                    // tomar_datos_empleado_noactivos()      
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
    
    console.log(padre)

}




// var respuesta

function enviarDatos(metodo,url,datos)
{
    let ajax = new XMLHttpRequest()

       ajax.open(metodo,url)

       ajax.send(datos)

       ajax.onreadystatechange =function () 
       {
            if (ajax.readyState == 4) 
            {
                if (ajax.status == 200) 
                {
                    // console.log("200 Respuesta Exitosa");
                    console.log(ajax.responseText)
                    // respuesta = ajax.responseText
                    // return respuesta
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



var boton_agrega_empresas_adn= document.getElementById("boton_agrega_empresa_dash")

function agregar_empresa_dashboard()
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

    ajax.open("POST","../controlador/agregar_empresa.php")

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

var datos_filtrados = []

function buscar_empleado(event)
{
    let codigo_tecla = event.keyCode
    // console.log(datos_empleados)
        if(codigo_tecla==13)
        {
            let valor_buscar = event.target.value.trim()
            valor_buscar.toLowerCase()
            if(valor_buscar.length>0)
            {
                // alert("funciona")
                // console.log(valor_buscar)
                for (let objeto of datos_empleados)
                {
                    console.log(objeto)
                    let apellidoM = objeto.apellidomEmpleado.toLowerCase()
                    let apellidoP = objeto.apellidopEmpleado.toLowerCase()
                    let empleado = objeto.tipo_usuario.toLowerCase()
                    let tipo = objeto.tipo_usuario.toLowerCase()

                    if(apellidoM.includes(valor_buscar))
                    {
                        if(!datos_filtrados.includes(objeto))
                        {
                            datos_filtrados.push(objeto)
                        }
                    } 
                    if(apellidoP.includes(valor_buscar))
                    {
                        if(!datos_filtrados.includes(objeto))
                        {
                            datos_filtrados.push(objeto)
                        }
                    }    
                    if(tipo.includes(valor_buscar))
                    {
                        if(!datos_filtrados.includes(objeto))
                        {
                            datos_filtrados.push(objeto)
                        }
                    }  
                }
                console.log(datos_filtrados)
                if(datos_filtrados.length>0)
                {
                    // datos_empleados = datos_filtrados
                    paginador_empleado(datos_filtrados,pagina_actual_empleados_activos,cantidad_vistas,boton_anterior,boton_siguiente,boton_primero,boton_ultimo,cuerpo,indicador_pagina)
                }
            }
            else
            {
                tomar_datos_empleado()
            }
        }
}

