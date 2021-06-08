<?php
require './Producto.php';
class Bebida extends Producto
{
    public __construct($id, $marca, $fecha)
    {
        parent::__construct($id, $marca, $fecha);
        $this->_tipo = "bebida";
    }
}