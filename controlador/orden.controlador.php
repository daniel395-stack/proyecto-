<?php

// require_once '../modelo/dto/orden.php';
// require_once '../modelo/dao/ordendao.php';


    class ControladorOrden{

        /*----------------------------------------------------------
        -              ATRIBUTOS DE LA CLASE ORDEN                 -
        ----------------------------------------------------------*/
        
        
        private $objDtoOrden;
        private $estado = false;

        

            public function __construct(){
                try
                {
        
                    $this -> objDtoOrden = new Orden();
        
                } catch(Exception $e) {
        
                    echo "Se ha presentado un error en la metodo constructor humano ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        
                }
        
            }//FIN DEL METODO CONSTRUCTOR

        public function ctrInsertarOrden(){

            try
            {
                // $this -> objDtoOrden -> setCodigoOrden($_POST['txtCodigoOrden']);
                $this -> objDtoOrden -> setFecha($_POST['txtFecha']);
                $this -> objDtoOrden -> setNumero($_POST['txtNumero']);
                $this -> objDtoOrden -> setProveedor($_POST['txtProveedor']);
                $this -> objDtoOrden -> setUbicacion($_POST['txtUbicacion']);
                $this -> objDtoOrden -> setRuta($_POST['txtRuta']);
                $this -> objDtoOrden -> setTelefono($_POST['txtTelefono']);
                $this -> objDtoOrden -> setEmail($_POST['txtEmail']);
                $this -> objDtoOrden -> setProducto($_POST['txtProducto']);
                $this -> objDtoOrden -> setCantidad($_POST['txtCantidad']);
                $this -> objDtoOrden -> setEstampilla($_POST['txtEstampilla']);
                $this -> objDtoOrden -> setCabezote($_POST['txtCabezote']);
                $this -> objDtoOrden -> setFurgon($_POST['txtFurgon']);
                $this -> objDtoOrden -> setLlantas($_POST['txtLlantas']);
                $this -> objDtoOrden -> setEstado($_POST['txtEstado']);

                $objOrdenDao = new OrdenDao( $this -> objDtoOrden );

                // echo var_dump($objOrdenDao-> mdlListarOrden() -> fetchAll());

                $objOrdenDao -> mdlInsertarOrden();

                $this -> estado = true;

            } catch(Exception $e) {
                
                echo "Se ha presentado un error en la metodo insertar Personal ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();

            }

            return $this -> estado;
        }    



            public function ctrListarOrden(){

            $objOrdenDao = new OrdenDao( $this -> objDtoOrden );

            $arrayOrden = $objOrdenDao -> mdlListarOrden() -> fetchAll();
            
            return $arrayOrden;
            
        }


    }//FIN DE LA CLASE

    // $objControladorOrden = new ControladorOrden();
    // $objControladorOrden -> ctrInsertarOrden();

?>

