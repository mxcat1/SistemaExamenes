<?php

require_once "model/Autenticacion.php";
require_once "config/parameters.php";

class AutenticacionController
{
    public function index(){
        return "<h1>Acceso al Sistema</h1>";
    }

    public function AunteticacionLogeo(){
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
    }
    public function AunteticacionLogount(){
        $_SESSION["User"]=null;
        session_destroy();
        header("Location:".url_base);
    }
}