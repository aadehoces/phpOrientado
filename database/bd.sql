create database pizzeria;
use pizzeria;
#Se crea la tabla
create table usuario (
nombre varchar(30),
apellido varchar(50),
pass varchar(50),
telefono varchar(15),
email varchar(30) primary key,
direccion varchar(30));
#Un insert para hacer pruebas
insert into usuario (nombre,apellido,pass,email,telefono,direccion) values ('prueba','numero 1','1234','prueba@email.com','987654321','C/wkdw Nº12');
#El select para mirar que usuarios hay
select * from usuario;
#Crear el usuario que solo tendrá permisos para mirar esta base de datos
grant select on pizzeria.usuario to 'user1'@'localhost' identified by 'Aa123456_';