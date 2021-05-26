<?php

    // require_once '../conexion.php';
    // require_once '../dto/empleado.php';

    require_once 'modelo/conexion.php';
    // require_once '../modelo/dto/empleado.php';

    class EmpleadoDao{
    

        private $codEmpleados;
        private $primerNombre;
        private $segundoNombre;
        private $primerApellido;
        private $segundoApellido;
        private $sexo;
        private $religion;
        private $escolaridad;
        private $deporte;
        private $telefono;
        private $celular;
        private $direccion;
        private $fechaNacimiento;
        private $cedula;
        private $correo;  


        function __construct($objDtoEmpleado){
            // echo "se ha ejecutado";

                    $this -> codEmpleados       =     $objDtoEmpleado -> getCodEmpleados();
                    $this -> primerNombre       =     $objDtoEmpleado -> getPrimerNombre();
                    $this -> segundoNombre      =     $objDtoEmpleado -> getSegundoNombre();
                    $this -> primerApellido     =     $objDtoEmpleado -> getPrimerApellido ();
                    $this -> segundoApellido    =     $objDtoEmpleado -> getSegundoApellido();
                    $this -> sexo               =     $objDtoEmpleado -> getSexo();
                    $this -> religion           =     $objDtoEmpleado -> getReligion();
                    $this -> escolaridad        =     $objDtoEmpleado -> getEscolaridad();
                    $this -> deporte            =     $objDtoEmpleado -> getDeporte();
                    $this -> telefono           =     $objDtoEmpleado -> getTelefono();
                    $this -> celular            =     $objDtoEmpleado -> getCelular();
                    $this -> direccion          =     $objDtoEmpleado -> getDireccion();
                    $this -> fechaNacimiento    =     $objDtoEmpleado -> getFechaNacimiento();
                    $this -> cedula             =     $objDtoEmpleado -> getCedula();
                    $this -> correo             =     $objDtoEmpleado -> getCorreo();  

        }


                function mdlInsertarempleado(){

                    $sql = 'call SPInsertarempleado( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';

                    $conexion = new Conexion();
                    $stmt = $conexion->conectar() -> prepare($sql);

                    $stmt -> bindParam ( 1, $this -> codEmpleados,      PDO::PARAM_INT);
                    $stmt -> bindParam ( 2, $this -> primerNombre,      PDO::PARAM_STR);
                    $stmt -> bindParam ( 3, $this -> segundoNombre,     PDO::PARAM_STR);
                    $stmt -> bindParam ( 4, $this -> primerApellido,    PDO::PARAM_STR);
                    $stmt -> bindParam ( 5, $this -> segundoApellido,   PDO::PARAM_STR);

                    $stmt -> bindParam ( 6, $this -> sexo,              PDO::PARAM_BOOL);
                    $stmt -> bindParam ( 7, $this -> religion,          PDO::PARAM_STR);
                    $stmt -> bindParam ( 8, $this -> escolaridad,       PDO::PARAM_STR);
                    $stmt -> bindParam ( 9, $this -> deporte,           PDO::PARAM_STR);
                    $stmt -> bindParam ( 10, $this -> telefono,         PDO::PARAM_INT);

                    $stmt -> bindParam ( 11, $this -> celular,          PDO::PARAM_INT);
                    $stmt -> bindParam ( 12, $this -> direccion,        PDO::PARAM_STR);
                    $stmt -> bindParam ( 13, $this -> fechaNacimiento,  PDO::PARAM_STR);
                    $stmt -> bindParam ( 14, $this -> cedula,           PDO::PARAM_INT);
                    $stmt -> bindParam ( 15, $this -> correo,           PDO::PARAM_STR);
                
                    $stmt -> execute();
                
                } //FIN DEL METODO INSERTAR 
                /*==================================
                        METODO DE MODIFICACION 
                ===================================*/
                public function mdlModificarEmpleado(){
                
                /*==========================
                    INGRESAR LA CONSULTA
                ============================*/
                $sql = 'call SPModificarempleado( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';

                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);
                    
                    /*============================================
                            LOS DATOS QUE SE VAN A MODIFICAR
                    ==============================================*/

                    $stmt -> bindParam ( 1, $this -> codEmpleados,      PDO::PARAM_INT);
                    $stmt -> bindParam ( 2, $this -> primerNombre,      PDO::PARAM_STR);
                    $stmt -> bindParam ( 3, $this -> segundoNombre,     PDO::PARAM_STR);
                    $stmt -> bindParam ( 4, $this -> primerApellido,    PDO::PARAM_STR);
                    $stmt -> bindParam ( 5, $this -> segundoApellido,   PDO::PARAM_STR);

                    $stmt -> bindParam ( 6, $this -> sexo,              PDO::PARAM_BOOL);
                    $stmt -> bindParam ( 7, $this -> religion,          PDO::PARAM_STR);
                    $stmt -> bindParam ( 8, $this -> escolaridad,       PDO::PARAM_STR);
                    $stmt -> bindParam ( 9, $this -> deporte,           PDO::PARAM_STR);
                    $stmt -> bindParam ( 10, $this -> telefono,         PDO::PARAM_INT);

                    $stmt -> bindParam ( 11, $this -> celular,          PDO::PARAM_INT);
                    $stmt -> bindParam ( 12, $this -> direccion,        PDO::PARAM_STR);
                    $stmt -> bindParam ( 13, $this -> fechaNacimiento,  PDO::PARAM_STR);
                    $stmt -> bindParam ( 14, $this -> cedula,           PDO::PARAM_INT);
                    $stmt -> bindParam ( 15, $this -> correo,           PDO::PARAM_STR);

                    $stmt -> execute();

                }

                /*======================
                    METODO DE ELIMINAR
                ========================*/

                public function mdlEliminarEmpleado(){

                $sql = "call SPEliminarempleado( ? )";
                /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                /*====================================================
                    SE INGRESA EL CODIGO QUE SE DESEA ELIMINAR
                ====================================================*/

                $stmt -> bindParam ( 1, $this -> codEmpleados,      PDO::PARAM_INT);
                $stmt -> execute();

                } //FIN DEL METODO ELIMINAR 

                /*===========================================
                            METODO CONSULTA
                =============================================*/

                public function mdlConsultarEmpleado(){

                /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
                ====================================================*/  

                $sql = "call SPConsultarempleado ( ? )";

                /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);
                
                /*====================================================
                    SE INGRESA EL CODIGO QUE SE DESEA CONSULTAR
                ====================================================*/

                $stmt -> bindParam ( 1, $this -> codEmpleados,      PDO::PARAM_INT);

                $stmt -> execute();
                
                $resultSet = $stmt;
                return $resultSet;

            } //FIN METODO CONSULTAR

            /*====================
                METODO LISTAR
            =======================*/

            public function mdlListarEmpleado(){

            /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/  

            $sql = "call SPListarempleado (  );";

            /*====================================================
                        INSTACIAR LA BASE DE DATOS
            ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar() -> prepare($sql);

            $stmt -> execute();

            $resultSet = $stmt;
            return $resultSet;
            
            } //FIN DEL METODO LISTAR

    }
    // $objDtoEmpleado = new Empleado();
    
    //     $objDtoEmpleado->setCodEmpleados(null);
    //     $objDtoEmpleado->setPrimerNombre("CARMELO");
    //     $objDtoEmpleado->setSegundoNombre("GENARO");
    //     $objDtoEmpleado->setPrimerApellido("URIBE");
    //     $objDtoEmpleado->setSegundoApellido("RODRIGUEZ");
    //     $objDtoEmpleado->setSexo("1");
    //     $objDtoEmpleado->setReligion("TESTIGO");
    //     $objDtoEmpleado->setEscolaridad("NACIONAL");
    //     $objDtoEmpleado->setDeporte("TENNIS");
    //     $objDtoEmpleado->setTelefono("4561237");
    //     $objDtoEmpleado->setCelular("3146958465");
    //     $objDtoEmpleado->setDireccion("CAR:200#45-36");
    //     $objDtoEmpleado->setFechaNacimiento("1885/05/23");
    //     $objDtoEmpleado->setCedula("1234567890");
    //     $objDtoEmpleado->setCorreo("MANUEL@GMAIL.CO");
    
    // $objDaoEmpleado = new EmpleadoDao($objDtoEmpleado);
    // echo var_dump($objDaoEmpleado);
    // $objDaoEmpleado -> mdlInsertarempleado();
    // $objDaoEmpleado -> mdlModificarEmpleado();
    // $objDaoEmpleado -> mdlEliminarEmpleado();
    // echo ( var_dump($objDaoEmpleado -> mdlConsultarEmpleado() -> fetch() ) );
    // foreach ($objDaoEmpleado -> mdlConsultarEmpleado() -> fetch() as $key => $value) {
    //         echo $key . "   =  : " . $value . "<br>";
    // }


// echo "<table border = '5'> 
// <tr>
// ";
// foreach ($objDaoEmpleado -> mdlConsultarEmpleado() -> fetch() as $key => $value) {
//         echo "
//             <th>$key</th>
//         ";
//     }
// echo "</tr>";

// foreach ($objDaoEmpleado -> mdlListarEmpleado() -> fetchAll() as $registro) {
//         echo "<tr>";
//         foreach ($registro as $campo => $value) {
//         echo "<td>$value</td>";
//         }
//         echo "</tr>";
// }
// echo "</table>";



    // echo ( var_dump($objDaoEmpleado -> mdlListarEmpleado() -> fetchAll() ) );
    // foreach ($objDaoEmpleado -> mdlListarEmpleado() -> fetchAll() as $registro) {
    //         // echo var_dump($registro). "<br><br><br>";
    //         foreach ($registro as $campo => $value) {
    //             echo $campo . " = " .$value ."<br>";
    //         }
    //         echo "<br><br><br>";
    // }

    // echo "se ha insertado";
    // echo "se ha modificado";
    // echo "se ha eliminado";

?>





