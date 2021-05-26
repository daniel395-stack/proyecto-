<?php

// require_once '../modelo/dto/empleado.php';
// require_once '../modelo/dao/empleadodao.php';


    class ControladorEmpleado{

        /*----------------------------------------------------------
        -              ATRIBUTOS DE LA CLASE EMPLEADO                 -
        ----------------------------------------------------------*/
        
        
        private $objDtoEmpleado;
        private $estado = false;
        

            public function __construct(){
                try
                {
        
                    $this -> objDtoEmpleado = new Empleado();
        
                } catch(Exception $e) {
        
                    echo "Se ha presentado un error en la metodo constructor humano ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        
                }
        
            }//FIN DEL METODO CONSTRUCTOR

        public function ctrInsertarEmpleado(){

            try
            {
                // $this -> objDtoEmpleado -> setCodEmpleados($_POST['txtCodEmpleados']);
                $this -> objDtoEmpleado -> setPrimerNombre($_POST['txtPrimerNombre']);
                $this -> objDtoEmpleado -> setSegundoNombre($_POST['txtSegundoNombre']);
                $this -> objDtoEmpleado -> setPrimerApellido($_POST['txtPrimerApellido']);
                $this -> objDtoEmpleado -> setSegundoApellido($_POST['txtSegundoApellido']);
                $this -> objDtoEmpleado -> setSexo($_POST['cboSexo']);
                $this -> objDtoEmpleado -> setReligion($_POST['txtReligion']);
                $this -> objDtoEmpleado -> setEscolaridad($_POST['txtEscolaridad']);
                $this -> objDtoEmpleado -> setDeporte($_POST['txtDeporte']);
                $this -> objDtoEmpleado -> setTelefono($_POST['txtTelefono']);
                $this -> objDtoEmpleado -> setCelular($_POST['txtCelular']);
                $this -> objDtoEmpleado -> setDireccion($_POST['txtDireccion']);
                $this -> objDtoEmpleado -> setFechaNacimiento($_POST['txtFechaNacimiento']);
                $this -> objDtoEmpleado -> setCedula($_POST['txtCedula']);
                $this -> objDtoEmpleado -> setCorreo($_POST['txtCorreo']);

                $objEmpleadoDao = new EmpleadoDao( $this -> objDtoEmpleado );

                // var_dump($this->objDtoEmpleado);

                $objEmpleadoDao -> mdlInsertarEmpleado();

                $this -> estado = true;

                header("location:empleado");

            } catch(Exception $e) {
                
                echo "Se ha presentado un error en la metodo insertar Personal ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();

            }

            return $this -> estado;
        }    

        
        public function ctrListarEmpleado(){

            $objEmpleadoDao = new EmpleadoDao( $this -> objDtoEmpleado );

            $arrayEmpleado = $objEmpleadoDao -> mdlListarEmpleado() -> fetchAll();
            
            return $arrayEmpleado;
            
        }




    }//FIN DE LA CLASE

    // $objControladorEmpleado = new ControladorEmpleado();
    // $objControladorEmpleado -> ctrInsertarEmpleado();
?>
