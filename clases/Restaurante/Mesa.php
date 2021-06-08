<?php
require '../Usuarios/Mozo.php';
class Mesa
{
    public $_id;
    public $_numeroIntegrantes;
    public $_mozo;

    public __construct($id, $integrantes, $mozo)
    {
        $this->_id = $id;
        $this->_numeroIntegrantes = $integrantes;
        $this->_mozo = $mozo;
    }
}