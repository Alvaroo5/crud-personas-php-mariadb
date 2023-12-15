CREATE DATABASE betjug;

USE betjug;
CREATE TABLE jugadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    posición VARCHAR(255) NOT NULL
);

INSERT INTO jugadores (nombre, apellidos, posicion) VALUES
('Fran', 'Vieites', 'Portero'),
('Chadi', 'Riad', 'Central'),
('Guido', 'Rodriguez', 'Mediocentro'),
('Ayoze', 'Perez', 'Delantero'),
;
