<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id_producto';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nombre_producto', 'descripcion_producto', 'imagen', 'precio'];

    function getAll(){
        return $this-> asArray()
        ->select('nombre_producto');
    }

}