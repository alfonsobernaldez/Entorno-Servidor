create database baretos;
use baretos;
create table locales(
	id_local int auto_increment primary key,
    nombre varchar(50),
    coordenadas varchar(100),
    poblacion varchar(50),
    tipo varchar(100)    
    );
    
insert into locales(nombre, coordenadas, poblacion, tipo) values ('El Gallego', '{ lat: 37.7958, lng: -0.8047 }', 'Santiago de la Ribera','Restaurante');
insert into locales(nombre, coordenadas, poblacion, tipo) values ('Quiosko El Gallego', '{ lat: 37.7954, lng: -0.802 }', 'Santiago de la Ribera','Bar');
insert into locales(nombre, coordenadas, poblacion, tipo) values ('Iseo', '{ lat: 37.7979, lng: -0.803 }', 'Santiago de la Ribera','Discoteca');
insert into locales(nombre, coordenadas, poblacion, tipo) values ('El patio', '{ lat: 37.7554, lng: -0.84726 }', 'Los Alcázares','Restaurante');
insert into locales(nombre, coordenadas, poblacion, tipo) values ('La Ponderosa', '{ lat: 37.7399, lng: -0.8502 }', 'Los Alcázares','Bar');
insert into locales(nombre, coordenadas, poblacion, tipo) values ('SKY Beach Los Narejos', '{ lat: 37.7630, lng: -0.8342}', 'Los Alcázares','Discoteca');