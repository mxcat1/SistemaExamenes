<?php

require_once "model/Empresa.php";

$empresa1=new Empresa();
$empresa1->setEmpresaPais(new Pais);
$empresa1->getEmpresaPais();

var_dump($empresa1);
var_dump($empresa1->getEmpresaPais());