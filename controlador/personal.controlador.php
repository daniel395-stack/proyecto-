<?php

// require_once '../modelo/dto/personal.php';
// require_once '../modelo/dao/personaldao.php';


    class ControladorPersonal{

        /*----------------------------------------------------------
        -              ATRIBUTOS DE LA CLASE PERSONAL                 -
        ----------------------------------------------------------*/
        
        
        private $objDtoPersonal;
        private $estado = false;

        

            public function __construct(){
                try
                {
        
                    $this -> objDtoPersonal = new Personal();
        
                } catch(Exception $e) {
        
                    echo "Se ha presentado un error en la metodo constructor humano ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        
                }
        
            }//FIN DEL METODO CONSTRUCTOR

        public function ctrInsertarPersonal(){

            try
            {
                // $this -> objDtoPersonal -> setCodigoPersonal($_POST['txtCodigoPersonal']);
                $this -> objDtoPersonal -> setCedula($_POST['txtCedula']);
                $this -> objDtoPersonal -> setNombre($_POST['txtNombre']);
                $this -> objDtoPersonal -> setApellido($_POST['txtApellido']);
                $this -> objDtoPersonal -> setTelefono($_POST['txtTelefono']);
                $this -> objDtoPersonal -> setDireccion($_POST['txtDireccion']);
                $this -> objDtoPersonal -> setEmail($_POST['txtEmail']);
                $this -> objDtoPersonal -> setProfesion($_POST['txtProfesion']);
                $this -> objDtoPersonal -> setPaisNac($_POST['txtPaisNac']);
                $this -> objDtoPersonal -> setNivelEduc($_POST['txtNivelEduc']);
                $this -> objDtoPersonal -> setFechaNac($_POST['txtFechaNac']);
                $this -> objDtoPersonal -> setSexo($_POST['cboSexo']);
                $this -> objDtoPersonal -> setGrupoSanguineo($_POST['txtGrupoSanguineo']);
                $this -> objDtoPersonal -> setEdoCivil($_POST['txtEdoCivil']);
                $this -> objDtoPersonal -> setCargaFamiliar($_POST['txtCargaFamiliar']);

                $objPersonalDao = new PersonalDao( $this -> objDtoPersonal );

                // echo var_dump($objPersonalDao-> mdlListarPersonal() -> fetchAll());

                $objPersonalDao -> mdlInsertarPersonal();

                $this -> estado = true;

            } catch(Exception $e) {
                
                echo "Se ha presentado un error en la metodo insertar Personal ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();

            }

            return $this -> estado;
        }    

    
        
            public function ctrListarPersonal(){

            $objPersonalDao = new PersonalDao( $this -> objDtoPersonal );

            $arrayPersonal = $objPersonalDao -> mdlListarPersonal() -> fetchAll();
            
            return $arrayPersonal;
            
        }

    }//FIN DE LA CLASE

    // $objControladorPersonal = new ControladorPersonal();
    // $objControladorPersonal -> ctrInsertarPersonal();
?>


