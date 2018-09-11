create database BDPruebas;
use BDPruebas;

create table Usuario(

usuario varchar (30),
email varchar(30),
contrasena varchar (30)
);

insert into Usuario Values ('Admin','uncorreo@hotmail.com','admin123'),
select * from Usuario