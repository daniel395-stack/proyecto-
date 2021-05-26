<?php

    require_once 'modelo/conexion.php';

    /*================================================== 
                        MODELO DE USUARIO
    ===================================================*/

    class UsuarioDao{
        /*====================================================
                    ATRIBUTOS DE LA CLASE USUARIO
        ====================================================*/
        private $codigo;
        private $usuario;
        private $clave;
        private $fecha;
        /*====================================================
                            METODO CONSTRUCTOR
        ====================================================*/        

        function __construct( $objUsuario ){

            $this -> codigo     = $objUsuario -> getCodigo();
            $this -> usuario    = $objUsuario -> getUsuario();
            $this -> clave      = $objUsuario -> getClave();
            $this -> fecha      = $objUsuario -> getFecha();

        }
        /*====================================================
                            METODO CONSULTA
        ====================================================*/ 
        public function mdlConsultarLogin(){
            /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/  

            $sql = "call SPConsultarLogin ( ?, ? )";
            
            try {

                /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                /*====================================================
                    SE INGRESA EL CODIGO QUE SE DESEA CONSULTAR
                ====================================================*/

                $stmt -> bindParam ( 1, $this -> usuario,   PDO::PARAM_STR);
                $stmt -> bindParam ( 2, $this -> clave,     PDO::PARAM_STR);

                $stmt -> execute();

                $resultSet = $stmt;

            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase DAO ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
            } catch (PDOException $ex) {
                echo "Se ha presentado un error al consultar los datos ". $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
            }// FIN DEL TRY-CATCH

            return $resultSet;

        }// FIN METODO CONSULTAR
        /*====================================================*/        
    }

?>