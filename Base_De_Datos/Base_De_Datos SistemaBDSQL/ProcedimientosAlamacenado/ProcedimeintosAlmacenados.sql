# PROCEDIMIENTO ALMACENADO



# 1- LOGUEO
Create procedure Logueo(NombreUsuario varchar(200) ,Contrasenia varchar(200))
begin
    SELECT *
    FROM autenticacion A
             join persona P
                  on a.AutenticacionCodigo=p.PersonaAutenticacion
    where a.AutenticacionNombreUsuario=NombreUsuario and a.AutenticacionContrasena=Contrasenia;
end;

drop procedure Logueo;


SELECT *
FROM autenticacion A
         join persona P
              on a.AutenticacionCodigo=p.PersonaAutenticacion
where a.AutenticacionNombreUsuario='dlyste0' and a.AutenticacionContrasena='CEnYIWuJkbj';

call Logueo('dlyste0','CEnYIWuJkbj');
#1.-FIN