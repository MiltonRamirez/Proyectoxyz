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

    <h1 id="subtitulo">Somos</h1>

    <?php
    /*
        echo '<h3>Valores por POST</h3>'; //Valores por POST $numero
        //LAS COMILLAS SIMPLES MANDAN LA IFORMACION MÁS RAPIDO...
        //echo "<h3>Valores por POST</h3> $numero"; //Valores por POST //LAS COMILLAS
        //DOBLES ("") ANALIZAN LA INFORMACIÓN, ES MÁS TARDADO...
        //print '<h3>Valores por POST </h3>'

        //echo 'a', 'bbcd', 'qwdbbjhqd';
        //CON "echo", podemos escribir varias concatenaciones y
        //separarlas con comas...
        //print 'a'
        //print 'asdhkj';
        //CON print, tenemos que escribir de una por una las
        //concatenaciones...
        echo 'BIENVENIDA (O): '.$nombre;
        echo '</br> Tu contraseña es: '.$contrasena;
        
        echo '<hr><h3>Valores por SESSION</h3>';
        echo 'BIENVENIDA (O): '.$_SESSION['user']; 
        echo '</br> Tu contraseña es: '.$_SESSION['pass'];
        */
    ?>
</body>
 