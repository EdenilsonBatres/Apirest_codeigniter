<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>pedidos!</title>
</head>

<body>
    <div class="col-12">
        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <h5 class="">selecciona los productos que vas agregar a tu pedido</h5>

                <!-- <a href="#" class="btn btn-primary" style="text-align: center;" onclick="getmetodo()" >ver productos </a> -->
                <button class="btn btn-primary" style="text-align: center;" onclick="getmetodo()">ver productos</button>
                <!-- <a class="btn btn-primary" style="text-align: center;" href="<?= base_url('pedidosController') ?>">ordenar productos</a> -->

            </div>
        </div>
   
    <!-- // fomrulario-->
    <form method="POST" action="<?= base_url('restapi/create') ?>">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre_cliente" aria-describedby="emailHelp">
        </div>

        <div class="form-group form-check">
            <!-- // introduciendo los resultado en el form-->
            <div class="row " id="div_metodo_get">

    </div>
        
        </div>
      
        <button type="submit" class="btn btn-primary">enviar</button>

    </form>

    <!-- // -->
    
    </div>
    <!-- // -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
<script>
    function getmetodo() {
        $.ajax({
            type: 'GET',
            url: 'http://localhost/PruebaWebInformatica/public/restapi',
            dateType: 'JSON'
        }).done(function(resp) {
            let cadena = '';
            for (var key in resp) {

                // Compruebe si la propiedad realmente existe
                if (resp.hasOwnProperty(key)) {
                    var value = resp[key];
                    // Haz algo con el artículo:
                    console.log(key, value);
                    // console.log(value[1]);
                    //console.log(value[0].nombre_producto);
                    for (datos of value) {
                        cadena += '<div class="col-md-4">' +
                            '<div class = "card" >' +
                            '<input type="checkbox" class="form-check-input" value="'+datos.id_producto+'" name="pd[]"  >'+
                            '<div class = "card-body" >' +
                            '<p class = "card-text" >' + datos.imagen + '</p>' +
                            '<h5 class = "card-title" >' + datos.nombre_producto + '</h5>' +
                            '<p class = "card-text" >' + datos.descripcion_producto + '</p>' +
                            '<p class = "card-text" >' + '$' + datos.precio + '</p>' +

                            '</div>' +
                            '</div>' +

                            '</div>';
                    }



                }
                document.getElementById('div_metodo_get').innerHTML = cadena;

            }
        })
    }
</script>

</html>