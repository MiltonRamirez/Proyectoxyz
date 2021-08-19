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

    <div id="enlaces">
        <a href="?peticion=ingresar">Quiénes Somos</a>
        <a href="?peticion=galeria">Galería</a>
        <a href="?peticion=contacto">Contacto</a>
        <a href="?peticion=cerrar">Cerrar Sesión</a>
        
    </div>


    <h1 id="subtitulo">Registro</h1>

    <form action="" method="post">
        <input type="email" name="correo" placeholder="Introduce tú correo">
        <input type="password" name="contrasena" id="pass" placeholder="Contraseña">
        <input type="hidden" name="peticion" value="ingresar">

        <input id="boton" type="submit" value="Ingresar" onclick="encriptar()">

    </form>

    <p>
        <?php
            if(isset($correo))
                echo 'No se pudo iniciar sesion';
        ?>
    </p>


    <form action="" method = "post">
        <input id="boton2" type="submit" value="Registrate" name="peticion">

    </form>
        

    <script src="vista/js/sha256.js"></script>
    <script src="vista/js/funciones.js"></script>
</body>
</html>