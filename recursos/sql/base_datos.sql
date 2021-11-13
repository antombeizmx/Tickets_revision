CREATE DATABASE tickets_db;
CREATE TABLE empleado(
	id int (11) PRIMARY KEY AUTO_INCREMENT,
	nombreEmpleado varchar(200),
	apellidopEmpleado varchar(200),
	apellidomEmpleado varchar(200),
	domicilioEmpleado varchar(200),
	numeroextEmpleado varchar(200),
	coloniaEmpleado varchar(200),
	telefonoEmpleado varchar(200),
	puestoEmpleado varchar(200),
	correoEmpleado varchar(200),
	contrasenaEmpleado varchar(200),
	idSesion varchar(200),
	activo varchar(200),
	tipo_usuario varchar(200)
);
CREATE TABLE empresas(
	id int (11) PRIMARY KEY AUTO_INCREMENT,
	rfcEmpresa varchar(200),
	nombreEmpresa varchar(200),
	razonsocialEmpresa varchar(200),
	domicilioEmpresa varchar(200),
	numerocalleEmpresa varchar(200),
	coloniaEmpresa varchar(200),
	cpEmpresa varchar(200),
	municipioEmpresa varchar(200),
	estadoEmpresa varchar(200),
	telefonoEmpresa varchar(200),
	correoEmpresa varchar(200),
	contrasenaEmpresa varchar(200),
	idSesionEmpresa varchar(200),
	activoEmpresa varchar(200),
	tipousuarioEmpresa varchar(200)
);
CREATE TABLE administrador(
	id int (11) PRIMARY KEY AUTO_INCREMENT,
	nombreAdministrador varchar(200),
	apellidopAdministrador varchar(200),
	apellidomAdministrador varchar(200),
	domicilioAdministrador varchar(200),
	numeroextAdministrador varchar(200),
	coloniaAdministrador varchar(200),
	telefonoAdministrador varchar(200),
	puestoAdministrador varchar(200),
	correoAdministrador varchar(200),
	contrasenaAdministrador varchar(200),
	idSesion varchar(200),
	activo varchar(200),
	tipo_usuario varchar(200)
)
