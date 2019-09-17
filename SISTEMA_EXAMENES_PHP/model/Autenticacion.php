<?php

require_once "config/ConexionBD.php";


class Autenticacion extends ConexionBD
{
    private $_AutenticacionCodigo;
    private $_Contrato;
    private $_AutenticacionNombreUsuario;
    private $_AutenticacionContraseña;

    /**
     * @return mixed
     */
    public function getAutenticacionCodigo()
    {
        return $this->_AutenticacionCodigo;
    }

    /**
     * @param mixed $AutenticacionCodigo
     */
    public function setAutenticacionCodigo($AutenticacionCodigo): void
    {
        $this->_AutenticacionCodigo = $AutenticacionCodigo;
    }

    /**
     * @return mixed
     */
    public function getContrato()
    {
        return $this->_Contrato;
    }

    /**
     * @param mixed $Contrato
     */
    public function setContrato($Contrato): void
    {
        $this->_Contrato = $Contrato;
    }

    /**
     * @return mixed
     */
    public function getAutenticacionNombreUsuario()
    {
        return $this->_AutenticacionNombreUsuario;
    }

    /**
     * @param mixed $AutenticacionNombreUsuario
     */
    public function setAutenticacionNombreUsuario($AutenticacionNombreUsuario): void
    {
        $this->_AutenticacionNombreUsuario = $AutenticacionNombreUsuario;
    }

    /**
     * @return mixed
     */
    public function getAutenticacionContraseña()
    {
        return $this->_AutenticacionContraseña;
    }

    /**
     * @param mixed $AutenticacionContraseña
     */
    public function setAutenticacionContraseña($AutenticacionContraseña): void
    {
        $this->_AutenticacionContraseña = $AutenticacionContraseña;
    }

    public function __construct()
    {
        parent::__construct();
    }

}