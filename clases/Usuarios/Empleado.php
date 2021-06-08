<?php

class Empleado
{
    public $_id;
    public $_dni;
    public $_nombre;
    public $_apellido;
    public $_puesto;

    function __construct($id, $dni, $nombre, $apellido)
    {
        $this->_id = $id;
        $this->_dni = $dni;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
    }
}