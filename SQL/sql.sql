CREATE DATABASE prueba_php_full;

CREATE TABLE IF NOT EXISTS usuario (
    id SERIAL NOT NULL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- MYSQL
CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS articulos (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS articulo (
    id INT AUTO_INCREMENT,
    titulo VARCHAR(50),
    imagen VARCHAR(150),
    descripcion VARCHAR(100),
    PRIMARY KEY(id) 
);

INSERT INTO usuario (nombre, email) VALUES ('Jhonny', 'jhonny.agudelo@gmail.com');
INSERT INTO usuario (nombre, email) VALUES ('alejandro', 'alejandro.agudelo@gmail.com');

