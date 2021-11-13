<!DOCTYPE html>
   <html lang="es-Mx">
       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Administradores</title>
           <link rel="stylesheet" href="../recursos/css/estilos.css" type="text/css">
           <link rel="shortcut icon" href="../recursos/img/logo.ico" type="image/x-icon">
       </head>
       <body>
           <div id="contenedor">
               <div id="menu">
                   <div id="contenedor_logo" class="seccion_menu">
                       <img src="../recursos/img/logo.png" alt="" id="logo_inicio">
                       <p class="texto"></p>
                   </div>
                   <div id="contenedor_bienvenida" class="seccion_menu">
                       <p class="texto">Bienvenido a tu dashboard administradores</p>
                   </div>
                   <div id="contenedor_control" class="seccion_menu">
                       <img src="" alt="" class="imagenes_control">
                       <img src="" alt="" class="imagenes_control">
                       <img src="" alt="" class="imagenes_control">
                   </div>
               </div>
               <div id="seccion_principal">
                   <div id="menu_control">
                       <div id="c_boton_dashboard" class="boton_control" onclick="mostrarSeccion(event);">
                           <img src="../recursos/img/hogar.png" alt="" class="imagen_menu" id="imagen_dashboard">
                           <p class="texto_menu" id="parrafo_dashboard">Dashboard</p>
                       </div>
                       <div id="c_boton_ticket" class="boton_control" onclick="mostrarSeccion(event);">
                           <img id="imagen_ticket" src="../recursos/img/hoja.png" alt="" class="imagen_menu">
                           <p id="parrafo_ticket" class="texto_menu">Tickets</p>
                       </div>
                       <div id="c_boton_empresas" class="boton_control" onclick="mostrarSeccion(event);">
                           <img id="imagen_empresas" src="../recursos/img/empresa.png" alt="" class="imagen_menu">
                           <p id="parrafo_empresas" class="texto_menu">Empresas</p>
                       </div>
                       <div id="c_boton_empleado" class="boton_control" onclick="mostrarSeccion(event);">
                           <img id="imagen_empleado" src="../recursos/img/usuario.png" alt="" class="imagen_menu">
                           <p id="parrafo_empleado" class="texto_menu">Empleados</p>
                       </div>
                       
                       <!-- <p class="boton_control">Dashboard</p>
                       <p class="boton_control">Tickets</p>
                       <p class="boton_control">Empresas</p>
                       <p class="boton_control">Empleados</p> -->
                   </div>
                   <div class="contenedor_seccion" id="">
                           <!-- empoieza es la seccion de dashboar -->
                               <div class="seccion" id="contenedor_dashboard">
                                   <h1 class="titulo_seccion">Dashboard</h1>
                                   <div class="contador_seccion" id="contenedor_contador">
                                       <div id="c_boton_pendiente" class="seccion_contador" onclick="mostrarSeccionDashboard(event);">
                                           <img src="../recursos/img/tickets_pendientes.png" id="imagen_pendiente" class="imagen_contador">
                                           <p id="parrafo_pendiente" class="parrafo_contador">Tickets Pendientes</p>
                                       </div>
                                       <div id="c_boton_noResuelto" class="seccion_contador" onclick="mostrarSeccionDashboard(event);">
                                           <img src="../recursos/img/tickets_cancelar.png" id="imagen_noResuelto" class="imagen_contador">
                                           <p id="parrafo_noResuelto" class="parrafo_contador">Tickets No Resueltos</p>
                                       </div>
   
                                       <div id="c_boton_resuelto" class="seccion_contador" onclick="mostrarSeccionDashboard(event);">
                                           <img src="../recursos/img/ticket_resulto.png" id="imagen_resuelto" class="imagen_contador">
                                           <p id="parrafo_resuelto" class="parrafo_contador">Tickets Resueltos</p>
                                       </div>
                                       <div id="c_boton_peticion" class="seccion_contador" onclick="mostrarSeccionDashboard(event);">
                                           <img src="../recursos/img/Peticion.png" id="imagen_peticion" class="imagen_contador">
                                           <p id="parrafo_peticion" class="parrafo_contador">Peticiones</p>
                                       </div>
                                   </div>
                               <!--Contenedor tabla de tickets pendientes-->
                               <div class="seccion_tabla" id="contenedor_tickets_pendientes">
                                   <h1>Tickets Pendientes</h1>
                                   <div id="contenedor_tabla_pendientes">
                                       <table class="tablas">
                                           <thead>
                                               <tr>
                                                   <th>Folio</th>
                                                   <th>Nombre empresa</th>
                                                   <th>Hora y fecha de solicitud</th>
                                                   <th>Servicio</th>
                                                   <th>Prioridad</th>
                                                   <th>Descripcion del problema</th>
                                                   <th>Estatus</th>
                                                   <th>Acciones</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                               
                               <!--Contenedor tabla de tickets no resueltos-->
                               <div class="seccion_tabla" id="contenedor_tickets_no_resueltos">
                                   <h1>Tickets no resueltos</h1>
                                   <div id="contenedor_tabla_no_resueltos">
                                       <table class="tablas">
                                           <thead>
                                               <tr>
                                                   <th>Folio</th>
                                                   <th>Nombre empresa</th>
                                                   <th>Hora y fecha de solicitud</th>
                                                   <th>Servicio</th>
                                                   <th>Prioridad</th>
                                                   <th>Descripcion del problema</th>
                                                   <th>Empleado quien realizo el servicio</th>
                                                   <th>Motivo por lo cual no se realizo</th>
                                                   <th>Hora y fecha de termino</th>
                                                   <th>Estatus</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
   
                               <!--Contenedor tabla de tickets no resueltos-->
                               <div class="seccion_tabla" id="contenedor_tickets_resuelto">
                                   <h1>Tickets resueltos</h1>
                                   <div id="contenedor_tabla_resuelto">
                                       <table class="tablas">
                                           <thead>
                                               <tr>
                                                   <th>Folio</th>
                                                   <th>Nombre empresa</th>
                                                   <th>Hora y fecha de solicitud</th>
                                                   <th>Servicio</th>
                                                   <th>Prioridad</th>
                                                   <th>Descripcion del problema</th>
                                                   <th>Empleado quien realizo el servicio</th>
                                                   <th>Descripcion detallada de la falla</th>
                                                   <th>Solucion del problema</th>
                                                   <th>Hora y fecha de termino</th>
                                                   <th>Estatus</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
   
                               <!--Contenedor tabla de tickets no resueltos-->
                               <div class="seccion_tabla" id="contenedor_peticion">
                                   <h1>Peticiones</h1>
                                   <div id="contenedor_tabla_peticion">
                                       <table class="tablas">
                                           <thead>
                                               <tr>
                                                   <th>RFC</th>
                                                   <th>Nombre Empresa</th>
                                                   <th>Razon Social</th>
                                                   <th>Domicilio</th>
                                                   <th>N° exterior</th>
                                                   <th>Colonia</th>
                                                   <th>C.P</th>
                                                   <th>Telefono</th>
                                                   <th>Correo electronico</th>
                                                   <th>Contraseña</th>
                                                   <th>Estatus</th>
                                                   <th>Acciones</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
   
                                               </tr>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                               <tr>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                                   <td>dato</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
   
                               </div>
                           <!-- terminar seccion dasshboard -->
                           <!-- empieza seccion ticket -->
                           <div class="seccion" id="contenedor_tickets">
                               <h1>Tickets</h1>
                               <div class="contador_seccion" id="contenedor_contador_tickets">
                                   <div id="c_boton_ticketsPendientes" class="seccion_contador" onclick="mostrarSeccionTickets(event);">
                                       <img src="../recursos/img/tickets_pendientes.png" id="imagen_ticketsPendientes" class="imagen_contador">
                                       <p id="parrafo_ticketsPendientes" class="parrafo_contador">Tickets Pendientes</p>
                                   </div>
                                   <div id="c_boton_ticketsNoResuelto" class="seccion_contador" onclick="mostrarSeccionTickets(event);">
                                       <img src="../recursos/img/tickets_cancelar.png" id="imagen_ticketsNoResuelto" class="imagen_contador">
                                       <p id="parrafo_ticketsNoResuelto" class="parrafo_contador">Tickets No Resueltos</p>
                                   </div>
   
                                   <div id="c_boton_ticketsResuelto" class="seccion_contador" onclick="mostrarSeccionTickets(event);">
                                       <img src="../recursos/img/ticket_resulto.png" id="imagen_ticketsResuelto" class="imagen_contador">
                                       <p id="parrafo_ticketsResuelto" class="parrafo_contador">Tickets Resueltos</p>
                                   </div>
                                   <div id="c_boton_ticketsAgergar" class="seccion_contador" onclick="mostrarSeccionTickets(event);">
                                       <img src="../recursos/img/agregar_tickets.png" id="imagen_ticketsAgergar" class="imagen_contador">
                                       <p id="parrafo_ticketsAgergar" class="parrafo_contador">Agregar Ticket</p>
                                   </div>
                               </div>
   
                               <div class="seccion_tickets" id="contenedor_contenido_ticketsPendientes">
                                   <h1 class="titulo_seccion">Listado de tickets pendientes</h1>
                               </div>
                               <div class="seccion_tickets" id="contenedor_contenido_ticketsNoResueltos">
                                   <h1 class="titulo_seccion">Listado de tickets no resueltos</h1>
                               </div>
                               <div class="seccion_tickets" id="contenedor_contenido_ticketsResueltos">
                                   <h1 class="titulo_seccion">Listado de tickets resueltos</h1>
                               </div>
                               <div class="seccion_tickets" id="contenedor_contenido_ticketsAgregarTicket">
                                   <h1 class="titulo_seccion">Agregar ticket</h1>
                               </div>
                                   
                           </div>
                           <!-- terminar seccion tickets -->
   
   
   
                           <!-- empiexa contenedor Empresas -->
                               <div class="seccion" id="contenedor_empresas">
                               <h1 class="titulo_seccion">Empresas</h1>
                                   <div class="contador_seccion" id="contenedor_contador_empresas">
                                       <div id="c_boton_empresas_activas" class="seccion_contador" onclick="mostrarSeccionEmpresas(event);">
                                           <img src="../recursos/img/empresa_activa.png" id="imagen_empresas_activas" class="imagen_contador">
                                           <p id="parrafo_empresas_activas" class="parrafo_contador">Empresas Activas</p>
                                       </div>
                                       <div id="c_boton_empresa_noactiva" class="seccion_contador" onclick="mostrarSeccionEmpresas(event);">
                                           <img src="../recursos/img/empresa_baja.png" id="imagen_empresa_noactiva" class="imagen_contador">
                                           <p id="parrafo_empresa_noactiva" class="parrafo_contador">Empresas Bajas</p>
                                       </div>
   
                                       <div id="c_boton_peticion" class="seccion_contador" onclick="mostrarSeccionEmpresas(event);">
                                           <img src="../recursos/img/Peticion.png" id="imagen_peticion" class="imagen_contador">
                                           <p id="parrafo_peticion" class="parrafo_contador">Peticion Empresas</p>
                                       </div>
                                       <div id="c_boton_agregar_empresa" class="seccion_contador" onclick="mostrarSeccionEmpresas(event);">
                                           <img src="../recursos/img/empresa_agregar.png" id="imagen_agregar_empresa" class="imagen_contador">
                                           <p id="parrafo_agregar_empresa" class="parrafo_contador">Agregar Empresa</p>
                                       </div>
                                   </div>
                                   <div class="seccion_empresa" id="contenedor_empresas_activas">
                                       <h1 class="titulo_seccion">Listado de empresas activas</h1>
                                       <div id="contenedor_tabla_empresas_activas">
                                           <table class="tablas">
                                               <thead>
                                                   <tr>
                                                       <th>RFC</th>
                                                       <th>Nombre Empresa</th>
                                                       <th>Razon Social</th>
                                                       <th>Domicilio</th>
                                                       <th>N° exterior</th>
                                                       <th>Colonia</th>
                                                       <th>C.P</th>
                                                       <th>Telefono</th>
                                                       <th>Correo electronico</th>
                                                       <th>Contraseña</th>
                                                       <th>Estatus</th>
                                                       <th>Acciones</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
   
                                   <div class="seccion_empresa" id="contenedor_empresas_noactivas">
                                       <h1 class="titulo_seccion">Listado de empresas dadas de baja</h1>
                                       <div id="contenedor_tabla_empresas_noactivas">
                                       <table class="tablas">
                                               <thead>
                                                   <tr>
                                                       <th>RFC</th>
                                                       <th>Nombre Empresa</th>
                                                       <th>Razon Social</th>
                                                       <th>Domicilio</th>
                                                       <th>N° exterior</th>
                                                       <th>Colonia</th>
                                                       <th>C.P</th>
                                                       <th>Telefono</th>
                                                       <th>Correo electronico</th>
                                                       <th>Contraseña</th>
                                                       <th>Estatus</th>
                                                       <th>Acciones</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
   
                                   <div class="seccion_empresa" id="contenedor_peticion_empresas">
                                       <h1 class="titulo_seccion">Peticion de empresas</h1>
                                       <div id="contenedor_tabla_peticion_empresas">
                                       <table class="tablas">
                                               <thead>
                                                   <tr>
                                                       <th>RFC</th>
                                                       <th>Nombre Empresa</th>
                                                       <th>Razon Social</th>
                                                       <th>Domicilio</th>
                                                       <th>N° exterior</th>
                                                       <th>Colonia</th>
                                                       <th>C.P</th>
                                                       <th>Telefono</th>
                                                       <th>Correo electronico</th>
                                                       <th>Contraseña</th>
                                                       <th>Estatus</th>
                                                       <th>Acciones</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
   
                                   <div class="seccion_empresa" id="contenedor_agregar_empresas">
                                       <h1 class="titulo_seccion">Agregar nueva empresa</h1>
                                       <div id="contenedor_form_agregar_empresa">
                                           <table class="tablas">
                                               <thead>
                                                   <tr>
                                                       <th>Folio</th>
                                                       <th>Nombre empresa</th>
                                                       <th>Hora y fecha de solicitud</th>
                                                       <th>Servicio</th>
                                                       <th>Prioridad</th>
                                                       <th>Descripcion del problema</th>
                                                       <th>Estatus</th>
                                                       <th>Acciones</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                   </tr>
                                                   <tr>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                   </tr>
                                                   <tr>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           <!-- terminar contenedor Empresas -->
   
   
   
                           <!-- empieza contenedor Empleado -->
                           <div class="seccion" id="contenedor_empleado">
                                   <h1 class="titulo_seccion">Empleados</h1>
                                   <div class="contador_seccion" id="contenedor_contador_empleado">
                                       <div id="c_boton_empleado_activo" class="seccion_contador" onclick="mostrarSeccionEmpleado(event);">
                                           <img src="../recursos/img/empleadoactivo.png" id="imagen_empleado_activo" class="imagen_contador">
                                           <p id="parrafo_empleado_activo" class="parrafo_contador">Empleados Activos</p>
                                       </div>
                                       <div id="c_boton_empleado_noactivo" class="seccion_contador" onclick="mostrarSeccionEmpleado(event);">
                                           <img src="../recursos/img/empleadobaja.png" id="imagen_empleado_noactivo" class="imagen_contador">
                                           <p id="parrafo_empleado_noactivo" class="parrafo_contador">Empleados baja</p>
                                       </div>
   
                                       <div id="c_boton_empleado_agregar" class="seccion_contador" onclick="mostrarSeccionEmpleado(event);">
                                           <img src="../recursos/img/agregarempleado.png" id="imagen_empleado_agregar" class="imagen_contador">
                                           <p id="parrafo_empleado_agregar" class="parrafo_contador">Agregar Empleado</p>
                                       </div>
                                   </div>
   
                                   <div class="seccion_empleado" id="contenedor_empleado_activas">
                                       <h1 class="titulo_seccion">Listado de empleados activos  <select name="" id="cantidad_empleados_activos" onchange="tomar_datos_empleado();"> 
                                           <option value="5">2</option> 
                                           <option value="10">3</option>
                                            <option value="20">4</option> </select></h1>
                                       <div id="contenedor_tabla_empleado_activas">
                                           <table class="tablas">
                                               <thead>
                                                   <tr>
                                                   <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido Paterno</th>
                                                    <th>Apellido Materno </th>
                                                    <th>Domicilio</th>
                                                    <th>N° Ext</th>
                                                    <th>Colonia</th>
                                                    <th>Telefono</th>
                                                    <th>Puesto</th>
                                                    <th>Correo</th>
                                                    <th>Estatus</th>
                                                    <th>Tipo Empleado</th>
                                                    <th>Acciones</th>
                                                   </tr>
                                               </thead>
                                               <tbody id="tabla_empleado_activo">
                                                   
                                               </tbody>
                                               
                                           </table>
                            <div class="contenedor_paginador">
                                    <div class="controladores_paginador" id="boton_paginador_primero">Primero</div>
                                    <div class="controladores_paginador" id="boton_paginador_anterior">anterior</div>
                                    <div class="controladores_paginador" id="boton_paginador_cantidad">1 de 1</div>
                                    <div class="controladores_paginador" id="boton_paginador_siguiente">siguiente</div>
                                    <div class="controladores_paginador" id="boton_paginador_ultimo">Ultimo</div>
                            </div>
                                       </div>
                                   </div>
   
                                   
                                   <div class="seccion_empleado" id="contenedor_empleado_noactivo">
                                       <h1 class="titulo_seccion">Listado de empleados dados de baja</h1>
                                       <div id="contenedor_tabla_empleado_noactivo">
                                           <table class="tablas">
                                               <thead>
                                                   <tr>
                                                       <th>RFC</th>
                                                       <th>Nombre Empresa</th>
                                                       <th>Razon Social</th>
                                                       <th>Domicilio</th>
                                                       <th>N° exterior</th>
                                                       <th>Colonia</th>
                                                       <th>C.P</th>
                                                       <th>Telefono</th>
                                                       <th>Correo electronico</th>
                                                       <th>Contraseña</th>
                                                       <th>Estatus</th>
                                                       <th>Acciones</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                       <td>dato</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               
                                   <div class="seccion_empleado" id="contenedor_form_agregar_empleado">
                                       <h1 class="titulo_seccion">Agregar Empleados</h1>
                                       <div id="contenedor_general_formulario">
                                           <div class="contenedor_formulario_agregar">
                                               <input id="input_nombre_empleado" type="text" class="input_text" placeholder="Nombre Empleado" value="">
                                               <input id="input_apellidoP_empleado" type="text" class="input_text" placeholder="Apellido Paterno Empleado" value="">
                                           </div>
                                           <div class="contenedor_formulario_agregar">
                                               <input id="input_apellidoM_empleado" type="text" class="input_text" placeholder="Apellido Materno Empleado" value="">
                                               <input id="input_domicilo_empleado" type="text" class="input_text" placeholder="Domicilio Empleado" value="">
                                           </div>
                                           <div class="contenedor_formulario_agregar">
                                               <input id="input_numero_exterior_empleado" type="text" class="input_text" placeholder="N° exterior" value="">
                                               <input id="input_colonia_empleado" type="text" class="input_text" placeholder="Colonia" value="">
                                           </div>
                                           <div class="contenedor_formulario_agregar">
                                               <input id="input_telefono_empleado" type="text" class="input_text" placeholder="Telefono Empleado" value="">
                                               <input id="input_puesto_empleado" type="text" class="input_text" placeholder="Puesto Empleado" value="">
                                           </div>
                                           <div class="contenedor_formulario_agregar">
                                               <input id="input_correo_empleado" type="text" class="input_text" placeholder="Correo Empleado" value="">
                                               <input id="input_contrasena_empleado" type="text" class="input_text" placeholder="Contraseña Empleado" value="">
                                           </div>
                                           <div class="contenedor_formulario_agregar">
                                               <select name="" id="select_tipo_empleado">
                                                   <option value="EMPLEADO">EMPLEADO</option>
                                                   <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                               </select>
                                           </div>
                                           <div class="contenedor_formulario_agregar">
                                               <button class="boton" id="boton_agrega_empleado" onclick="agregar_empleado()">Agregar Empleado</button>
                                           </div>
                                       </div>    
                                   </div>    
                           </div>
                           <!-- terminar contenedor Empresas -->
                   </div>
               </div>
           </div>
   
       <script src="../recursos/js/funcionesPrincipal.js">
       </script>
   
       </body>
   </html>