<?php

        require_once 'modelo/conexion.php';
        // require_once '../modelo/dto/personal.php';


        class PersonalDao{

                private $codigoPersonal; 
                private $cedula;
                private $nombre; 
                private $apellido; 
                private $telefono; 
                private $direccion; 
                private $email; 
                private $profesion; 
                private $paisNac; 
                private $nivelEduc; 
                private $fechaNac; 
                private $sexo; 
                private $grupoSanguineo; 
                private $edoCivil; 
                private $cargaFamiliar;

                function __construct($objDtoPersonal){
                // echo "se ha ejecutado correctamente";

                        $this -> codigoPersonal  = $objDtoPersonal -> getCodigoPersonal(); 
                        $this -> cedula          = $objDtoPersonal -> getCedula();
                        $this -> nombre          = $objDtoPersonal -> getNombre(); 
                        $this -> apellido        = $objDtoPersonal -> getApellido(); 
                        $this -> telefono        = $objDtoPersonal -> getTelefono(); 
                        $this -> direccion       = $objDtoPersonal -> getDireccion(); 
                        $this -> email           = $objDtoPersonal -> getEmail(); 
                        $this -> profesion       = $objDtoPersonal -> getProfesion(); 
                        $this -> paisNac         = $objDtoPersonal -> getPaisNac(); 
                        $this -> nivelEduc       = $objDtoPersonal -> getNivelEduc(); 
                        $this -> fechaNac        = $objDtoPersonal -> getFechaNac(); 
                        $this -> sexo            = $objDtoPersonal -> getSexo(); 
                        $this -> grupoSanguineo  = $objDtoPersonal -> getGrupoSanguineo(); 
                        $this -> edoCivil        = $objDtoPersonal -> getEdoCivil(); 
                        $this -> cargaFamiliar   = $objDtoPersonal -> getCargaFamiliar();

                }

                function mdlInsertarpersonal(){

                /*===========================================
                INGRESAR LA CONSULTA, PUEDE SER SP O QUERY
                ==============================================*/

                $sql = 'call SPInsertarpersonal( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';
                
                /*==============================
                INSTANCIAR LA BASE DE DATOS 
                ============================== */
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);
        
                /*======================================
                INSTANCIAR LOS VALORES QUE SE INSERTARAN
                ========================================= */
                

                        $stmt -> bindParam ( 1, $this -> codigoPersonal,        PDO::PARAM_INT);
                        $stmt -> bindParam ( 2, $this -> cedula,                PDO::PARAM_INT);
                        $stmt -> bindParam ( 3, $this -> nombre,                PDO::PARAM_STR);
                        $stmt -> bindParam ( 4, $this -> apellido,              PDO::PARAM_STR);
                        $stmt -> bindParam ( 5, $this -> telefono,              PDO::PARAM_INT);

                        $stmt -> bindParam ( 6, $this -> direccion,             PDO::PARAM_STR);
                        $stmt -> bindParam ( 7, $this -> email,                 PDO::PARAM_STR);
                        $stmt -> bindParam ( 8, $this -> profesion,             PDO::PARAM_STR);
                        $stmt -> bindParam ( 9, $this -> paisNac,               PDO::PARAM_STR);
                        $stmt -> bindParam ( 10, $this -> nivelEduc,            PDO::PARAM_STR);

                        $stmt -> bindParam ( 11, $this -> fechaNac,             PDO::PARAM_STR);
                        $stmt -> bindParam ( 12, $this -> sexo,                 PDO::PARAM_BOOL);
                        $stmt -> bindParam ( 13, $this -> grupoSanguineo,       PDO::PARAM_STR);
                        $stmt -> bindParam ( 14, $this -> edoCivil,             PDO::PARAM_STR);
                        $stmt -> bindParam ( 15, $this -> cargaFamiliar,        PDO::PARAM_STR);
                
                        $stmt -> execute();

                }

                /*==================================
                        METODO DE MODIFICACION 
                ===================================*/    

                public function mdlModificarPersonal(){
                
                /*========================
                INGRESAR LA CONSULTA
                ==========================*/

                $sql = 'call SPModificarpersonal( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';

                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                        /*===========================================
                        LOS DATOS QUE SE VAN A MODIFICAR
                        =============================================*/
                
                        $stmt -> bindParam ( 1, $this -> codigoPersonal,        PDO::PARAM_INT);
                        $stmt -> bindParam ( 2, $this -> cedula,                PDO::PARAM_INT);
                        $stmt -> bindParam ( 3, $this -> nombre,                PDO::PARAM_STR);
                        $stmt -> bindParam ( 4, $this -> apellido,              PDO::PARAM_STR);
                        $stmt -> bindParam ( 5, $this -> telefono,              PDO::PARAM_INT);

                        $stmt -> bindParam ( 6, $this -> direccion,             PDO::PARAM_STR);
                        $stmt -> bindParam ( 7, $this -> email,                 PDO::PARAM_STR);
                        $stmt -> bindParam ( 8, $this -> profesion,             PDO::PARAM_STR);
                        $stmt -> bindParam ( 9, $this -> paisNac,               PDO::PARAM_STR);
                        $stmt -> bindParam ( 10, $this -> nivelEduc,            PDO::PARAM_STR);

                        $stmt -> bindParam ( 11, $this -> fechaNac,             PDO::PARAM_STR);
                        $stmt -> bindParam ( 12, $this -> sexo,                 PDO::PARAM_BOOL);
                        $stmt -> bindParam ( 13, $this -> grupoSanguineo,       PDO::PARAM_STR);
                        $stmt -> bindParam ( 14, $this -> edoCivil,             PDO::PARAM_STR);
                        $stmt -> bindParam ( 15, $this -> cargaFamiliar,        PDO::PARAM_STR);
                
                        $stmt -> execute();

                }

                /*============================
                        METODO DE ELIMINAR
                =============================*/

                public function mdlEliminarPersonal(){
                
                $sql = "call SPEliminarpersonal( ? )";
                
                /*====================================================
                        INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                $stmt -> bindParam ( 1, $this -> codigoPersonal,        PDO::PARAM_INT);
                $stmt -> execute();

                } //FIN DEL METODO ELIMINAR 

                /*===========================================
                        METODO CONSULTA
                =============================================*/

                public function mdlConsultarPersonal(){
                
                $sql = "call SPConsultarpersonal ( ? )";

                /*====================================================
                        INSTACIAR LA BASE DE DATOS
                ====================================================*/

                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                /*====================================================
                SE INGRESA EL CODIGO QUE SE DESEA CONSULTAR
                ====================================================*/

                $stmt -> bindParam ( 1, $this -> codigoPersonal,        PDO::PARAM_INT);
                $stmt -> execute();

                $resultSet = $stmt;
                return $resultSet;
                
                } //FIN DEL METODO CONSULTA

                /*====================
                METODO LISTAR
                =======================*/
                public function mdlListarPersonal(){
                
                /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
                ===================================================*/  

                $sql = "call SPListarpersonal (  );";

                /*====================================================
                        INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);
                
                $stmt -> execute();

                $resultSet = $stmt;
                return $resultSet;
                
                } // FIN DEL METODO LISTAR

        }

                // $objDtoPersonal = new Personal();

                // $objDtoPersonal -> setCodigoPersonal(null); 
                // $objDtoPersonal -> setCedula(568920);
                // $objDtoPersonal -> setNombre("DANIEL"); 
                // $objDtoPersonal -> setApellido("AGUDELO"); 
                // $objDtoPersonal -> setTelefono(2080547); 
                // $objDtoPersonal -> setDireccion("CAR:25-46"); 
                // $objDtoPersonal -> setEmail("ALCAS@GMIAL.COM"); 
                // $objDtoPersonal -> setProfesion("INGENIERO  SISTEMAS"); 
                // $objDtoPersonal -> setPaisNac("MEXICANO"); 
                // $objDtoPersonal -> setNivelEduc("DOCTORADO"); 
                // $objDtoPersonal -> setFechaNac("2021/05/8"); 
                // $objDtoPersonal -> setSexo(1); 
                // $objDtoPersonal -> setGrupoSanguineo("0-"); 
                // $objDtoPersonal -> setEdoCivil("  CASADO"); 
                // $objDtoPersonal -> setCargaFamiliar("LIJERA"); 

        
                // $objDaoPersonal = new PersonalDao($objDtoPersonal);
                
                // $objDaoPersonal -> mdlInsertarpersonal();
                // $objDaoPersonal -> mdlModificarPersonal();
                // $objDaoPersonal -> mdlEliminarPersonal();
                // echo ( var_dump($objDaoPersonal -> mdlConsultarPersonal() -> fetch() ) );
                
                // foreach ($objDaoPersonal -> mdlConsultarPersonal() -> fetch() as $key => $value) {
                //         echo $key . "  =  " . $value . "<br>";
                // }
                
                // echo "<table border = '5'> 
                // <tr>
                // ";
                // foreach ($objDaoPersonal -> mdlConsultarPersonal() -> fetch() as $key => $value) {
                //         echo "
                //         <th>$key</th>
                //         ";
                // }
                // echo "</tr>";

                // foreach ($objDaoPersonal -> mdlListarPersonal() -> fetchAll() as $registro) {
                //         echo "<tr>";
                //         foreach ($registro as $campo => $value) {
                //         echo "<td>$value</td>";
                //         }
                //         echo "</tr>";
                // }
                // echo "</table>";


                // echo ( var_dump($objDaoPersonal -> mdlListarPersonal() -> fetchAll() ) );
                // foreach ($objDaoPersonal -> mdlListarPersonal() -> fetchAll() as $registro) {
                // // echo var_dump($registro). "<br><br><br>";
                // foreach ($registro as $campo => $value) {
                //         echo $campo . " = " .$value ."<br>";
                // }
                // echo "<br><br><br>";
                // }


                // echo var_dump($objDaoPersonal);
                // echo "se ha insertado";
                // echo "se ha modificado";
                // echo "se ha eliminado";

?>


