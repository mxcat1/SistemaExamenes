<?php

require_once "model/Autenticacion.php";
require_once "config/parameters.php";

class AutenticacionController
{
    public function index(){
        return "<h1>Acceso al Sistema</h1>";
    }

    public function AunteticacionLogeo(){
        if (isset($_POST)){
            $nom_usu=$_POST['txtnom_usu'];
            $contra_usu=$_POST['pass_usu'];
            $auto1=new Autenticacion();
//        $auto1->setAutenticacionNombreUsuario("dlyste0");
//        $auto1->setAutenticacionContrasenia("CEnYIWuJkbj");
            $auto1->setAutenticacionNombreUsuario($nom_usu);
            $auto1->setAutenticacionContrasenia($contra_usu);

//        var_dump($auto1->Logeo());
            $usuario=$auto1->Logeo();
            if (isset($usuario)){
                $_SESSION["User"]=$auto1->Logeo();
            }
            header("Location:".url_base);
        }else{
            header("Location:".url_base);
        }
    }
    public function AutenticacionLogount(){
        $_SESSION["User"]=null;
        session_destroy();
        header("Location:".url_base);
    }
    public  function AutenticacionNuevoRegistro($nrcontrato,$nomusu,$contrausu){
        $NuevoUsu=new Autenticacion();
        $NuevoUsu->setContrato($nrcontrato);
        $NuevoUsu->setAutenticacionNombreUsuario($nomusu);
        $NuevoUsu->setAutenticacionContrasenia($contrausu);
        return $NuevoUsu->RegistrarNuevaAutenticacion();
    }
    public function AutenticacionVerificarUsu($nomusu){
        $NuevoUsu=new Autenticacion();
        $NuevoUsu->setAutenticacionNombreUsuario($nomusu);
        $verificacion=$NuevoUsu->VerificarNombreUsuario();
        return isset($verificacion)?false:true;
    }
}