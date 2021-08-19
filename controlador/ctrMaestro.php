<?php
    $peticion = 'inicio';
    /*var_dump($_REQUEST);
    var_dump($_FILES);
    die();*/
    extract($_REQUEST);

    require_once 'helpers/clsSesion.php';
    $objSesion = new Sesion();





    if(!isset($_SESSION['usuario'])){
    switch($peticion){

        case 'inicio':
            require_once 'vista/php/inicio.php';
            break;
 
        case 'galeria':
            require_once 'modelo/clsProducto.php';
            $objProducto = new Producto();
            $datos = $objProducto->productos();

            require_once 'vista/php/galeria.php';
            break;

        case 'contacto':
            require_once 'vista/php/contacto.php';
            break;

        case 'Registrate':
            require_once 'vista/php/registro.php';
            break;

        case 'guardarUsuario':
            require_once 'modelo/clsUsuario.php';
            $objUsuario = new Usuario();

            $objUsuario->setDatos($correo,$nombre,$contrasena,$_FILES);
            $datos = $objUsuario->InsertarUsuario();

            require_once 'vista/php/registro.php';
            break;      

        case 'ingresar':
            require_once 'modelo/clsUsuario.php';
            $objUsuario = new Usuario();

            $objUsuario->setDatos($correo,null,$contrasena,null);
            $datos = $objUsuario->login();

            if(isset($datos['perfil'])){
                $objSesion->crearVariable('usuario',$datos);

                if($datos['perfil'] == 2)
                    header('location:?peticion=perfilCliente');
                else
                    header('location:?peticion=perfilAdmin');
            }

            require_once 'vista/php/inicio.php';
            break;

            default:
                require_once 'vista/php/inicio.php';
        }
    }





    if(isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 2){
        switch($peticion){

            case 'perfilCliente':
                require_once 'vista/php/indexCliente.php';
                break;

            case 'galeria':
                require_once 'modelo/clsProducto.php';
                $objProducto = new Producto();
                $datos = $objProducto->productos();

                require_once 'vista/php/galeria.php';
                break;
                
            case 'cerrar':
                $objSesion->borrarVariable('usuario');
                header('location:?peticion=galeria'); 
                //require_once 'vista/php/galeria.php';
                break;
            default:
                require_once 'vista/php/indexCliente.php';
        }
    }




    if(isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 1){
        switch($peticion){

            case 'perfilAdmin':
                require_once 'vista/php/indexAdmin.php';
                break;

            case'productos':
                require_once 'vista/php/registroProductos.php';
                break;
            case'produ':
                require_once 'modelo/clsProducto.php';
                
                $objProducto = new Producto();
                $datos = $objProducto->productos();
                require_once 'vista/php/productos.php';
                break;
                
            case 'guardarProducto':
                require_once 'modelo/clsProducto.php';
                $objProducto = new Producto();
            
                $objProducto->setDatos($modelo,$nombre,$descripcion,
                $precio,$cantidad,$_FILES);
                $datos = $objProducto->insertarProducto();
            
                require_once 'vista/php/registroProductos.php';
                break;

            case 'cerrar':
                $objSesion->borrarVariable('usuario'); 
                header('location:?peticion=galeria'); 
                //require_once 'vista/php/galeria.php';
                break;
            default:
                require_once 'vista/php/indexAdmin.php';
        }
    }

?>