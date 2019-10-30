CREATE DATABASE Sistema_Examenes;

# BEGIN CREACION DE LAS TABLAS PARA AUTENTICACION Y REGISTRO DE USUARIOS

USE Sistema_Examenes;

CREATE TABLE Pais
(
    PaisCodigo integer not null primary key AUTO_INCREMENT,
    PaisIso    CHAR(2) not null,
    PaisNombre varchar(150)
);

CREATE TABLE Empresa
(
    EmpresaCodigo char(10) NOT NULL PRIMARY KEY,
    EmpresaNombre varchar(100),
    EmpresaPais   integer,

    CONSTRAINT FK_Empresa_Pais
        FOREIGN KEY (EmpresaPais) references Pais (PaisCodigo)
);
CREATE TABLE Contrato
(
    ContratoCodigo      char(10) not null primary key,
    Empresa             char(10),
    ContratoEstado      bit      not null,
    ContratoFechaInicio date     not null,
    ContratoFechaFin    date     not null,

    CONSTRAINT FK_Contrato_Empresa
        FOREIGN KEY (Empresa) references Empresa (EmpresaCodigo)
);

CREATE TABLE Autenticacion
(
    AutenticacionCodigo        integer      not null primary key auto_increment,
    Contrato                   char(10),
    AutenticacionNombreUsuario varchar(150) not null unique,
    AutenticacionContrasena    varchar(150) not null,

    CONSTRAINT FK_Autenticacion_Contrato
        FOREIGN KEY (Contrato) REFERENCES Contrato (ContratoCodigo)
);

CREATE TABLE Persona
(
    PersonaCodigo          char(10)     NOT NULL PRIMARY KEY,
    PersonaNombre          varchar(150) NOT NULL,
    PersonaApellido        varchar(150) NOT NULL,
    PersonaFechaNacimiento date         NOT NULL,
    PersonaSexo            bit          not null,
    PersonaPais            integer,
    PersonaAutenticacion   integer,

    CONSTRAINT FK_Persona_Pais
        FOREIGN KEY (PersonaPais) REFERENCES Pais (PaisCodigo),
    CONSTRAINT FK_Persona_Autenticacion
        FOREIGN KEY (PersonaAutenticacion) REFERENCES Autenticacion (AutenticacionCodigo)

);
CREATE TABLE Docente
(
    DocenteCodigo  char(10) not null primary key,
    PersonaDocente char(10),

    CONSTRAINT FK_Docente_Persona
        FOREIGN KEY (PersonaDocente) REFERENCES Persona (PersonaCodigo)
);
CREATE TABLE Alumno
(
    AlumnoCodigo  char(10) not null primary key,
    PersonaAlumno char(10),

    CONSTRAINT FK_Alumno_Persona
        FOREIGN KEY (PersonaAlumno) REFERENCES Persona (PersonaCodigo)
);


# END CREACION DE LAS TABLAS PARA AUTENTICACION Y REGISTRO DE USUARIOS

# BEGIN CREACION DE TABLAS PARA EL MODULO DE CREACION Y ADMINISTRACION DE EXAMENES

CREATE TABLE TipoExamen
(
    idTipoExamen integer      not null auto_increment primary key,
    TipoExamen   varchar(250) not null
);
CREATE TABLE CursoExamen
(
    idCursoExamen integer      not null auto_increment primary key,
    CursoExamen   varchar(250) not null
);

CREATE TABLE TemaExamenPregunta
(
    idTemaExamenPregunta integer      not null auto_increment primary key,
    TemaPregunta         varchar(250) not null
);

CREATE TABLE PlantillaExamenCabecera
(
    idPlantillaExamenCabecera CHAR(10) not null primary key,
    Docente                   char(10),
    CursoExamen               integer,
    TipoExamen                integer,
    TotalPreguntas            integer,

    constraint FK_PLANTILLAEXAMENCABECERA_DOCENTE
        foreign key (Docente)
            references Docente (DocenteCodigo),
    constraint FK_PLANTILLAEXAMENCABECERA_CURSOEXAMEN
        foreign key (CursoExamen)
            references CursoExamen (idCursoExamen),
    constraint FK_PLANTILLAEXAMENCABECERA_TIPOEXAMEN
        foreign key (TipoExamen)
            references TipoExamen (idTipoExamen)
);
CREATE TABLE PlantillaExamenPregunta
(
    idPlantillaExamenPregunta  CHAR(10) not null,
    PlantillaExamenCabeceraPEP CHAR(10) not null,
    TemaPregunta               integer,
    PreguntaTexto              text     not null,
    OpcionCorrecta             char(10) not null,

    constraint PK_PlantillaExamenPregunta PRIMARY KEY (idPlantillaExamenPregunta, PlantillaExamenCabeceraPEP),

    constraint FK_PLATILLAEXAMENPREGUNTA_PLANTILLAEXAMENCABECERA
        foreign key (PlantillaExamenCabeceraPEP)
            references PlantillaExamenCabecera (idPlantillaExamenCabecera),
    constraint FK_PLANTILLAEXAMENPREGUNTA_TEMAEXAMENPREGUNTA
        FOREIGN KEY (TemaPregunta)
            references TemaExamenPregunta (idTemaExamenPregunta)
);
CREATE TABLE PlantillaExamenOpcion
(
    idPlatillaExamenOpcion    char(10) not null,
    PlatillaExamenCabeceraPEO char(10) not null,
    PlatillaExamenPregunta    char(10) not null,
    OpcionDescripcion         text     not null,

    constraint PK_PlantillaExamenOpcion PRIMARY KEY (idPlatillaExamenOpcion, PlatillaExamenCabeceraPEO,
                                                     PlatillaExamenPregunta),

    constraint FK_PLANTILLAEXAMENOPCION_PLANTILLAEXAMENPREGUNTA
        foreign key (PlatillaExamenCabeceraPEO, PlatillaExamenPregunta)
            references PlantillaExamenPregunta (PlantillaExamenCabeceraPEP, idPlantillaExamenPregunta)

);

CREATE TABLE AlumnoRespuestaCabecera
(
    PlantillaExamenCabecera char(10) not null,
    Alumno                  char(10) not null,
    FechaDeExamen           date     not null,
    PuntajeObtenido         decimal(5, 2),

    constraint PK_AlumnoRespuestaCabecera primary key (PlantillaExamenCabecera, Alumno),

    constraint FK_AlumnoRespuestaCabecera_PlantillaExamenCabecera
        foreign key (PlantillaExamenCabecera)
            references PlantillaExamenCabecera (idPlantillaExamenCabecera),
    constraint FK_AlumnoRespuestaCabecera_Alumno
        foreign key (Alumno)
            references Alumno (AlumnoCodigo)
);

CREATE TABLE AlumnoRespuesta
(
    PlantillaExamenCabeceraAR    char(10) not null,
    AlumnoAR                     char(10) not null,
    PlantillaExamenPreguntaAR    char(10) not null,
    PlantillaExamenCabeceraARPEP char(10),
    OpcionMarcada                char(10),

    constraint PK_AlumnoRespuesta
        PRIMARY KEY (PlantillaExamenCabeceraAR, AlumnoAR, PlantillaExamenPreguntaAR),

    constraint FK_AlmunoRespuesta_AlumnoRespuestaCabecera
        foreign key (PlantillaExamenPreguntaAR, AlumnoAR)
            references AlumnoRespuestaCabecera (PlantillaExamenCabecera, Alumno),
    constraint FK_AlmunoRespuesta_PlantillaExamenPregunta
        foreign key (PlantillaExamenPreguntaAR, PlantillaExamenCabeceraARPEP)
            references PlantillaExamenPregunta (idPlantillaExamenPregunta, PlantillaExamenCabeceraPEP)
);


# END CREACION DE TABLAS PARA EL MODULO DE CREACION Y ADMINISTRACION DE EXAMENES


