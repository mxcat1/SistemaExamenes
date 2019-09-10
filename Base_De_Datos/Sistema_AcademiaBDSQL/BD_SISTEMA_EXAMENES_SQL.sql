-- BASE DE DATOS SISTEMA EXAMENES ONLINE

CREATE DATABASE Sistema_Examenes;

-- CREACION DE LAS TABLAS PARA AUTENTICACION Y REGISTRO DE USUARIOS

USE Sistema_Examenes;

CREATE TABLE Empresa(
    EmpresaCodigo char(10) NOT NULL PRIMARY KEY,
    EmpresaNombre varchar(100),
    EmpresaPais integer
);
CREATE TABLE Contrato(
  ContratoCodigo char(10) not null primary key ,
  Empresa char(10),
  ContratoEstado bit not null ,
  ContratoFechaInicio date not null ,
  ContratoFechaFin date not null
);

CREATE TABLE Autenticacion(
  AutenticacionCodigo integer not null primary key auto_increment,
  Contrato char(10),
  AutenticacionNombreUusario varchar(150) not null unique ,
  AutenticacionContraseña varchar(150) not null
);

CREATE TABLE Persona(
    PersonaCodigo char(10) NOT NULL PRIMARY KEY ,
    PersonaNombre varchar(150) NOT NULL ,
    PersonaApellido varchar(150) NOT NULL ,
    PersonaFechaNacimiento date NOT NULL ,
    PersonaSexo bit not null ,
    PersonaPais integer,
    PersonaAutenticacion integer
);
CREATE TABLE Docente(
    DocenteCodigo char(10) not null primary key ,
    PersonaDocente char(10)
);
CREATE TABLE Alumno(
  AlumnoCodigo char(10) not null  primary key,
  PersonaAlumno char(10)
);

CREATE TABLE Pais(
    PaisCodigo integer not null primary key AUTO_INCREMENT,
    PaisNombre varchar(150)
);



ALTER TABLE Empresa
    ADD CONSTRAINT FK_Empresa_Pais
        FOREIGN KEY (EmpresaPais) references Pais(PaisCodigo);
ALTER TABLE Contrato
    ADD CONSTRAINT  FK_Contrato_Empresa
        FOREIGN KEY (Empresa) references Empresa(EmpresaCodigo) ;
ALTER TABLE Autenticacion
    ADD CONSTRAINT FK_Autenticacion_Contrato
        FOREIGN KEY (Contrato) REFERENCES Contrato(ContratoCodigo);
ALTER TABLE Persona
    ADD CONSTRAINT FK_Persona_Pais
        FOREIGN KEY (PersonaPais) REFERENCES Pais(PaisCodigo);
ALTER TABLE Persona
    ADD CONSTRAINT FK_Persona_Autenticacion
        FOREIGN KEY (PersonaAutenticacion) REFERENCES Autenticacion(AutenticacionCodigo);
ALTER TABLE Docente
    ADD CONSTRAINT FK_Docente_Persona
        FOREIGN KEY (PersonaDocente) REFERENCES Persona(PersonaCodigo);
ALTER TABLE Alumno
    ADD CONSTRAINT FK_Alumno_Persona
        FOREIGN KEY (PersonaAlumno) REFERENCES Persona(PersonaCodigo);