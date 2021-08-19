<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="vista/css/estilos2.css">

    <link rel="stylesheet" type="text/css" href="vista/css/bootstrap.min.css">

    <title>Sesiones</title>

</head>

<body>

    



    <div>

        <h1>Proyecto XYZ</h1>

    </div>

    <nav id="enlaces">

        <a class="opcionMenu" href="?peticion=perfilAdmin">Perfil</a>

        <a href="?peticion=productos">Registro de Productos</a>

        <a href="?peticion=produ">Productos</a>

        <a class="opcionMenu" href="?peticion=cerrar">Cerrar Sesión</a>

    </nav>
   


	<h1 id="subtitulo">Galeria</h1>




<table class="table table-bordered">

                    <thead>

                        <tr>

                            <th>CANCELAR</th>

                            <th>FOTO</th>

                            <th>MODELO</th>

                            <th>NOMBRE</th>

                            <th>DESCRIPCIÓN</th>

                            <th>PRECIO</th>

                            <th>STOCK</th>

                            <th>MODIFICAR</th>

                        </tr>   

                        

                        <?php

                        while($producto = $datos->fetch_assoc()){

                        echo '

                        <tr id="productos">

                            <td><img src="vista/catalogo/clientes/cancelar.png"></td>

                            <td><img src="'.$producto['foto'].'"/></td>

                            <td><span>'.$producto['modelo'].'<span></td>

                            <td><span>'.$producto['nombre'].'<span></td>

                            <td><span>'.$producto['descripcion'].'<span></td>

                            <td><span>'.$producto['precio'].'<span></td>

                            <td><span>'.$producto['stock'].'<span></td>

                            <td><img src="vista/catalogo/clientes/modificar.png"></td>

                            

                        </tr>

                        ';

                        }




                        ?>


						

<script src="vista/js/sha256.js"></script>

<script src="vista/js/funciones.js"></script>



<script src="jquery.min.js"></script>

<script src="vista/js/bootstrap.min.js"></script>

</body>

</html>