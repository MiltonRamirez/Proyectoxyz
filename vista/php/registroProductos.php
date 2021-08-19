<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/estilos2.css">
    <title>Sesiones</title>
</head>
<body>

    <div>
        <h1>Proyecto XYZ</h1>
        <img class="fotoperfil" src="<?php echo $_SESSION['usuario']['foto'] ?>" alt="">
        <p id="nameee"><?php echo $_SESSION['usuario']['nombre'] ?></p>
    </div>

    <nav id="enlaces">
        <a class="opcionMenu" href="?peticion=perfilAdmin">Perfil</a>
        <a href="?peticion=productos">Registro de Productos</a>
        <a href="?peticion=produ">Productos</a>
        <a class="opcionMenu" href="?peticion=cerrar">Cerrar Sesión</a>
    </nav>
    

<section>

    <h1 id="subtitulo">Ingrese los datos del producto</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="modelo" placeholder="Modelo">
        <input type="text" name="nombre" placeholder="Nombre del producto">
        <textarea id="dproducto" name="descripcion" class="form-textarea" placeholder="Descripcion del Producto"></textarea>
        <label for=""></label>
        <input accept="image/png,image/jpeg" type="file" name="foto">
        <input type="text" name="precio" placeholder="Precio Total">
        <input type="text" name="cantidad" placeholder="Stock">
        

        <input type="hidden" name="peticion" value="guardarProducto">

        <input id="boton2" type="submit" onclick="encriptar()" value="Guardar" name="boton">
    </form>

    <p>
        <?php
            if(isset($modelo)){
                if($datos)
                    echo 'El registro del producto se realizó con éxito';
                else
                    echo 'No se pudo realizar el registro';
        }

        ?>
    </p>
</section>
    
    <script src="vista/js/sha256.js"></script>
    <script src="vista/js/funciones.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
