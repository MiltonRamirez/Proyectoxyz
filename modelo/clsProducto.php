<?php

    require_once 'helpers/clsConexion.php';

    class Producto{
        private $_modelo;
        private $_nombre;
        private $_descripcion;
        private $_foto;
        private $_precio;
        private $_cantidad;
        private $_estado;

        public function setDatos($mod,$nom,$des,$pre,$can,$fot){
            $this->_modelo = $mod;
            $this->_nombre = $nom;
            $this->_descripcion = $des;
            $this->_foto = $fot;
            $this->_precio = $pre;
            $this->_cantidad = $can;
        }

        public function insertarProducto(){
            $nombrefoto = $this->_foto['foto']['name'];
            $ruta = 'vista/catalogo/clientes/'.$nombrefoto;
        

            move_uploaded_file($this->_foto['foto']['tmp_name'],$ruta);



            $sql = "insert into productos
                     values('$this->_modelo','$this->_nombre',
                     '$this->_descripcion','$ruta','$this->_precio',
                     '$this->_cantidad',1)";
            //perfil 2=Cliente, 1=Administrador
            //estado = 1=bueno, 0=malo

            $res = $this->_aplicarQuery($sql);

            return $res;
        }

        public function productos(){
            $sql = "select * from productos where estatus = 1";
            $res = $this->_aplicarQuery($sql);
            return $res;
        }


        private function _aplicarQuery($consulta){
            $objConexion = new Conexion();
            $dato = $objConexion->ejecutarConsulta($consulta);
            $objConexion->cerrarConexion();
            return $dato;

        }



    }
?>

