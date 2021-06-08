<?php
require './Mesa.php';
class Pedidos
{
    public $_id;
    public $_mesa;
    public $_costo;
    public $_request;

    public __construct($id, $mesa, $cost, $request)
    {
        $this->_id = $id;
        $this->_mesa = $mesa;
        $this->_costo = $cost;
        $this->_request = $request;
    }
}