select distinct PlantillaExamenCabeceraPEP
from PlantillaExamenPregunta order by 1 asc ;

select distinct idPlantillaExamenCabecera
from PlantillaExamenCabecera order by 1 asc ;


select *
from AlumnoRespuestaCabecera;

select *
from PlantillaExamenOpcion;

select ARC.PlantillaExamenCabecera,
       ARC.Alumno,
       PEC.idPlantillaExamenCabecera,
       pep.idPlantillaExamenPregunta,
       PEO.idPlatillaExamenOpcion,
       PEO.OpcionDescripcion,
       row_number()
               over (
                   partition by ARC.PlantillaExamenCabecera,pep.idPlantillaExamenPregunta
                   order by ARC.PlantillaExamenCabecera) as N
from AlumnoRespuestaCabecera ARC
         join plantillaexamencabecera PEC on ARC.PlantillaExamenCabecera = PEC.idPlantillaExamenCabecera
         join plantillaexamenpregunta pep on PEC.idPlantillaExamenCabecera = pep.PlantillaExamenCabeceraPEP
         join PlantillaExamenOpcion PEO on pep.PlantillaExamenCabeceraPEP = PEO.PlatillaExamenCabeceraPEO and
                                           pep.idPlantillaExamenPregunta = PEO.PlatillaExamenPregunta
order by 1 asc;

with DataAlumnoOp
         as
         (
             select
                 ARC.PlantillaExamenCabecera,
                 ARC.Alumno,
                 PEC.idPlantillaExamenCabecera,
                 pep.idPlantillaExamenPregunta,
                 PEO.idPlatillaExamenOpcion,
                 PEO.OpcionDescripcion,
                 ARC.FechaDeExamen,
                 row_number()
                         over (
                             partition by ARC.PlantillaExamenCabecera,ARC.Alumno,pep.idPlantillaExamenPregunta
                             order by ARC.PlantillaExamenCabecera,ARC.Alumno) as N
             from AlumnoRespuestaCabecera ARC
                      join plantillaexamencabecera PEC on ARC.PlantillaExamenCabecera = PEC.idPlantillaExamenCabecera
                      join plantillaexamenpregunta pep on PEC.idPlantillaExamenCabecera = pep.PlantillaExamenCabeceraPEP
                      join PlantillaExamenOpcion PEO on pep.PlantillaExamenCabeceraPEP = PEO.PlatillaExamenCabeceraPEO and
                                                        pep.idPlantillaExamenPregunta = PEO.PlatillaExamenPregunta
         )select PlantillaExamenCabecera,
                 Alumno,
                 idPlantillaExamenPregunta,
                 idPlantillaExamenCabecera,idPlatillaExamenOpcion
    /*FechaDeExamen,*/
    /*N*/
from DataAlumnoOp
where N=2
order by 1 asc ;