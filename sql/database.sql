CREATE schema ciudad;
use ciudad;
create table user(
	id int auto_increment not null,
    nombre varchar(50) not null,
	celular varchar(9) unique not null,
    correo varchar(50) unique not null,
    password varchar(50) not null,
    PRIMARY KEY (id)
);
create table producto(
	id int(2) auto_increment not null,
    id_user int(2) not null,
    nombre varchar(50) not null,
    description text(100) not null,
    foto longblob not null,
	unidad_medida varchar(30) not null,
    unidad_precio float(5) not null,
    precio_por_mayor float(5) not null,
    stock int not null,
    fecha_public TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    PRIMARY KEY (id)
);
-- INSERT INTO producto (id_user, nombre, description, foto, unidad_medida, unidad_precio, precio_por_mayor, stock, fecha_public) 
-- VALUE ('', '', '', '', '', '', '', '', '');