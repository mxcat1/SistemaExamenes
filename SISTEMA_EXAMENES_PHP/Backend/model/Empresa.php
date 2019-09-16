<?php

require_once "config/ConexionBD.php";
require_once "Pais.php";

class Empresa extends ConexionBD
{
    private $_EmpresaCodigo;
    private $_EmpresaNombre;
    private $_EmpresaPais;

    /**
     * @return mixed
     */
    public function getEmpresaCodigo()
    {
        return $this->_EmpresaCodigo;
    }

    /**
     * @param mixed $EmpresaCodigo
     */
    public function setEmpresaCodigo($EmpresaCodigo): void
    {
        $this->_EmpresaCodigo = $EmpresaCodigo;
    }

    /**
     * @return mixed
     */
    public function getEmpresaNombre()
    {
        return $this->_EmpresaNombre;
    }

    /**
     * @param mixed $EmpresaNombre
     */
    public function setEmpresaNombre($EmpresaNombre): void
    {
        $this->_EmpresaNombre = $EmpresaNombre;
    }

    /**
     * @return mixed
     */
    public function getEmpresaPais()
    {
        return $this->_EmpresaPais;
    }

    /**
     * @param mixed $EmpresaPais
     */
    public function setEmpresaPais($EmpresaPais): void
    {
        $this->_EmpresaPais = $EmpresaPais;
    }

    public function __construct()
    {
        parent::__construct();
    }

}

