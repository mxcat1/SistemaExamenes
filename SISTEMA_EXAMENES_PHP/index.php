<?php

require_once  'autoload.php';

$persona1=new PersonaController();

$persona1->index();

$auto11=new AutenticacionController();
$auto11->index();