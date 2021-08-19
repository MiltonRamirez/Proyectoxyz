<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/estilos.css">
    <title>Sesiones</title>
</head>
<body>

    <div>
        <h1>Proyecto XYZ</h1>
    </div>

    

<section>

    <h1 id="subtitulo">Ingresa tus datos</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Introduce tú nombre">
        <input type="email" name="correo" placeholder="Introduce tú correo">
        <input type="password" name="contrasena" id="pass" placeholder="Introduce tú contraseña">
        <label for=""></label>
        <input accept="image/png,image/jpeg" type="file" name="foto">
        <input type="hidden" name="peticion" value="guardarUsuario">

        <input id="boton2" type="submit" onclick="encriptar()" value="ingresar" name="boton">
    </form>

    <p>
        <?php
            if(isset($boton)){
                if($datos)
                    echo 'El registro se realizó con éxito';
                else
                    echo 'No se pudo realizar el registro';
        }

        ?>
    </p>
</section>
    
    <script src="vista/js/sha256.js"></script>
    <script src="vista/js/funciones.js"></script>
</body>
</html>