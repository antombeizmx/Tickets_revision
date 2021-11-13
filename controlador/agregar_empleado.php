<?php
include_once("../modelo/acciones.php");


$nombreEmpleado = $_POST['nombreEmpleado'];
$apellidopEmpleado = $_POST['apellidopEmpleado'];
$apellidomEmpleado = $_POST['apellidomEmpleado'];
$domicilioEmpleado = $_POST['domicilioEmpleado'];
$numeroextEmpleado = $_POST['numeroextEmpleado'];
$coloniaEmpleado = $_POST['coloniaEmpleado'];
$telefonoEmpleado = $_POST['telefonoEmpleado'];
$puestoEmpleado = $_POST['puestoEmpleado'];
$correoEmpleado = $_POST['correoEmpleado'];
$contrasenaEmpleado = $_POST['contrasenaEmpleado'];
$tipo_usuario = $_POST['tipo_usuario'];

$modelo = new Acciones();
$registrar_empleado = $modelo->agregar_empleado($nombreEmpleado,$apellidopEmpleado,$apellidomEmpleado,$domicilioEmpleado,$numeroextEmpleado,$coloniaEmpleado,$telefonoEmpleado,$puestoEmpleado,$correoEmpleado,$contrasenaEmpleado,$tipo_usuario);
echo $registrar_empleado;
//var_dump($registrar_empleado);

?>