<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/estilos4.css">
    <link rel="stylesheet" type="text/css" href="vista/css/bootstrap.min.css">
    <title>Sesiones</title>
</head>
<body>
    

    <div>
        <h1>Proyecto XYZ</h1>
    </div>

    <?php
        if(!isset($_SESSION['usuario'])){
    ?>
        <div id="enlaces">
            <a href="?peticion=ingresar">Quiénes Somos</a>
            <a href="?peticion=galeria">Galería</a>
            <a href="?peticion=contacto">Contacto</a>
            <a href="?peticion=cerrar">Cerrar Sesión</a>
        </div>
    <?php 
    }
    else{
    ?>
        <nav id="enlaces">
            <a class="opcionMenu" href="?peticion=perfilCliente">Perfil</a>
            <a class="opcionMenu" href="?peticion=galeria">Galería</a>
            <a class="opcionMenu" href="?peticion=cerrar">Cerrar Sesión</a>
        </nav>
    <?php
    }
    ?>


    <h1 id="subtitulo">Galeria</h1>




    
    
    <?php
        while($producto = $datos->fetch_assoc()){
        echo '
        <div id="productos">
            <img src="'.$producto['foto'].'"/>

            <h3>MODELO</h3>
            <span>'.$producto['modelo'].'<span>
            <h3>NOMBRE</h3>
            <span>'.$producto['nombre'].'<span>
            <h3>DESCRIPCIÓN</h3>
            <span>'.$producto['descripcion'].'<span>
            <h3>PRECIO</h3>
            <span>'.$producto['precio'].'<span>
            <h3>EN STOCK</h3>
            <span>'.$producto['stock'].'<span>
        </div>
        ';
    }
    ?>
    <script src="vista/js/sha256.js"></script>
    <script src="vista/js/funciones.js"></script>

    <script src="jquery.min.js"></script>
    <script src="vista/js/bootstrap.min.js"></script>
</body>
</html>
