<?php

    require_once 'helpers/clsConexion.php';

    class Usuario{
        private $_correo;
        private $_nombre;
        private $_contrasena;
        private $_foto;
        private $_perfil;
        private $_estatus;

        public function setDatos($corr,$nom,$con,$fot){
            $this->_correo = $corr;
            $this->_nombre = $nom;
            $this->_contrasena = $con;
            $this->_foto = $fot;
        }


        public function insertarUsuario(){
            $nombrefoto = $this->_foto['foto']['name'];
            

            if($nombrefoto != null){
                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                // Output: 54esmdr0qf
                //echo substr(str_shuffle($permitted_chars), 0, 5);
                $extension = '.'.substr($nombrefoto,-3);
                $nombreimagen = 'vista/catalogo/clientes/' . substr(str_shuffle($permitted_chars), 0, 5) .$extension;
            }
            else{
                $nombreimagen = 'vista/catalogo/clientes/default.JPG';
            }
        

            //move_uploaded_file($this->_foto['foto']['tmp_name'],$ruta);
            move_uploaded_file($this->_foto['foto']['tmp_name'],$nombreimagen);



            $sql = "insert into usuarios
                     values('$this->_correo','$this->_nombre',
                     sha2('$this->_contrasena',256),'$nombreimagen',2,1)";
            //perfil 2=Cliente, 1=Administrador
            //estatus 1=activo, 0=inactivo

            $res = $this->_aplicarQuery($sql);

            return $res;
        }


        public function login(){
            $this->_correo = htmlentities($this->_correo, ENT_QUOTES);


            $sql = "select nombre,foto,perfil
            from usuarios
            where correo = '$this->_correo' &&
            contrasena = sha2('$this->_contrasena',256)";

            $res = $this->_aplicarQuery($sql);
            $datos = $res->fetch_assoc();

            return $datos;
        }


        private function _aplicarQuery($consulta){
            $objConexion = new Conexion();
            $dato = $objConexion->ejecutarConsulta($consulta);
            $objConexion->cerrarConexion();
            return $dato;

        }
    }
?>