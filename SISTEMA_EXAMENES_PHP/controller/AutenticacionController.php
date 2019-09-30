<?php

require_once "model/Autenticacion.php";

class AutenticacionController
{
    public function index(){
        $auto1=new Autenticacion();
        $auto1->setAutenticacionNombreUsuario("dlyste0");
        $auto1->setAutenticacionContrasenia("CEnYIWuJkbj");

        var_dump($auto1->Logeo());
    }
}