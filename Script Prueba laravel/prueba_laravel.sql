create schema prueba_laravel;
use prueba_laravel;

create table tienda(
	id int primary key not null auto_increment,
    nombre char(50) not null,
    fecha_apertura date
);

create table producto(
	id int primary key not null auto_increment,
	nombre char(50) not null,
    sku char(10) not null,
    descripcion char(50) not null,
    valor int not null,
    tienda int,
    imagen varchar(100),
    
    foreign key (tienda) references tienda(id)
); 