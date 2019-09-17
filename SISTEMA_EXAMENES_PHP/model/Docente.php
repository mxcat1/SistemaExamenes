<?php

require_once "Persona.php";

class Docente extends Persona
{
    private $DocenteCodigo;
    private $PersonaDocente;

    /**
     * @return mixed
     */
    public function getDocenteCodigo()
    {
        return $this->DocenteCodigo;
    }

    /**
     * @param mixed $DocenteCodigo
     */
    public function setDocenteCodigo($DocenteCodigo): void
    {
        $this->DocenteCodigo = $DocenteCodigo;
    }

    /**
     * @return mixed
     */
    public function getPersonaDocente()
    {
        return $this->PersonaDocente;
    }

    /**
     * @param mixed $PersonaDocente
     */
    public function setPersonaDocente($PersonaDocente): void
    {
        $this->PersonaDocente = $PersonaDocente;
    }

    public function __construct()
    {
        parent::__construct();
    }
}