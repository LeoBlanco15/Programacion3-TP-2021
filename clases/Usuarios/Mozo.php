<?php
require './Empleado.php';
class Mozo extends Empleado
{
    function __construct($id, $dni, $nombre, $apellido)
    {
        parent::__construct($id, $dni, $nombre, $apellido);
        $this->_puesto = 'Mozo';
    }
}