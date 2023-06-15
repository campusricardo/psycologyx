CREATE DATABASE psychologist;

USE psychologist;

CREATE TABLE patient(
    id_patient INT PRIMARY KEY AUTO_INCREMENT,
    edad INT NOT NULL,
    direccion VARCHAR(60) NOT NULL,
    proyeccion_laboral VARCHAR(60),
    estado_civil VARCHAR(60),
    hobby VARCHAR(20)
)
