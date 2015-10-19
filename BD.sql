
create database paddle;

create table usuarios (
	id_usuario int not null primary key AUTO_INCREMENT,
	nombre varchar(50) not null,
	edad char(4) not null,
	email varchar(40),
	telefono char(15),
	direccion varchar(60)

);


create table cancha (

	id_cancha int not null primary key AUTO_INCREMENT, 
	precio DECIMAL(7,2) not null,
	descripcion varchar(30)
);

create table alquiler (
	alquiler_id int not null primary key AUTO_INCREMENT, 
	id_cancha int not null,
	id_usuario int not null,
	fecha date not null,
	hora time not null,
	cant_hora int not null
);

alter table alquiler ADD UNIQUE (hora);
alter table alquiler add column hora_hasta time not null;
alter table usuarios ADD UNIQUE (email);

insert into usuarios (nombre, edad, email, telefono, direccion) 
	values ('Guido Pereira','33','guido@gmail.com','0981525201',
		'Villa Aurelia. Asuncion');

insert into usuarios (nombre, edad, email, telefono, direccion) 
	values ('Abel Pereira','35','abel@gmail.com','0983603576',
		'Santa Ana. CDE');

insert into usuarios (nombre, edad, email, telefono, direccion) 
	values ('Rene Pereira','31','rene@gmail.com','0981589754',
		'Santa Ana. CDE');

insert into usuarios (nombre, edad, email, telefono, direccion) 
	values ('Aldo Pereira','29','aldo@gmail.com','0985897541',
		'Santa Ana. CDE');

insert into cancha (precio, descripcion) values (40000, 
	'techada con luminica');
insert into cancha (precio, descripcion) values (40000, 
	'techada con luminica');
insert into cancha (precio, descripcion) values (30000, 
	'sin techo con luminica');
insert into cancha (precio, descripcion) values (30000, 
	'sin techo con luminica');

insert into alquiler (id_cancha, id_usuario, fecha, hora, cant_hora)
	values (1,1, '2015-10-10','16:00:00',2);

insert into alquiler (id_cancha, id_usuario, fecha, hora, cant_hora)
values (2,2, '2015-10-10','16:00:00',1);

insert into alquiler (id_cancha, id_usuario, fecha, hora, cant_hora)
	values (3,3, '2015-10-10','16:00:00',1);