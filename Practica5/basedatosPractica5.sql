CREATE DATABASE IF NOT EXISTS Practica5PHP;

USE Practica5PHP;
CREATE TABLE categoria;
identificador INT PRIMARY KEY;
nombre VARCHAR(50);


CREATE TABLE producto;
identificador INT PRIMARY KEY;
nombre VARCHAR (50);
categoria INT;
FOREIGN KEY (categoria) REFERENCES categoria(identificador);

SELECT * FROM categoria;