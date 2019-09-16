<?php

require_once "config/ConexionBD.php";
require_once "Empresa.php";

class Contrato
{

    private $ContratoCodigo;
    private $Empresa;
    private $ContratoEstado;
    private $ContratoFechaInicio;
    private $ContratoFechaFin;

    /**
     * @return mixed
     */
    public function getContratoCodigo()
    {
        return $this->ContratoCodigo;
    }

    /**
     * @param mixed $ContratoCodigo
     */
    public function setContratoCodigo($ContratoCodigo): void
    {
        $this->ContratoCodigo = $ContratoCodigo;
    }

    /**
     * @return mixed
     */
    public function getEmpresa()
    {
        return $this->Empresa;
    }

    /**
     * @param mixed $Empresa
     */
    public function setEmpresa($Empresa): void
    {
        $this->Empresa = $Empresa;
    }

    /**
     * @return mixed
     */
    public function getContratoEstado()
    {
        return $this->ContratoEstado;
    }

    /**
     * @param mixed $ContratoEstado
     */
    public function setContratoEstado($ContratoEstado): void
    {
        $this->ContratoEstado = $ContratoEstado;
    }

    /**
     * @return mixed
     */
    public function getContratoFechaInicio()
    {
        return $this->ContratoFechaInicio;
    }

    /**
     * @param mixed $ContratoFechaInicio
     */
    public function setContratoFechaInicio($ContratoFechaInicio): void
    {
        $this->ContratoFechaInicio = $ContratoFechaInicio;
    }

    /**
     * @return mixed
     */
    public function getContratoFechaFin()
    {
        return $this->ContratoFechaFin;
    }

    /**
     * @param mixed $ContratoFechaFin
     */
    public function setContratoFechaFin($ContratoFechaFin): void
    {
        $this->ContratoFechaFin = $ContratoFechaFin;
    }



}