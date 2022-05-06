<?php

namespace App\Models;

use CodeIgniter\Model;

class detallePedidosModel extends Model
{
    protected $table      = 'pedidos_detalle';
    protected $primaryKey = 'id_detalle';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_pedido', 'id_producto'];

    function getAll(){
        return $this-> asArray()
        ->select('nombre_cliente');
    }

}