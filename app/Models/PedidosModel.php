<?php

namespace App\Models;

use CodeIgniter\Model;

class PedidosModel extends Model
{
    protected $table      = 'pedidos';
    protected $primaryKey = 'id_pedido';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nombre_cliente', 'fecha_pedido'];

    function getAll(){
        return $this-> asArray()
        ->select('nombre_cliente');
    }

}