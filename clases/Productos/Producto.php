<?php
class Producto
{
    public $_id;
    public $_marca;
    public $_fecha;
    public $_tipo;
    
    public __construct($id, $marca, $fecha)
    {
        $this->_id = $id;
        $this->_marca = $marca;
        $this->_fecha = $fecha;
    }
}