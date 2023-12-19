CREATE schema ciudad;
use ciudad;
create table user(
	id int auto_increment not null,
    nombre varchar(60) not null,
    email varchar(45) unique not null,
    celular varchar(9) unique not null,
    password varchar(20) not null,
    seguidores int,
    PRIMARY KEY (id)
);
DROP table user;
SELECT * FROM user;
SELECT * FROM user where email = 'luandelsol54@gmail.com';

create table producto(
	id int auto_increment not null,
    id_user int not null,
    nombre varchar(50) not null,
    precio float not null,
    descripcion text(100) not null,
    foto longblob not null,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) references user (id)
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

DROP TABLE user;
DROP TABLE user_producto;
DROP TABLE producto;
    
INSERT INTO producto (nombre, precio, descripcion, foto) VALUES 
('', ,'',''),
(),
(),
(),
();

SELECT * FROM user;
SELECT * FROM producto;

