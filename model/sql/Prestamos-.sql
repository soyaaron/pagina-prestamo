CREATE DATABASE Prestamos;
USE Prestamos;

CREATE TABLE usuario(
	id_usuario INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(55) NOT NULL,  
    apellido VARCHAR(55) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    cedula varchar (14) NOT NULL,
    sexo CHAR NOT NULL CHECK(sexo(F,M)), -- Solo se aceptaran dos valores F(Femenino) M (Masculino) input tipo radio.
    estado_civil VARCHAR(55) NOT NULL,
    nacionalidad VARCHAR(55) NOT NULL,
    direccion_calle VARCHAR(55) NOT NULL,
    apartamento VARCHAR(55) NOT NULL,
    provincia VARCHAR(55) NOT NULL,
    municipio VARCHAR(55) NOT NULL,
    correo_electronico VARCHAR(55) NOT NULL,
    pass varchar (55) not null,
    estrellas INT, -- Valores del 1 al 4
    CONSTRAINT PK_usuario PRIMARY KEY (id_usuario)
);

CREATE TABLE pariente(
	id_pariente INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(55) NOT NULL,
    apellido VARCHAR(55) NOT NULL,
    parentesco VARCHAR(55) NOT NULL,
    telefono Varchar(10) NOT NULL,
    id_usuario INT NOT NULL,
    CONSTRAINT PK_pariente PRIMARY KEY (id_pariente),
    CONSTRAINT FK_usuario_pariente FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE telefono(
	id_telefono INT NOT NULL AUTO_INCREMENT,
    telefono Varchar (12) NOT NULL,
    id_usuario INT NOT NULL,
    CONSTRAINT PK_telefono PRIMARY KEY (id_telefono),
    CONSTRAINT FK_usuario_telefono FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE trabajo(
	id_trabajo INT NOT NULL AUTO_INCREMENT,
    empresa VARCHAR(55),
    actividad_laboral VARCHAR(55),
    telefono VARCHAR(12),
    tiempo_anios INT,
    tiempo_meses INT NOT NULL, -- Tiempo laborando
	ingreso_mensual DECIMAL(19,2) NOT NULL,
	direccion_calle VARCHAR(55),
	provincia VARCHAR(55),
	municipio VARCHAR(55),
    id_usuario INT NOT NULL,
    CONSTRAINT PK_trabajo PRIMARY KEY (id_trabajo),
    CONSTRAINT FK_usuario_trabajo FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE solicitud (
    id_solicitud INT NOT NULL AUTO_INCREMENT,
    fecha DATE NOT NULL,
    monto INT NOT NULL,
    tiempo DECIMAL(19 , 4 ) NOT NULL,
    estado VARCHAR(9) NOT NULL,
    descripcion TEXT NOT NULL,
    id_usuario_solicitante INT NOT NULL,
    id_usuario_garante INT not null,
    CONSTRAINT PK_solicitud PRIMARY KEY (id_solicitud),
    CONSTRAINT FK_usuario_solicitante_solicitud FOREIGN KEY (id_usuario_solicitante)
        REFERENCES usuario (id_usuario),
    CONSTRAINT FK_usuario_garante_solicitud FOREIGN KEY (id_usuario_garante)
        REFERENCES usuario (id_usuario)
);

CREATE TABLE tasa(
	id_tasa INT NOT NULL AUTO_INCREMENT,
    porcentaje INT NOT NULL,
    identificador VARCHAR(3) NOT NULL, -- Para fines de codigo
    descripcion TEXT NOT NULL,
    CONSTRAINT PK_tasa PRIMARY KEY (id_tasa)
);

CREATE TABLE prestamo(
	id_prestamo INT NOT NULL AUTO_INCREMENT,
	monto INT NOT NULL, -- Cantidad prestada,
	monto_pagar DECIMAL(19,4) NOT NULL, -- Cantidad a pagar (Producto de un Calculo: Monto.Tasa.Tiempo) 
	fecha DATE NOT NULL,
	tiempo INT NOT NULL, -- Numero de meses (cuotas) del prestamo
	estado BOOLEAN NOT NULL, -- 1(TRUE = Activo), 0(FALSE = Finalizado)
	descripcion TEXT NOT NULL,
    id_tasa INT NOT NULL,
    id_solicitud INT NOT NULL,
    id_usuario_solicitante INT NOT NULL,
    id_usuario_garante INT not null,
    CONSTRAINT PK_prestamo PRIMARY KEY (id_prestamo),
    CONSTRAINT FK_tasa_prestamo FOREIGN KEY (id_tasa) REFERENCES tasa(id_tasa),
    CONSTRAINT FK_solicitud_prestamo FOREIGN KEY (id_solicitud) REFERENCES solicitud(id_solicitud),
    CONSTRAINT FK_usuario_solicitante_prestamo FOREIGN KEY (id_usuario_solicitante) REFERENCES usuario(id_usuario),
    CONSTRAINT FK_usuario_garante_prestamo FOREIGN KEY (id_usuario_garante) REFERENCES usuario(id_usuario)
);

CREATE TABLE cuota(
	id_cuota INT NOT NULL AUTO_INCREMENT,
    numero INT NOT NULL, -- numeracion de la cuota (cuota #1, #5, #13, etc.) (Se ingresan tantas cuotas como meses tenga el prestamo)
	estado BOOLEAN NOT NULL, -- 1(TRUE = Pagada), 0(FALSE = Pendiente)
	fecha_pago DATE NOT NULL, -- Fecha en la que debe pagar
    fecha_pagado DATE,-- fecha en la que pago
    dias_atraso_pago INT NOT NULL,
	monto DECIMAL(19,4) NOT NULL,
    monto_mora DECIMAL(19,4) NOT NULL,
    monto_total DECIMAL(19,4) NOT NULL, -- Producto del calculo entre monto y monto mora
	monto_pagado DECIMAL(19,4) NOT NULL,
	monto_restante DECIMAL(19,4) NOT NULL,	
    id_prestamo int NOT NULL,
    CONSTRAINT PK_cuota PRIMARY KEY (id_cuota),
    CONSTRAINT FK_prestamo_cuota FOREIGN KEY (id_prestamo) REFERENCES prestamo(id_prestamo)
);

INSERT INTO tasa (porcentaje,identificador,descripcion) VALUES (35,'A','para menos o igual a 25,000 pesos');
INSERT INTO tasa (porcentaje,identificador,descripcion) VALUES (30,'B','para mas de 25,000  y menos de o igual a 75,000 pesos');
INSERT INTO tasa (porcentaje,identificador,descripcion) VALUES (25,'C','para mas de 75,000 y menos o igual a 125,000 pesos');
INSERT INTO tasa (porcentaje,identificador,descripcion) VALUES (20,'D','para mas de 125,000 y menos o igual a 250,000 pesos');
INSERT INTO tasa (porcentaje,identificador,descripcion) VALUES (15,'E','para mas de 250,000 y menos o igual a 500,000 pesos');
