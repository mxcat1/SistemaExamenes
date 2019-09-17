<?php

require_once "config.php";

class ConexionBD
{

    protected $Conexion;

    public function __construct()
    {
        try{
            $this->Conexion=new mysqli(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT);
            $this->Conexion->set_charset(DBUTF);
//            return "Conexion Establesida";
        }catch (Exception $e){
            echo "Ocurrio un error en la conexion {$e->getMessage()}";
        }

    }
    public function CloseDB(){
        try{
            $this->Conexion->close();
            return "Cerrado correctamente";
        }catch (Exception $e){
            return "Ocurrio un error en la conexion {$e->getMessage()}";
        }
    }
}