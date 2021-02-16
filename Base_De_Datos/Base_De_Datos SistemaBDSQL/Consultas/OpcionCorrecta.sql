select row_number() over (partition by pec.idPlantillaExamenCabecera order by pec.idPlantillaExamenCabecera) Numero,
       pec.idPlantillaExamenCabecera,
       peo.idPlatillaExamenOpcion
from plantillaexamencabecera PEC
         join plantillaexamenpregunta pep
              on PEC.idPlantillaExamenCabecera = pep.PlantillaExamenCabeceraPEP
         join plantillaexamenopcion peo
              on pep.PlantillaExamenCabeceraPEP = peo.PlatillaExamenCabeceraPEO
                  and pep.idPlantillaExamenPregunta = peo.PlatillaExamenPregunta;

with Rango as (
    select row_number() over (partition by pec.idPlantillaExamenCabecera,pep.idPlantillaExamenPregunta order by pec.idPlantillaExamenCabecera) Numero,
           pep.idPlantillaExamenPregunta,
           pec.idPlantillaExamenCabecera,
           peo.idPlatillaExamenOpcion
    from plantillaexamencabecera PEC
             join plantillaexamenpregunta pep
                  on PEC.idPlantillaExamenCabecera = pep.PlantillaExamenCabeceraPEP
             join plantillaexamenopcion peo
                  on pep.PlantillaExamenCabeceraPEP = peo.PlatillaExamenCabeceraPEO
                      and pep.idPlantillaExamenPregunta = peo.PlatillaExamenPregunta
)select idPlatillaExamenOpcion from Rango where Numero=1 order by idPlantillaExamenPregunta ;

select *
from plantillaexamencabecera PEC
         join plantillaexamenpregunta pep
              on PEC.idPlantillaExamenCabecera = pep.PlantillaExamenCabeceraPEP
         join plantillaexamenopcion peo
              on pep.PlantillaExamenCabeceraPEP = peo.PlatillaExamenCabeceraPEO
                  and pep.idPlantillaExamenPregunta = peo.PlatillaExamenPregunta;

select *
from plantillaexamenpregunta pep;