<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../recursos/css/estilos.css" type="text/css">
    <link rel="shortcut icon" href="../recursos/img/logo.ico" type="image/x-icon">
    <title>Empleado</title>
</head>
<body>
<div id="contenedor">
            <div id="menu">
                <div id="contenedor_logo" class="seccion_menu">
                    <img src="../recursos/img/logo.png" alt="" id="logo_inicio">
                    <p class="texto"></p>
                </div>
                <div id="contenedor_bienvenida" class="seccion_menu">
                    <p class="texto">Bienvenido a tu dashboard empleado</p>
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
                </div>
            </div>
        </div>
    </div>

    <script src="../recursos/js/funcionesPrincipal.js">
    </script>

    </body>
</html>