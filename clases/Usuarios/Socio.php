<?php
require './Empleado.php';

class Socio extends Empleado
{
    function __construct($id, $dni, $nombre, $apellido)
    {
        parent::__construct($id, $dni, $nombre, $apellido);
        $this->_puesto = "Socio";
    }
}