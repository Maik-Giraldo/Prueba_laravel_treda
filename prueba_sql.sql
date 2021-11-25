-- Prueba SQL reporte 1

create schema prueba_sql;
use prueba_sql;

create table ciudad(
	id int primary key not null auto_increment,
    nombre char(50) not null
);

create table cliente(
	id int primary key not null auto_increment,
    primer_nombre char(50) not null,
    primer_apellido char(50) not null,
    dias_mora char(2) not null,
    id_ciudad int,
    
    foreign key (id_ciudad) references ciudad(id)
);

alter table cliente add column riesgo char(30) not null;
alter table cliente add column cedula char(15) not null after id;

insert into ciudad(nombre) values ("Armenia"), ("Bogota");
insert into cliente(cedula, primer_nombre, primer_apellido, dias_mora, id_ciudad, riesgo) values ("10048702397", "Michael", "Giraldo", "20", 1, "riesgo bajo"), ("100443543", "Daniel", "Clavijo", "30", 2, "riesgo medio");

select cli.cedula, concat(cli.primer_nombre, " ", cli.primer_apellido) as nombre, cli.dias_mora as diasEnMora, cli.riesgo, ciu.nombre as ciudad from 
cliente cli, ciudad ciu where cli.id_ciudad = ciu.id  order by cast(diasEnMora as unsigned) asc;

-- Reporte 2
create table  sucursal(
	id int primary key not null auto_increment,
    nombre char(50) not null
);

create table cotizacion(
	id int primary key not null auto_increment,
    valor_poliza_iva_incl int not null,
	valor_poliza int not null,
    valor_poliza_cuota int not null,
    id_sucursal int,
    
    foreign key (id_sucursal) references sucursal(id)
);

insert into sucursal(nombre) values ("Armenia"), ("Bogota");
insert into cotizacion(valor_poliza_iva_incl, valor_poliza, valor_poliza_cuota, id_sucursal) values (45000, 30000, 10000, 1), (45000, 50000, 10000, 2);

select s.nombre, sum(c.valor_poliza_iva_incl + c.valor_poliza + c.valor_poliza_cuota) as valorTotalPagado from sucursal s, cotizacion c where c.id_sucursal = s.id group by s.nombre order by valorTotalPagado asc;