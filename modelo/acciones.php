<?php
session_start();
include_once("conexion.php");
class Acciones
{

    //////////////////////////////////////////////////////
    //////////////////////////////////////////////////////
    //////////////ACCIONES administradores////////////////
    //////////////////////////////////////////////////////


    //////Agregar Empleado///////
    public function agregar_Administrador($nombreAdministrador,$apellidopAdministrador,$apellidomAdministrador,$domicilioAdministrador,$numeroextAdministrador,$coloniaAdministrador,$telefonoAdministrador,$puestoAdministrador,$correoAdministrador,$contrasenaAdministrador)
    {
        $servidor = new Servidor();
        $conexion = $servidor->conectar();
        $sql_vericar = "SELECT correoAdministrador  FROM administrador WHERE correoAdministrador=:correoAdministrador";
        $existe = $conexion->prepare($sql_vericar);
        $existe->bindParam(":correoAdministrador",$correoAdministrador);
        $existe->execute();
        $activo = "1";
        $tipo_usuario = "ADMINISTRADOR";
        $str_vacio = " ";
        
        $numero = rand(100000,999999);
        $fecha = date("D/m/A H:i:s");
        $cifrado = sha1($contrasenaAdministrador);
        $cifrado = sha1($cifrado);

        if($existe->rowCount()==0)
        {


            $sql = "INSERT INTO administrador
            (nombreAdministrador,
            apellidopAdministrador,
            apellidomAdministrador,
            domicilioAdministrador,
            numeroextAdministrador,
            coloniaAdministrador,
            telefonoAdministrador,
            puestoAdministrador,
            correoAdministrador,
            contrasenaAdministrador,
            idSesion,
            activo,
            tipo_usuario
            ) 
            VALUE(
            :nombreAdministrador,
            :apellidopAdministrador,
            :apellidomAdministrador,
            :domicilioAdministrador,
            :numeroextAdministrador,
            :coloniaAdministrador,
            :telefonoAdministrador,
            :puestoAdministrador,
            :correoAdministrador,
            :contrasenaAdministrador,
            :idSesion,
            :activo,
            :tipo_usuario)";

            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":nombreAdministrador",$nombreAdministrador);
            $parametro->bindParam(":apellidopAdministrador",$apellidopAdministrador);
            $parametro->bindParam(":apellidomAdministrador",$apellidomAdministrador);
            $parametro->bindParam(":domicilioAdministrador",$domicilioAdministrador);
            $parametro->bindParam(":numeroextAdministrador",$numeroextAdministrador);
            $parametro->bindParam(":coloniaAdministrador",$coloniaAdministrador);
            $parametro->bindParam(":telefonoAdministrador",$telefonoAdministrador);
            $parametro->bindParam(":puestoAdministrador",$puestoAdministrador);
            $parametro->bindParam(":correoAdministrador",$correoAdministrador);
            $parametro->bindParam(":contrasenaAdministrador",$cifrado);
            $parametro->bindParam(":idSesion",$str_vacio);
            $parametro->bindParam(":activo",$activo);
            $parametro->bindParam(":tipo_usuario",$tipo_usuario);

            
            if($parametro->execute())
            {
                return "listo";
            }
            else
            {
                return "error";
            }
        }
        else
        {
            return "ya existe la usuario";
            // $correoEmpleado = $existe->fetchAll(PDO::FETCH_ASSOC);
            // return $correoEmpleado;
        }
    }
    //////////////////////////////////////////////////////
    //////////////////////////////////////////////////////
    //////////////ACCIONES EMPLEADO///////////////////////
    //////////////////////////////////////////////////////


    //////Agregar Empleado///////
    public function agregar_empleado($nombreEmpleado,$apellidopEmpleado,$apellidomEmpleado,$domicilioEmpleado,$numeroextEmpleado,$coloniaEmpleado,$telefonoEmpleado,$puestoEmpleado,$correoEmpleado,$contrasenaEmpleado,$tipo_usuario)
    {
        $servidor = new Servidor();
        $conexion = $servidor->conectar();
        $sql_vericar = "SELECT correoEmpleado FROM empleado WHERE correoEmpleado=:correoEmpleado";
        $existe = $conexion->prepare($sql_vericar);
        $existe->bindParam(":correoEmpleado",$correoEmpleado);
        $existe->execute();
        $activo = "1";
        $str_vacio = " ";

        $numero = rand(100000,999999);
        $fecha = date("D/m/A H:i:s");
        $cifrado = sha1($contrasenaEmpleado);
        $cifrado = sha1($cifrado);

        if($existe->rowCount()==0)
        {
            $sql = "INSERT INTO empleado
            (nombreEmpleado,
            apellidopEmpleado,
            apellidomEmpleado,
            domicilioEmpleado,
            numeroextEmpleado,
            coloniaEmpleado,
            telefonoEmpleado,
            puestoEmpleado,
            correoEmpleado,
            contrasenaEmpleado,
            idSesion,
            activo,
            tipo_usuario
            ) 
            VALUE(:nombreEmpleado,
            :apellidopEmpleado,
            :apellidomEmpleado,
            :domicilioEmpleado,
            :numeroextEmpleado,
            :coloniaEmpleado,
            :telefonoEmpleado,
            :puestoEmpleado,
            :correoEmpleado,
            :contrasenaEmpleado,
            :idSesion,
            :activo,
            :tipo_usuario)";

            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":nombreEmpleado",$nombreEmpleado);
            $parametro->bindParam(":apellidopEmpleado",$apellidopEmpleado);
            $parametro->bindParam(":apellidomEmpleado",$apellidomEmpleado);
            $parametro->bindParam(":domicilioEmpleado",$domicilioEmpleado);
            $parametro->bindParam(":numeroextEmpleado",$numeroextEmpleado);
            $parametro->bindParam(":coloniaEmpleado",$coloniaEmpleado);
            $parametro->bindParam(":telefonoEmpleado",$telefonoEmpleado);
            $parametro->bindParam(":puestoEmpleado",$puestoEmpleado);
            $parametro->bindParam(":correoEmpleado",$correoEmpleado);
            $parametro->bindParam(":contrasenaEmpleado",$cifrado);
            $parametro->bindParam(":idSesion",$str_vacio);
            $parametro->bindParam(":activo",$activo);
            $parametro->bindParam(":tipo_usuario",$tipo_usuario);
            
            if($parametro->execute())
            {
                return "listo";
            }
            else
            {
                return "error";
            }
        }
        else
        {
            return "ya existe el usuario";
            // $correoEmpleado = $existe->fetchAll(PDO::FETCH_ASSOC);
            // return $correoEmpleado;
        }
    }


    /////////Desactivar empleados//////////
    public function desactivar_empleado($id,$idSesion,$id_empleado, $estado)
    {
        $verificacion  = $this->checarSesion($id,$idSesion);
        if($verificacion==$idSesion)
        {
            $sql = "UPDATE empleado SET activo=:activo WHERE id=:id";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":activo",$estado);
            $parametro->bindParam(":id",$id_empleado);
            if($parametro->execute())
            {
                return "listo";
            }
            else
            {
                return "error";
            }
        }
        else
        {
            return "error 500";
        }
    }

    ///////// Activar Empleados///////

    public function activar_empleado($id,$idSesion,$id_empleado,$estado)
    {
        $verificacion  = $this->checarSesion($id,$idSesion);
        if($verificacion==$idSesion)
        {
            $sql = "UPDATE empleado SET activo=:activo WHERE id=:id";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":activo",$estado);
            $parametro->bindParam(":id",$id_empleado);
            if($parametro->execute())
            {
                return json_encode("Listo");
            }
            else
            {
                return json_encode("error 400");
            }
        }
        else
        {
            return json_encode("error 500");
        }
    }


    ///// Tomar empleados activos mostrar tabla
    public function tomarEmpleadosActivos($id,$idSesion)
    {
        $verificacion  = $this->checarSesion($id,$idSesion);
        if($verificacion==$idSesion)
        {
            $sql = "SELECT id,nombreEmpleado,
            apellidopEmpleado,
            apellidomEmpleado,
            domicilioEmpleado,
            numeroextEmpleado,
            coloniaEmpleado,
            telefonoEmpleado,
            puestoEmpleado,
            correoEmpleado,
            idSesion,
            tipo_usuario,
            activo FROM empleado WHERE activo=:activo";
            $activo = "1";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":activo",$activo);
            $parametro->execute();
            $columnas = $parametro->rowCount();
            if($columnas==0)
            {
                return json_encode("error 400");
            }
            else
            {
                $datos = $parametro->fetchAll(PDO::FETCH_ASSOC);  
                return json_encode($datos);       
            }
        }  
        else
        {
            return "error 500";
        } 
    }

    public function tomarEmpleadosNoActivos($id,$idSesion)
    {
        $verificacion  = $this->checarSesion($id,$idSesion);
        if($verificacion==$idSesion)
        {
            $sql = "SELECT 
            id,
            nombreEmpleado,
            apellidopEmpleado,
            apellidomEmpleado,
            domicilioEmpleado,
            numeroextEmpleado,
            coloniaEmpleado,
            telefonoEmpleado,
            puestoEmpleado,
            correoEmpleado,
            idSesion,
            tipo_usuario,
            activo FROM empleado WHERE activo=:activo";
            $activo = "0";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":activo",$activo);
            $parametro->execute();
            $columnas = $parametro->rowCount();
            if($columnas==0)
            {
                return json_encode("error 400");
            }
            else
            {
                $datos = $parametro->fetchAll(PDO::FETCH_ASSOC);  
                return json_encode($datos);       
            }
        }  
        else
        {
            return json_encode("error 500");
        } 
    }







    //////////////////////////////////////////////////////
    //////////////////////////////////////////////////////
    //////////////ACCIONES EMPRESAS///////////////////////
    //////////////////////////////////////////////////////

    public function desactivar_empresa($id,$idSesion,$id_empleado, $estado){
        $verificacion  = $this->checarSesion($id,$idSesion);
        if($verificacion==$idSesion)
        {
            $sql = "UPDATE empresas SET activo=:activo WHERE id=:id";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":activo",$estado);
            $parametro->bindParam(":id",$id_empleado);
            if($parametro->execute())
            {
                return "listo";
            }
            else
            {
                return "error";
            }
        }
        else
        {
            return "error 500";
        }
    }


    ///////// Activar Empresas///////
    public function activar_empresa($id,$idSesion,$id_empleado,$estado){
        $verificacion  = $this->checarSesion($id,$idSesion);
        if($verificacion==$idSesion)
        {
            $sql = "UPDATE empresas SET activo=:activo WHERE id=:id";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":activo",$estado);
            $parametro->bindParam(":id",$id_empleado);
            if($parametro->execute())
            {
                return json_encode("Listo");
            }
            else
            {
                return json_encode("error 400");
            }
        }
        else
        {
            return json_encode("error 500");
        }
    }

    ///tomar empresas activas
    public function tomarEmpresasActivas($id,$idSesion){
        $verificacion  = $this->checarSesion($id,$idSesion);
        if($verificacion==$idSesion)
        {
            $sql = "SELECT
            id,
            rfcEmpresa,
            nombreEmpresa,
            razonsocialEmpresa,
            domicilioEmpresa,
            numerocalleEmpresa,
            coloniaEmpresa,
            cpEmpresa,
            municipioEmpresa,
            estadoEmpresa,
            telefonoEmpresa,
            correoEmpresa,
            idSesion,
            activo,
            tipo_usuario 
            FROM empresas WHERE activo=:activo";
            $activo = "1";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":activo",$activo);
            $parametro->execute();
            $columnas = $parametro->rowCount();
            if($columnas==0)
            {
                return json_encode("error 400");
            }
            else
            {
                $datos = $parametro->fetchAll(PDO::FETCH_ASSOC);  
                return json_encode($datos);       
            }
        }  
        else
        {
            return json_encode("error 500");
        } 
    }


    ///tomar empresas activas
    public function tomarEmpresasNoActivas($id,$idSesion){
        $verificacion  = $this->checarSesion($id,$idSesion);
        if($verificacion==$idSesion)
        {
            $sql = "SELECT
            id,
            rfcEmpresa,
            nombreEmpresa,
            razonsocialEmpresa,
            domicilioEmpresa,
            numerocalleEmpresa,
            coloniaEmpresa,
            cpEmpresa,
            municipioEmpresa,
            estadoEmpresa,
            telefonoEmpresa,
            correoEmpresa,
            idSesion,
            activo,
            tipo_usuario 
            FROM empresas WHERE activo=:activo";
            $activo = "0";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":activo",$activo);
            $parametro->execute();
            $columnas = $parametro->rowCount();
            if($columnas==0)
            {
                return json_encode("error 400");
            }
            else
            {
                $datos = $parametro->fetchAll(PDO::FETCH_ASSOC);  
                return json_encode($datos);       
            }
        }  
        else
        {
            return json_encode("error 500");
        } 
    }


        ///tomar empresas activas
        public function tomarEmpresasPendientes($id,$idSesion){
            $verificacion  = $this->checarSesion($id,$idSesion);
            if($verificacion==$idSesion)
            {
                $sql = "SELECT
                id,
                rfcEmpresa,
                nombreEmpresa,
                razonsocialEmpresa,
                domicilioEmpresa,
                numerocalleEmpresa,
                coloniaEmpresa,
                cpEmpresa,
                municipioEmpresa,
                estadoEmpresa,
                telefonoEmpresa,
                correoEmpresa,
                idSesion,
                activo,
                tipo_usuario 
                FROM empresas WHERE activo=:activo";
                $activo = "2";
                $modelo = new Servidor();
                $conexion = $modelo->conectar();
                $parametro = $conexion->prepare($sql);
                $parametro->bindParam(":activo",$activo);
                $parametro->execute();
                $columnas = $parametro->rowCount();
                if($columnas==0)
                {
                    return json_encode("error 400");
                }
                else
                {
                    $datos = $parametro->fetchAll(PDO::FETCH_ASSOC);  
                    return json_encode($datos);       
                }
            }  
            else
            {
                return json_encode("error 500");
            } 
        }


    public function agregar_peticion_empresa($rfcEmpresa,$nombreEmpresa,$razonsocialEmpresa,$domicilioEmpresa,$numerocalleEmpresa,$coloniaEmpresa,$cpEmpresa,$municipioEmpresa,$estadoEmpresa,$telefonoEmpresa,$correoEmpresa,$contrasenaEmpresa)
    {
        $servidor = new Servidor();
        $conexion = $servidor->conectar();
        $sql_vericar = "SELECT rfcEmpresa  FROM empresas WHERE rfcEmpresa=:rfcEmpresa";
        $existe = $conexion->prepare($sql_vericar);
        $existe->bindParam(":rfcEmpresa",$rfcEmpresa);
        $existe->execute();
        $activo = "2";
        $tipo_usuario = "EMPRESA";
        $str_vacio = " ";
        $numero = rand(100000,999999);
        $fecha = date("D/m/A H:i:s");
        $cifrado = sha1($contrasenaEmpresa);
        $cifrado = sha1($cifrado);


        if($existe->rowCount()==0)
        {
            $sql = "INSERT INTO empresas
            (rfcEmpresa,
            nombreEmpresa,
            razonsocialEmpresa,
            domicilioEmpresa,
            numerocalleEmpresa,
            coloniaEmpresa,
            cpEmpresa,
            municipioEmpresa,
            estadoEmpresa,
            telefonoEmpresa,
            correoEmpresa,
            contrasenaEmpresa,
            idSesion,
            activo,
            tipo_usuario
            ) 
            VALUE(
            :rfcEmpresa,
            :nombreEmpresa,
            :razonsocialEmpresa,
            :domicilioEmpresa,
            :numerocalleEmpresa,
            :coloniaEmpresa,
            :cpEmpresa,
            :municipioEmpresa,
            :estadoEmpresa,
            :telefonoEmpresa,
            :correoEmpresa,
            :contrasenaEmpresa,
            :idSesion,
            :activo,
            :tipo_usuario)";

            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":rfcEmpresa",$rfcEmpresa);
            $parametro->bindParam(":nombreEmpresa",$nombreEmpresa);
            $parametro->bindParam(":razonsocialEmpresa",$razonsocialEmpresa);
            $parametro->bindParam(":domicilioEmpresa",$domicilioEmpresa);
            $parametro->bindParam(":numerocalleEmpresa",$numerocalleEmpresa);
            $parametro->bindParam(":coloniaEmpresa",$coloniaEmpresa);
            $parametro->bindParam(":cpEmpresa",$cpEmpresa);
            $parametro->bindParam(":municipioEmpresa",$municipioEmpresa);
            $parametro->bindParam(":estadoEmpresa",$estadoEmpresa);
            $parametro->bindParam(":telefonoEmpresa",$telefonoEmpresa);
            $parametro->bindParam(":correoEmpresa",$correoEmpresa);
            $parametro->bindParam(":contrasenaEmpresa",$cifrado);
            $parametro->bindParam(":idSesion",$str_vacio);
            $parametro->bindParam(":activo",$activo);
            $parametro->bindParam(":tipo_usuario",$tipo_usuario);
            
            if($parametro->execute())
            {
                return "listo";
            }
            else
            {
                return "error";
            }
        }
        else
        {
            return "ya existe la empresa";
            // $correoEmpleado = $existe->fetchAll(PDO::FETCH_ASSOC);
            // return $correoEmpleado;
        }
    }


    public function agregar_empresa_dashboard($rfcEmpresa,$nombreEmpresa,$razonsocialEmpresa,$domicilioEmpresa,$numerocalleEmpresa,$coloniaEmpresa,$cpEmpresa,$municipioEmpresa,$estadoEmpresa,$telefonoEmpresa,$correoEmpresa,$contrasenaEmpresa)
    {
        $servidor = new Servidor();
        $conexion = $servidor->conectar();
        $sql_vericar = "SELECT rfcEmpresa  FROM empresas WHERE rfcEmpresa=:rfcEmpresa";
        $existe = $conexion->prepare($sql_vericar);
        $existe->bindParam(":rfcEmpresa",$rfcEmpresa);
        $existe->execute();
        $activo = "1";
        $tipo_usuario = "EMPRESA";
        $str_vacio = " ";
        $numero = rand(100000,999999);
        $fecha = date("D/m/A H:i:s");
        $cifrado = sha1($contrasenaEmpresa);
        $cifrado = sha1($cifrado);


        if($existe->rowCount()==0)
        {
            $sql = "INSERT INTO empresas
            (rfcEmpresa,
            nombreEmpresa,
            razonsocialEmpresa,
            domicilioEmpresa,
            numerocalleEmpresa,
            coloniaEmpresa,
            cpEmpresa,
            municipioEmpresa,
            estadoEmpresa,
            telefonoEmpresa,
            correoEmpresa,
            contrasenaEmpresa,
            idSesion,
            activo,
            tipo_usuario
            ) 
            VALUE(
            :rfcEmpresa,
            :nombreEmpresa,
            :razonsocialEmpresa,
            :domicilioEmpresa,
            :numerocalleEmpresa,
            :coloniaEmpresa,
            :cpEmpresa,
            :municipioEmpresa,
            :estadoEmpresa,
            :telefonoEmpresa,
            :correoEmpresa,
            :contrasenaEmpresa,
            :idSesion,
            :activo,
            :tipo_usuario)";

            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":rfcEmpresa",$rfcEmpresa);
            $parametro->bindParam(":nombreEmpresa",$nombreEmpresa);
            $parametro->bindParam(":razonsocialEmpresa",$razonsocialEmpresa);
            $parametro->bindParam(":domicilioEmpresa",$domicilioEmpresa);
            $parametro->bindParam(":numerocalleEmpresa",$numerocalleEmpresa);
            $parametro->bindParam(":coloniaEmpresa",$coloniaEmpresa);
            $parametro->bindParam(":cpEmpresa",$cpEmpresa);
            $parametro->bindParam(":municipioEmpresa",$municipioEmpresa);
            $parametro->bindParam(":estadoEmpresa",$estadoEmpresa);
            $parametro->bindParam(":telefonoEmpresa",$telefonoEmpresa);
            $parametro->bindParam(":correoEmpresa",$correoEmpresa);
            $parametro->bindParam(":contrasenaEmpresa",$cifrado);
            $parametro->bindParam(":idSesion",$str_vacio);
            $parametro->bindParam(":activo",$activo);
            $parametro->bindParam(":tipo_usuario",$tipo_usuario);
            
            if($parametro->execute())
            {
                return "listo";
            }
            else
            {
                return "error";
            }
        }
        else
        {
            return "ya existe la empresa";
            // $correoEmpleado = $existe->fetchAll(PDO::FETCH_ASSOC);
            // return $correoEmpleado;
        }
    }






    //////////////////////////////////////////////////////
    //////////////////////////////////////////////////////
    //////////////ACCIONES lOGIN//////////////////////////
    //////////////////////////////////////////////////////

    public function inicio_sesion($correo,$contra)
    {
        $contraCifrada = sha1($contra);
        $contraCifrada = sha1($contraCifrada);
        $randos= rand(100000,999999);
        $fecha = date("D/m/A H:i:s");
        $cifrado = sha1($correo.$fecha.$randos);



        $sql_admin = "SELECT correoAdministrador FROM administrador WHERE correoAdministrador=:correoAdministrador AND contrasenaAdministrador=:contrasenaAdministrador";
        $modelo = new Servidor();
        $conexion = $modelo->conectar();
        $parametro_admin = $conexion->prepare($sql_admin);
        $parametro_admin->bindParam(":correoAdministrador",$correo);
        $parametro_admin->bindParam(":contrasenaAdministrador",$contraCifrada);
        $parametro_admin->execute();
        $columnas_admin = $parametro_admin->rowCount();


        if($columnas_admin==0)
        {
            $sql = "SELECT correoEmpleado FROM empleado WHERE correoEmpleado=:correoEmpleado AND contrasenaEmpleado=:contrasenaEmpleado";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":correoEmpleado",$correo);
            $parametro->bindParam(":contrasenaEmpleado",$contraCifrada);
            $parametro->execute();
            $columnas = $parametro->rowCount();


            if($columnas==0)
            {
                $sql2 = "SELECT correoEmpresa FROM empresas WHERE correoEmpresa=:correoEmpresa AND contrasenaEmpresa=:contrasenaEmpresa";
                $parametro2 = $conexion->prepare($sql2);
                $parametro2->bindParam(":correoEmpresa",$correo);
                $parametro2->bindParam(":contrasenaEmpresa",$contraCifrada);
                $parametro2->execute();
                $columnas2 = $parametro2 ->rowCount();
                if($columnas2==0)
                {
                    return json_encode("No existe el usuario registrado");
                }
                else
                {
                    $sql6 = "SELECT activo FROM empresas WHERE correoEmpresa=:correoEmpresa AND contrasenaEmpresa=:contrasenaEmpresa";
                    $parametro6 = $conexion->prepare($sql6);
                    $parametro6->bindParam(":correoEmpresa",$correo);
                    $parametro6->bindParam(":contrasenaEmpresa",$contraCifrada);
                    $parametro6->execute();
                    $datos1= $parametro6->fetchAll(PDO::FETCH_ASSOC);
                    $estado_activo1 = $datos1[0]['activo'];
                    if($estado_activo1==1)
                    {
                        $sql7 = "UPDATE empresas SET idSesion=:idSesion WHERE correoEmpresa=:correoEmpresa AND contrasenaEmpresa=:contrasenaEmpresa";
                        $parametro7 = $conexion->prepare($sql7);
                        $parametro7->bindParam(":idSesion",$cifrado);
                        $parametro7->bindParam(":correoEmpresa",$correo);
                        $parametro7->bindParam(":contrasenaEmpresa",$contraCifrada);
                        if($parametro7->execute())
                        {
                            $sql8 = "SELECT 
                            id,
                            rfcEmpresa,
                            nombreEmpresa,
                            razonsocialEmpresa,
                            domicilioEmpresa,
                            numerocalleEmpresa,
                            coloniaEmpresa,
                            cpEmpresa,
                            municipioEmpresa,
                            estadoEmpresa,
                            telefonoEmpresa,
                            correoEmpresa,
                            idSesion,
                            tipo_usuario FROM empresas WHERE correoEmpresa=:correoEmpresa AND contrasenaEmpresa=:contrasenaEmpresa";
                            $parametro8 = $conexion->prepare($sql8);
                            $parametro8->bindParam(":correoEmpresa",$correo);
                            $parametro->bindParam(":contrasenaEmpresa",$contraCifrada);
                            if($parametro8->execute())
                            {
                                $datos1 = $parametro8->fetchAll(PDO::FETCH_ASSOC);
                                $_SESSION['idSesion'] = $datos1[0]['idSesion'];
                                $_SESSION['idUsuario'] = $datos1[0]['id'];
        
                                return json_encode($datos1);
                            }
                        }
                    }
                    else
                    {
                        return json_encode ("inicio bloqueado");
                    }
                }
            }
            else
            {
                
                $sql3 = "SELECT activo FROM empleado WHERE correoEmpleado=:correoEmpleado AND contrasenaEmpleado=:contrasenaEmpleado";
                $parametro3 = $conexion->prepare($sql3);
                $parametro3->bindParam(":correoEmpleado",$correo);
                $parametro3->bindParam(":contrasenaEmpleado",$contraCifrada);
                $parametro3->execute();
                $datos= $parametro3->fetchAll(PDO::FETCH_ASSOC);
                $estado_activo = $datos[0]['activo'];
                if($estado_activo==1)
                {
                    $sql4 = "UPDATE empleado SET idSesion=:idSesion WHERE correoEmpleado=:correoEmpleado AND contrasenaEmpleado=:contrasenaEmpleado";
                    $parametro4 = $conexion->prepare($sql4);
                    $parametro4->bindParam(":idSesion",$cifrado);
                    $parametro4->bindParam(":correoEmpleado",$correo);
                    $parametro4->bindParam(":contrasenaEmpleado",$contraCifrada);
                    if($parametro4->execute())
                    {
                        $sql5 = "SELECT id,nombreEmpleado,
                        apellidopEmpleado,
                        apellidomEmpleado,
                        domicilioEmpleado,
                        numeroextEmpleado,
                        coloniaEmpleado,
                        telefonoEmpleado,
                        puestoEmpleado,
                        correoEmpleado,
                        idSesion,
                        tipo_usuario FROM empleado WHERE correoEmpleado=:correoEmpleado AND contrasenaEmpleado=:contrasenaEmpleado";
                        $parametro5 = $conexion->prepare($sql5);
                        $parametro5->bindParam(":correoEmpleado",$correo);
                        $parametro5->bindParam(":contrasenaEmpleado",$contraCifrada);
                        if($parametro5->execute())
                        {
                            $datos = $parametro5->fetchAll(PDO::FETCH_ASSOC);
                            $_SESSION['idSesion'] = $datos[0]['idSesion'];
                            $_SESSION['idUsuario'] = $datos[0]['id'];
    
                            return json_encode($datos);
                        }
                    }
                }
                else
                {
                    return json_encode("Inicio bloqueado");
                }
                
            }

        }
        else
        {
            $sql_admin1 = "SELECT activo FROM administrador WHERE correoAdministrador=:correoAdministrador AND contrasenaAdministrador=:contrasenaAdministrador";
            $parametro_admin1 = $conexion->prepare($sql_admin1);
            $parametro_admin1->bindParam(":correoAdministrador",$correo);
            $parametro_admin1->bindParam(":contrasenaAdministrador",$contraCifrada);
            $parametro_admin1->execute();
            $datos_admin= $parametro_admin1->fetchAll(PDO::FETCH_ASSOC);
            $estado_activo_admin = $datos_admin[0]['activo'];
            if($estado_activo_admin==1)
            {
                $sql_admin2 = "UPDATE administrador SET idSesion=:idSesion WHERE correoAdministrador=:correoAdministrador AND contrasenaAdministrador=:contrasenaAdministrador";
                $parametro_admin2 = $conexion->prepare($sql_admin2);
                $parametro_admin2->bindParam(":idSesion",$cifrado);
                $parametro_admin2->bindParam(":correoAdministrador",$correo);
                $parametro_admin2->bindParam(":contrasenaAdministrador",$contraCifrada);
                if($parametro_admin2->execute())
                {
                    $sql_admin3 = "SELECT 
                    id,
                    nombreAdministrador,
                    apellidopAdministrador,
                    apellidomAdministrador,
                    domicilioAdministrador,
                    numeroextAdministrador,
                    coloniaAdministrador,
                    telefonoAdministrador,
                    puestoAdministrador,
                    correoAdministrador,
                    idSesion,
                    tipo_usuario FROM administrador WHERE correoAdministrador=:correoAdministrador AND contrasenaAdministrador=:contrasenaAdministrador";
                    $parametro_admin3 = $conexion->prepare($sql_admin3);
                    $parametro_admin3->bindParam(":correoAdministrador",$correo);
                    $parametro_admin3->bindParam(":contrasenaAdministrador",$contraCifrada);
                    if($parametro_admin3->execute())
                    {
                        $datos_admin = $parametro_admin3->fetchAll(PDO::FETCH_ASSOC);
                        $_SESSION['idSesion'] = $datos_admin[0]['idSesion'];
                        $_SESSION['idUsuario'] = $datos_admin[0]['id'];

                        return json_encode($datos_admin);
                    }
                }
            }
            else
            {
                return json_encode("Inicio bloqueado");
            }

        }
    }

    public function checarSesion($id,$sesion)
    {
        $sql = "SELECT idSesion FROM administrador WHERE idSesion=:idSesion AND id=:id";
        $modelo = new Servidor();
        $conexion = $modelo->conectar();
        $parametro = $conexion->prepare($sql);
        $parametro->bindParam(":idSesion",$sesion);
        $parametro->bindParam(":id",$id);
        $parametro->execute();
        $columnas = $parametro->rowCount();
        if($columnas==0)
        {
            return "error";
        }
        else
        {
            $verificacion = $parametro->fetchAll(PDO::FETCH_ASSOC);
            $id_verificacion = $verificacion[0]['idSesion'];
            if($id_verificacion==$sesion)
            {
                return $id_verificacion;
            }
            else
            {
                return "error";
            }
        }   
    }
    
    public function editar_empleado($idUsuario,$idSesion,$id,$tipo,$valor)
    {
            $verificacion  = $this->checarSesion($idUsuario,$idSesion);
            if($verificacion==$idSesion)
            {
                $modelo = new Servidor();
                $conexion = $modelo->conectar();
                $parametro="";

                if($tipo=="nombre")
                {
                    $sql = "UPDATE empleado  SET nombreEmpleado=:nombre WHERE id=:id";
                    $parametro = $conexion->prepare($sql);
                    $parametro->bindParam(":nombre",$valor);
                    $parametro->bindParam(":id",$id);
                    if($parametro->execute())
                    {
                        return "listo";
                    }
                }
                if($tipo=="apellidoP")
                {
                    $sql = "UPDATE empleado  SET apellidopEmpleado=:dato WHERE id=:id";
                    $parametro = $conexion->prepare($sql);
                    $parametro->bindParam(":dato",$valor);
                    $parametro->bindParam(":id",$id);
                    if($parametro->execute())
                    {
                        return "listo";
                    }
                }
                if($tipo=="apellidoM")
                {
                    $sql = "UPDATE empleado  SET apellidomEmpleado=:dato WHERE id=:id";
                    $parametro = $conexion->prepare($sql);
                    $parametro->bindParam(":dato",$valor);
                    $parametro->bindParam(":id",$id);
                    if($parametro->execute())
                    {
                        return "listo";
                    }
                }
                if($tipo=="domicilio")
                {
                    $sql = "UPDATE empleado  SET domicilioEmpleado=:dato WHERE id=:id";
                    $parametro = $conexion->prepare($sql);
                    $parametro->bindParam(":dato",$valor);
                    $parametro->bindParam(":id",$id);
                    if($parametro->execute())
                    {
                        return "listo";
                    }
                }
                if($tipo=="numExt")
                {
                    $sql = "UPDATE empleado  SET numeroextEmpleado=:dato WHERE id=:id";
                    $parametro = $conexion->prepare($sql);
                    $parametro->bindParam(":dato",$valor);
                    $parametro->bindParam(":id",$id);
                    if($parametro->execute())
                    {
                        return "listo";
                    }
                }
                if($tipo=="colonia")
                {
                    $sql = "UPDATE empleado  SET coloniaEmpleado=:dato WHERE id=:id";
                    $parametro = $conexion->prepare($sql);
                    $parametro->bindParam(":dato",$valor);
                    $parametro->bindParam(":id",$id);
                    if($parametro->execute())
                    {
                        return "listo";
                    }
                }
                if($tipo=="telefono")
                {
                    $sql = "UPDATE empleado  SET telefonoEmpleado=:dato WHERE id=:id";
                    $parametro = $conexion->prepare($sql);
                    $parametro->bindParam(":dato",$valor);
                    $parametro->bindParam(":id",$id);
                    if($parametro->execute())
                    {
                        return "listo";
                    }
                }
                if($tipo=="puesto")
                {
                    $sql = "UPDATE empleado  SET puestoEmpleado=:dato WHERE id=:id";
                    $parametro = $conexion->prepare($sql);
                    $parametro->bindParam(":dato",$valor);
                    $parametro->bindParam(":id",$id);
                    if($parametro->execute())
                    {
                        return "listo";
                    }
                }
                if($tipo=="correo")
                {
                    $sql = "UPDATE empleado  SET correoEmpleado=:dato WHERE id=:id";
                    $parametro = $conexion->prepare($sql);
                    $parametro->bindParam(":dato",$valor);
                    $parametro->bindParam(":id",$id);
                    if($parametro->execute())
                    {
                        return "listo";
                    }
                }
            }
            else
            {
                return "error";
            }

    }

    public function  eliminar_usuario($idUsuario,$idSesion,$id)
    {

        $verificacion  = $this->checarSesion($idUsuario,$idSesion);
        if($verificacion==$idSesion)
        {
            $sql = "DELETE FROM empleado WHERE id=:id";
            $modelo = new Servidor();
            $conexion = $modelo->conectar();
            
            $parametro = $conexion->prepare($sql);
            $parametro->bindParam(":id",$id);
            if($parametro->execute())
            {
                return "listo";
            }
            else
            {
                return "error 400";
            }
        }
        else
        {
            return "error";
        }
    }

    public function crear_cookie_vista($idUsuario,$idSesion,$valor)
    {
        $verificacion  = $this->checarSesion($idUsuario,$idSesion);
        if($verificacion==$idSesion)
        {
            // return $valor;
            setcookie("vista-actual", $valor, time()+40000,"/","localhost",true,true);   
            return "listo";
        }
        else
        {
            return "error";
        }
    }
}
?>