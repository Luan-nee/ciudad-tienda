CREATE schema ciudad;
use ciudad;
create table user(
	id int auto_increment not null,
    nombre varchar(60) not null,
    email varchar(45) not null,
    celular varchar(9) not null,
    password varchar(20) not null,
    seguidores int,
    PRIMARY KEY (id)
);

create table producto(
	id int auto_increment not null,
    nombre varchar(50) not null,
    precio float not null,
    foto longblob not null,
    PRIMARY KEY (id)
);

create table user_producto(
	id int auto_increment not null,
    id_user int not null,
    id_producto int not null,
    stock int not null,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) references user (id),
    FOREIGN KEY (id_producto) references producto (id)
);
