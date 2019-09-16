<?php

require_once "config/ConexionBD.php";

class Persona extends ConexionBD
{
    protected $_PersonaCodigo;
    protected $_PersonaNombre;
    protected $_PersonaApellido;
    protected $_PersonaFechaNacimiento;
    protected $_PersonaSexo;
    protected $_PersonaPais;
    protected $_PersonaAutenticacion;
    /**
     * @return mixed
     */
    public function getPersonaCodigo()
    {
        return $this->_PersonaCodigo;
    }

    /**
     * @param mixed $PersonaCodigo
     */
    public function setPersonaCodigo($PersonaCodigo)
    {
        $this->_PersonaCodigo = $PersonaCodigo;
    }

    /**
     * @return mixed
     */
    public function getPersonaNombre()
    {
        return $this->_PersonaNombre;
    }

    /**
     * @param mixed $PersonaNombre
     */
    public function setPersonaNombre($PersonaNombre)
    {
        $this->_PersonaNombre = $PersonaNombre;
    }

    /**
     * @return mixed
     */
    public function getPersonaApellido()
    {
        return $this->_PersonaApellido;
    }

    /**
     * @param mixed $PersonaApellido
     */
    public function setPersonaApellido($PersonaApellido)
    {
        $this->_PersonaApellido = $PersonaApellido;
    }

    /**
     * @return mixed
     */
    public function getPersonaFechaNacimiento()
    {
        return $this->_PersonaFechaNacimiento;
    }

    /**
     * @param mixed $PersonaFechaNacimiento
     */
    public function setPersonaFechaNacimiento($PersonaFechaNacimiento)
    {
        $this->_PersonaFechaNacimiento = $PersonaFechaNacimiento;
    }

    /**
     * @return mixed
     */
    public function getPersonaSexo()
    {
        return $this->_PersonaSexo;
    }

    /**
     * @param mixed $PersonaSexo
     */
    public function setPersonaSexo($PersonaSexo)
    {
        $this->_PersonaSexo = $PersonaSexo;
    }

    /**
     * @return mixed
     */
    public function getPersonaPais()
    {
        return $this->_PersonaPais;
    }

    /**
     * @param mixed $PersonaPais
     */
    public function setPersonaPais($PersonaPais)
    {
        $this->_PersonaPais = $PersonaPais;
    }

    /**
     * @return mixed
     */
    public function getPersonaAutenticacion()
    {
        return $this->_PersonaAutenticacion;
    }

    /**
     * @param mixed $PersonaAutenticacion
     */
    public function setPersonaAutenticacion($PersonaAutenticacion)
    {
        $this->_PersonaAutenticacion = $PersonaAutenticacion;
    }

    public function __construct()
    {
        parent::__construct();
    }
}