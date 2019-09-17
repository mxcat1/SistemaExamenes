<?php

require_once "config/ConexionBD.php";

class Pais extends ConexionBD
{
    private $_PaisCodigo;
    private $_PaisIso;
    private $_PaisNombre;

    /**
     * @return mixed
     */
    public function getPaisCodigo()
    {
        return $this->_PaisCodigo;
    }

    /**
     * @param mixed $PaisCodigo
     */
    public function setPaisCodigo($PaisCodigo): void
    {
        $this->_PaisCodigo = $PaisCodigo;
    }

    /**
     * @return mixed
     */
    public function getPaisIso()
    {
        return $this->_PaisIso;
    }

    /**
     * @param mixed $PaisIso
     */
    public function setPaisIso($PaisIso): void
    {
        $this->_PaisIso = $PaisIso;
    }

    /**
     * @return mixed
     */
    public function getPaisNombre()
    {
        return $this->_PaisNombre;
    }

    /**
     * @param mixed $PaisNombre
     */
    public function setPaisNombre($PaisNombre): void
    {
        $this->_PaisNombre = $PaisNombre;
    }
    public function __construct()
    {
        parent::__construct();
    }

}