<?php
session_start();
require_once 'autoload.php';
require_once 'config/parameters.php';

//$persona1=new PersonaController();
//
//$persona1->index();
//
//$auto11=new AutenticacionController();
//$auto11->AunteticacionLogeo();
if (isset($_SESSION["User"])){
    var_dump($_SESSION["User"]);
    require_once "view/logount.php";
}else{
//    echo "No hay usuario";
    require_once "view/login.php";
}

if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = controller_default;
}else{
    echo "Error";
    exit();
}

if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;
        $controlador->$action_default();
    }elseif($_GET['action']==''){
        $action_default = action_default;
        $controlador->$action_default();
    }else{
        echo "Error1";
    }
}else{
    echo "Error2";
}
