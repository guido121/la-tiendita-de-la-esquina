
CREATE TABLE bloqueado
( 
	bloqueadoId          bigint(20) NOT NULL AUTO_INCREMENT,
	codigoEmpresa        bigint(20)  NOT NULL ,
	inicioBloqueo        datetime  NULL ,
	finBloqueo           datetime  NULL ,
	PRIMARY KEY (bloqueadoId)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE categoriaProducto
( 
	codigoCategoria      bigint(20) NOT NULL AUTO_INCREMENT ,
	nombre               varchar(100)  NULL ,
	descripcion          varchar(200)  NULL ,
	PRIMARY KEY (codigoCategoria)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE categoriaTemaAyuda
( 
	codigoCategoriaTema  bigint(20) NOT NULL AUTO_INCREMENT ,
	nombreCategoriaTema  varchar(100)  NULL ,
	descripcionTema      varchar(200)  NULL,
	PRIMARY KEY (codigoCategoriaTema)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE temaAyuda
( 
	codigoAyuda          bigint(20) NOT NULL AUTO_INCREMENT ,
	codigoCategoriaTema  bigint(20)  NOT NULL ,
	respuestaPregunta    varchar(100)  NULL ,
	enunciadoPregunta    varchar(200)  NULL,
	PRIMARY KEY (codigoAyuda)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 



CREATE TABLE contrasenia
( 
	codigoContrasenia    bigint(20) NOT NULL AUTO_INCREMENT ,
	codigoUsuario        bigint(20)  NOT NULL ,
	contrasenia          varchar(100)  NULL ,
	preguntaSecreta      varchar(100)  NULL ,
	respuesta            varchar(50)  NULL,
	flagContraseniaActual bit NULL,
	PRIMARY KEY (codigoContrasenia)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE empresa
( 
	codigoEmpresa        bigint(20) NOT NULL AUTO_INCREMENT ,
	razonSocial          varchar(100)  NULL ,
	ruc                  char(11)  NULL ,
	telefono             varchar(10)  NULL ,
	direccionFiscal      varchar(200)  NULL ,
	correo               varchar(100)  NULL ,
	flagContactoCorreo   bit  NULL,
	PRIMARY KEY (codigoEmpresa)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE grupo
( 
	codigoGrupo          bigint(20) NOT NULL AUTO_INCREMENT ,
	nombreGrupo          varchar(100)  NULL ,
	descripcion          varchar(200)  NULL ,
	PRIMARY KEY (codigoGrupo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE grupo_privilegio
( 
	codigoPrivilegio     bigint(20) NOT NULL,
	codigoGrupo          bigint(20)  NOT NULL ,
	fechaAsignamiento    datetime  NULL ,
	PRIMARY KEY (codigoPrivilegio,codigoGrupo)
);


CREATE TABLE grupo_Usuario
( 
	codigoGrupo          bigint(20) NOT NULL,
	codigoUsuario        bigint(20)  NOT NULL ,
	fechaAsignamiento    datetime  NULL ,
	PRIMARY KEY (codigoGrupo,codigoUsuario)
); 


CREATE TABLE intentoFallido
( 
	codigoIntentoFallido bigint(20) NOT NULL AUTO_INCREMENT ,
	codigoUsuario        bigint(20)  NOT NULL ,
	fechaHoraIntentoFallido datetime  NULL,
	PRIMARY KEY (codigoIntentoFallido)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE marca
( 
	codigoMarca          bigint(20) NOT NULL AUTO_INCREMENT ,
	nombreMarca          varchar(100)  NULL ,
	descripcion          varchar(200)  NULL,
	PRIMARY KEY (codigoMarca)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE mensajeContacto
( 
	codigoMensaje        bigint(20) NOT NULL AUTO_INCREMENT ,
	nombre               varchar(100)  NULL ,
	correo               varchar(100)  NULL ,
	mensaje              varchar(300)  NULL , 
	PRIMARY KEY (codigoMensaje)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE modalidadDePago
( 
	codigoModalidadPago  bigint(20) NOT NULL AUTO_INCREMENT ,
	nombre               varchar(100)  NULL ,
	descripcion          varchar(200)  NULL ,
	PRIMARY KEY (codigoModalidadPago)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 



CREATE TABLE oferta
( 
	codigoOferta         bigint(20) NOT NULL AUTO_INCREMENT ,
	codigoProducto       bigint(20)  NOT NULL ,
	direccionImagen      varchar(300)  NULL ,
	fechaFinOferta       datetime  NULL ,
	fechaInicioOferta    datetime  NULL ,
	precioOferta         decimal(5,2)  NULL,
	PRIMARY KEY (codigoOferta)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 



CREATE TABLE privilegio
( 
	codigoPrivilegio     bigint(20) NOT NULL AUTO_INCREMENT ,
	nombreRol            varchar(100)  NULL ,
	direccionRecurso     varchar(200)  NULL ,
	PRIMARY KEY (codigoPrivilegio)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 



CREATE TABLE producto
( 
	codigoProducto       bigint(20) NOT NULL AUTO_INCREMENT ,
	nombreProducto       varchar(100)  NULL ,
	codigoMarca          bigint(20)  NOT NULL ,
	codigosubCategoria      bigint(20)  NOT NULL ,
	precioUnitario       decimal(6,2)  NULL ,
	precioCaja           decimal(6,2)  NULL ,
	unidadesCaja         decimal(6,1)  NULL ,
	stock                decimal(6,1)  NULL ,
	unidadMedida         varchar(5)  NULL ,
	tamanioUnidad        decimal(6,2)  NULL ,
	direccionImagen      varchar(30)  NULL ,
	PRIMARY KEY (codigoProducto)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE usuario
( 
	codigoUsuario        bigint(20) NOT NULL AUTO_INCREMENT ,
	codigoEmpresa        bigint(20)  NOT NULL ,
	nombreUsuario        char(11)  NULL ,
	PRIMARY KEY (codigoUsuario)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE venta
( 
	codigoVenta          bigint(20) NOT NULL AUTO_INCREMENT ,
	codigoModalidadPago  bigint(20)  NOT NULL ,
	fecha                datetime  NULL ,
	PRIMARY KEY (codigoVenta)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


CREATE TABLE ventaDetalle
( 
	codigoItem          bigint(20) NOT NULL AUTO_INCREMENT,
	codigoVenta          bigint(20) NOT NULL,
	codigoProducto       bigint(20)  NOT NULL ,
	cantidadVendida      decimal(6,2)  NULL,
	PRIMARY KEY (codigoItem)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 

CREATE TABLE subCategoriaProducto
( 
	codigosubCategoria          bigint(20) NOT NULL AUTO_INCREMENT,
	nombre				 varchar(100) NULL,
	codigoCategoria  	 bigint(20) NOT NULL,
	descripcion			 varchar(200) NULL,
	PRIMARY KEY (codigosubCategoria)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 


ALTER TABLE bloqueado
ADD CONSTRAINT fk_empresa_bloqueado
FOREIGN KEY (codigoEmpresa) 
REFERENCES empresa(codigoEmpresa);

ALTER TABLE temaAyuda
ADD CONSTRAINT fk_categoriaTemaAyuda_temaAyuda 
FOREIGN KEY (codigoCategoriaTema) 
REFERENCES categoriaTemaAyuda(codigoCategoriaTema);

ALTER TABLE contrasenia
ADD CONSTRAINT fk_usuario_contrasenia  
FOREIGN KEY (codigoUsuario) 
REFERENCES usuario(codigoUsuario);

ALTER TABLE grupo_privilegio
	ADD CONSTRAINT fk_privilegio_grupoPrivilegio  
	FOREIGN KEY (codigoPrivilegio) 
	REFERENCES privilegio(codigoPrivilegio);
	
ALTER TABLE grupo_privilegio
	ADD  CONSTRAINT fk_grupo_grupoPrivilegio
	FOREIGN KEY (codigoGrupo) 
	REFERENCES grupo(codigoGrupo);
	
ALTER TABLE grupo_Usuario
	ADD CONSTRAINT fk_grupo_grupoUsuario 
	FOREIGN KEY (codigoGrupo) 
	REFERENCES grupo(codigoGrupo);
	
ALTER TABLE grupo_Usuario
	ADD CONSTRAINT fk_usuario_grupoUsuario 
	FOREIGN KEY (codigoUsuario) 
	REFERENCES usuario(codigoUsuario);

ALTER TABLE intentoFallido
	ADD CONSTRAINT fk_usuario_intentoFallido  
	FOREIGN KEY (codigoUsuario) 
	REFERENCES usuario(codigoUsuario);

ALTER TABLE oferta
	ADD CONSTRAINT fk_producto_oferta  
	FOREIGN KEY (codigoProducto) 
	REFERENCES producto(codigoProducto);

ALTER TABLE producto
	ADD CONSTRAINT fk_marca_producto   
	FOREIGN KEY (codigoMarca) 
	REFERENCES marca(codigoMarca);
	
ALTER TABLE usuario
	ADD CONSTRAINT fk_empresa_usuario   
	FOREIGN KEY (codigoEmpresa) 
	REFERENCES empresa(codigoEmpresa);


ALTER TABLE venta
	ADD CONSTRAINT fk_modalidadDePago_venta   
	FOREIGN KEY (codigoModalidadPago) 
	REFERENCES modalidadDePago(codigoModalidadPago);

ALTER TABLE ventaDetalle
	ADD CONSTRAINT fk_venta_ventaDetalle   
	FOREIGN KEY (codigoVenta) 
	REFERENCES venta(codigoVenta);

ALTER TABLE ventaDetalle
	ADD CONSTRAINT fk_producto_ventaDetalle
	FOREIGN KEY (codigoProducto) 
	REFERENCES producto(codigoProducto);
ALTER TABLE subCategoriaProducto
	ADD CONSTRAINT fk_categoriaProducto_subCategoriaProducto
	FOREIGN KEY (codigoCategoria) 
	REFERENCES categoriaProducto(codigoCategoria);
ALTER TABLE producto
	ADD CONSTRAINT fk_subCategoriaProducto_producto
	FOREIGN KEY (codigosubCategoria) 
	REFERENCES subCategoriaProducto(codigosubCategoria);	