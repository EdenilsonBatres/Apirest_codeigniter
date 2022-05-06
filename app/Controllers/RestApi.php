<?php

namespace App\Controllers;

use App\Models\detallePedidosModel;
use App\Models\PedidosModel;
use App\Models\ProductosModel;
use CodeIgniter\RESTful\ResourceController;
use DateTime;

class RestApi extends ResourceController
{
    protected $modelName = 'App\Models\ProductosModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respuestaGenerica($this->model->findAll(), " ", 200);
    }
    //fincion para mostrar
    public function show($id = null)
    {
        if ($id == null) {
            return $this->respuestaGenerica(null, "id no encontrado ", 400);
        }
        $producto = $this->model->find($id);
        if (!$producto) {
            return $this->respuestaGenerica(null, "producto no existe ", 400);
        }

        return $this->respuestaGenerica($producto, "", 200); //mostrando un solo producto

    }
    //funcion para crear
    public function create()
    {
        $producto = new ProductosModel();
        $pedidos = new PedidosModel();
        $detallePedidos = new detallePedidosModel();

        $d = new DateTime();
        // echo $d->format('Y-m-d');
        $id = $pedidos->insert([
            'nombre_cliente' => $this->request->getPost('nombre_cliente'),
            'fecha_pedido' =>  $d->format('Y-m-d')
        ]);
        //
        $listaPedidos = '';
        if (isset($_POST['pd'])) {
            foreach ($_POST['pd'] as $valor) {
                $listaPedidos = $listaPedidos . '' . $valor;
                $id_pedidos = $detallePedidos->insert([
                    'id_pedido' => $id,
                    'id_producto' =>  $valor
                ]);
            }
        }
        //   echo "$listaPedidos";

        //var_dump($productos);


        return $this->respuestaGenerica(null, 'pedidos almacenado', 201);
    }


    private function respuestaGenerica($data, $msj, $code)
    {
        if ($code == 200) {
            return $this->respond(array(
                "data" => $data,
                "code" => $code
            ));
        } elseif ($code == 201) {
            return $this->respond(array(
                "msj" => $msj,
                "code" => $code
            ));
        } else {
            return $this->respond(array(
                "msj" => $msj,
                "code" => $code
            ));
        }
    }

    // metodos

}
