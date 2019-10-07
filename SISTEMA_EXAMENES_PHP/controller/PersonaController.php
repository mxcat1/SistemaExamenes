<?php

require_once "model/Persona.php";
require_once "model/Autenticacion.php";
require_once "config/parameters.php";
require_once "AutenticacionController.php";

class PersonaController
{
    public function index(){
        $PersonaA=new Persona();
        echo "Algo ";
        var_dump($PersonaA->MostrarPersonas());
    }
    public function RegistroFormulario(){
        require_once "view/formregistro.php";
    }
    public  function Registrarse(){
        if (isset($_POST)){
            $Respuesta=false;
            $codusu="19".$_POST["txtidusu"];
            $nomusu=$_POST["txtnomusu"];
            $apeusu=$_POST["txtapeusu"];
            $fenacusu=$_POST["dtfenacusu"];
            $sexousu=($_POST["rbsexo"]=="Masculino")?true:false;
//            $paisusu=$_POST["txtpaisusu"];
            $paisusu=1;
            $nrocontratousu=($_POST["txtnrocontrato"]=="")?null:$_POST["txtnrocontrato"];
            $nombreusuario=$_POST["txtnombreusuario"];
            $contrausuario=$_POST["passusuario"];
            $NuevoRegistroPersona=new Persona();
            $NuevoRegistroPersona->setPersonaCodigo($codusu);
            $NuevoRegistroPersona->setPersonaNombre($nomusu);
            $NuevoRegistroPersona->setPersonaApellido($apeusu);
            $NuevoRegistroPersona->setPersonaFechaNacimiento($fenacusu);
            $NuevoRegistroPersona->setPersonaSexo($sexousu);
            $NuevoRegistroPersona->setPersonaPais($paisusu);
            $AutenticacionCNuevo=new AutenticacionController();
            $verificacion=$AutenticacionCNuevo->AutenticacionVerificarUsu($nombreusuario);
            if ($verificacion){
                $idinsertado=$AutenticacionCNuevo->AutenticacionNuevoRegistro($nrocontratousu,$nombreusuario,$contrausuario);
                $NuevoRegistroPersona->setPersonaAutenticacion($idinsertado);
                $Respuesta=$NuevoRegistroPersona->RegistrarNuevaPersona();
                $_SESSION["Registro"]=$Respuesta;
                header("Location:".url_base."Persona/RegistroFormulario");
            }else{
//                header("Location:".url_base);
                echo "Error";
            }
        }else{
            header("Location:".url_base);
        }
    }
}