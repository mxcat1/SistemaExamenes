<?php

require_once "Persona.php";
class Alumno extends Persona
{
    private $_AlumnoCodigo;
    private $_PersonaAlumno;
    /**
     * @return mixed
     */
    public function getAlumnoCodigo()
    {
        return $this->_AlumnoCodigo;
    }

    /**
     * @param mixed $AlumnoCodigo
     */
    public function setAlumnoCodigo($AlumnoCodigo)
    {
        $this->_AlumnoCodigo = $AlumnoCodigo;
    }

    /**
     * @return mixed
     */
    public function getPersonaAlumno()
    {
        return $this->_PersonaAlumno;
    }

    /**
     * @param mixed $PersonaAlumno
     */
    public function setPersonaAlumno($PersonaAlumno)
    {
        $this->_PersonaAlumno = $PersonaAlumno;
    }


    public function __construct()
    {
        parent::__construct();
    }
}