<?php

require_once "config/ConexionBD.php";


class Autenticacion extends ConexionBD
{
    private $_AutenticacionCodigo;
    private $_Contrato;
    private $_AutenticacionNombreUsuario;
    private $_AutenticacionContrasenia;

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
    public function getAutenticacionContrasenia()
    {
        return $this->_AutenticacionContrasenia;
    }

    /**
     * @param mixed $AutenticacionContrasenia
     */
    public function setAutenticacionContrasenia($AutenticacionContrasenia): void
    {
        $this->_AutenticacionContrasenia = $AutenticacionContrasenia;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function Logeo(){
        $sql="CALL Logueo(?,?)";

        $consu=$this->Conexion->prepare($sql);

        $consu->bind_param('ss',
            $this->_AutenticacionNombreUsuario,
            $this->_AutenticacionContrasenia);

        $consu->execute();
        $dataset=$consu->get_result();


//        $result[0]['AutenticacionContrasena']=password_hash($result[0]['AutenticacionContrasena'],PASSWORD_BCRYPT, ['cost'=>4]);
        $result=$dataset->fetch_all(MYSQLI_ASSOC);
        if(count($result)>=1){
            return $result;
        }else{
            return null;
        }


    }
    public function RegistrarNuevaAutenticacion(){
        $sql= "INSERT INTO autenticacion
                          (Contrato,AutenticacionNombreUsuario,AutenticacionContrasena)
                            VALUES (?,?,?)";
        $consulta=$this->Conexion->prepare($sql);
        $consulta->bind_param('sss',
            $this->_Contrato,
            $this->_AutenticacionNombreUsuario,
            $this->_AutenticacionContrasenia);
//        return $consulta->execute();
        if ($consulta->execute()){
            return $consulta->insert_id;
        }else{
            return null;
        }
    }
    public function VerificarNombreUsuario(){
        $sql="SELECT A.AutenticacionNombreUsuario FROM autenticacion A where A.AutenticacionNombreUsuario=?";
        $consulta=$this->Conexion->prepare($sql);
        $consulta->bind_param('s',$this->_AutenticacionNombreUsuario);
        $consulta->execute();
        $result_set=$consulta->get_result();
        $datos=$result_set->fetch_all(MYSQLI_ASSOC);

        if (count($datos)>=1){
            return $datos;
        }else{
            return null;
        }
    }
}