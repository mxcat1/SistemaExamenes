<?php

require_once "model/Persona.php";

class PersonaController
{
    public function index(){
        $PersonaA=new Persona();
        echo "Algo ";
        var_dump($PersonaA->MostrarPersonas());
    }
}