<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>productos!</title>
</head>

<body>
    <div class="col-12">
        <div class="card" style="width: 18rem;">
            
            <div class="card-body">
                <h5 class="card-title">consumiendo api</h5>
                <!-- <a href="#" class="btn btn-primary" style="text-align: center;" onclick="getmetodo()" >ver productos </a> -->
                <button class="btn btn-primary" style="text-align: center;" onclick="getmetodo()">ver productos</button>
                <a class="btn btn-primary" style="text-align: center;" href="<?= base_url('pedidosController') ?>">ordenar productos</a>

            </div>
        </div>
    </div>
    <!-- // -->
    <div class="row " id="div_metodo_get">

    </div>

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
                    console.log(key,value);
                   // console.log(value[1]);
                   //console.log(value[0].nombre_producto);
                   for(datos of value){
                    cadena += '<div class="col-md-4">'+
                               '<div class = "card" >'+
                                    '<div class = "card-body" >'+
                                    '<p class = "card-text" >'+datos.imagen+'</p>'+
                                        '<h5 class = "card-title" >'+datos.nombre_producto+'</h5>'+
                                         '<p class = "card-text" >'+datos.descripcion_producto+'</p>'+
                                         '<p class = "card-text" >'+'$'+datos.precio+'</p>'+

                                    '</div>'+
                                    '</div>'+
                                   
                              '</div>';
                   }
                    
                  
                       
                }
                document.getElementById('div_metodo_get').innerHTML=cadena;

            }
        })
    }
</script>

</html>