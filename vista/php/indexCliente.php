<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/estilos3.css">
    <title>Sesiones</title>
</head>
<body>
    <div>
        <h1>Proyecto XYZ</h1>
        <img class="fotoperfil" src="<?php echo $_SESSION['usuario']['foto'] ?>" alt="">
        <p><?php echo $_SESSION['usuario']['nombre'] ?></p>
</div>
    
    <nav id="enlaces">
        <a class="opcionMenu" href="?peticion=perfilCliente">Perfil</a>
        <a class="opcionMenu" href="?peticion=galeria">Galería</a>
        <a class="opcionMenu" href="?peticion=cerrar">Cerrar Sesión</a>
    </nav>

    <section>
        <h2>Perfil Cliente</h2>
        
    </section>
</body>
</html>