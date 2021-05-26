<?php

      require_once 'modelo/conexion.php';
      // require_once '../modelo/dto/orden.php';

      class OrdenDao{


        private $codigoOrden; 
        private $fecha; 
        private $numero; 
        private $proveedor; 
        private $ubicacion; 
        private $ruta; 
        private $telefono; 
        private $email; 
        private $producto; 
        private $cantidad;
        private $estampilla; 
        private $cabezote; 
        private $furgon; 
        private $llantas; 
        private $estado;


        function __construct($objDtoOrden){
          // echo "se ha ejecutado";

                  $this -> codigoOrden      = $objDtoOrden -> getCodigoOrden(); 
                  $this -> fecha            = $objDtoOrden -> getFecha(); 
                  $this -> numero           = $objDtoOrden -> getNumero(); 
                  $this -> proveedor        = $objDtoOrden -> getProveedor(); 
                  $this -> ubicacion        = $objDtoOrden -> getUbicacion(); 
                  $this -> ruta             = $objDtoOrden -> getRuta(); 
                  $this -> telefono         = $objDtoOrden -> getTelefono(); 
                  $this -> email            = $objDtoOrden -> getEmail(); 
                  $this -> producto         = $objDtoOrden -> getProducto(); 
                  $this -> cantidad         = $objDtoOrden -> getCantidad();
                  $this -> estampilla       = $objDtoOrden -> getEstampilla(); 
                  $this -> cabezote         = $objDtoOrden -> getCabezote(); 
                  $this -> furgon           = $objDtoOrden -> getFurgon(); 
                  $this -> llantas          = $objDtoOrden -> getLlantas(); 
                  $this -> estado           = $objDtoOrden -> getEstado();


        }

        function mdlInsertarorden(){

        /*===========================================
          INGRESAR LA CONSULTA, PUEDE SER SP O QUERY
        ==============================================*/

        $sql = 'call SPInsertarorden( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';

        /*==============================
          INSTANCIAR LA BASE DE DATOS 
        ============================== */
        $conexion = new Conexion();
        $stmt = $conexion->conectar() -> prepare($sql);
        
        /*======================================
        INSTANCIAR LOS VALORES QUE SE INSERTARAN
        ========================================= */


                    $stmt -> bindParam ( 1, $this -> codigoOrden,        PDO::PARAM_INT);
                    $stmt -> bindParam ( 2, $this -> fecha,              PDO::PARAM_STR);
                    $stmt -> bindParam ( 3, $this -> numero,             PDO::PARAM_INT);
                    $stmt -> bindParam ( 4, $this -> proveedor,          PDO::PARAM_STR);
                    $stmt -> bindParam ( 5, $this -> ubicacion,          PDO::PARAM_STR);

                    $stmt -> bindParam ( 6, $this -> ruta,               PDO::PARAM_INT);
                    $stmt -> bindParam ( 7, $this -> telefono ,          PDO::PARAM_INT);
                    $stmt -> bindParam ( 8, $this -> email,              PDO::PARAM_STR);
                    $stmt -> bindParam ( 9, $this -> producto,           PDO::PARAM_STR);
                    $stmt -> bindParam ( 10, $this -> cantidad,          PDO::PARAM_INT);

                    $stmt -> bindParam ( 11, $this -> estampilla,        PDO::PARAM_STR);
                    $stmt -> bindParam ( 12, $this -> cabezote,          PDO::PARAM_STR);
                    $stmt -> bindParam ( 13, $this -> furgon,            PDO::PARAM_STR);
                    $stmt -> bindParam ( 14, $this -> llantas,           PDO::PARAM_STR);
                    $stmt -> bindParam ( 15, $this -> estado,            PDO::PARAM_STR);
                
                    $stmt -> execute();
        } 

                /*==================================
                        METODO DE MODIFICACION 
                ===================================*/
                public function mdlModificarOrden(){

                /*==========================
                    INGRESAR LA CONSULTA
                ============================*/

                $sql = 'call SPModificarorden( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';

                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);
                    
                    /*===========================================
                              LOS DATOS QUE SE VAN A MODIFICAR
                    =============================================*/


                        
                    $stmt -> bindParam ( 1, $this -> codigoOrden,        PDO::PARAM_INT);
                    $stmt -> bindParam ( 2, $this -> fecha,              PDO::PARAM_STR);
                    $stmt -> bindParam ( 3, $this -> numero,             PDO::PARAM_INT);
                    $stmt -> bindParam ( 4, $this -> proveedor,          PDO::PARAM_STR);
                    $stmt -> bindParam ( 5, $this -> ubicacion,          PDO::PARAM_STR);

                    $stmt -> bindParam ( 6, $this -> ruta,               PDO::PARAM_INT);
                    $stmt -> bindParam ( 7, $this -> telefono ,          PDO::PARAM_INT);
                    $stmt -> bindParam ( 8, $this -> email,              PDO::PARAM_STR);
                    $stmt -> bindParam ( 9, $this -> producto,           PDO::PARAM_STR);
                    $stmt -> bindParam ( 10, $this -> cantidad,          PDO::PARAM_INT);

                    $stmt -> bindParam ( 11, $this -> estampilla,        PDO::PARAM_STR);
                    $stmt -> bindParam ( 12, $this -> cabezote,          PDO::PARAM_STR);
                    $stmt -> bindParam ( 13, $this -> furgon,            PDO::PARAM_STR);
                    $stmt -> bindParam ( 14, $this -> llantas,           PDO::PARAM_STR);
                    $stmt -> bindParam ( 15, $this -> estado,            PDO::PARAM_STR);
                
                    $stmt -> execute();

                }

                /*======================
                    METODO DE ELIMINAR
                ========================*/

                public function mdlEliminarOrden(){

                $sql = "call SPEliminarorden( ? )";

                /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                $stmt -> bindParam ( 1, $this -> codigoOrden,        PDO::PARAM_INT);
                $stmt -> execute();

                } //FIN DEL METODO ELIMINAR 

                /*===========================================
                            METODO CONSULTA
                =============================================*/

                public function mdlConsultarOrden(){

                $sql = "call SPConsultarorden ( ? )";

                /*====================================================
                        INSTACIAR LA BASE DE DATOS
                ====================================================*/

                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                /*====================================================
                SE INGRESA EL CODIGO QUE SE DESEA CONSULTAR
                ====================================================*/

                $stmt -> bindParam ( 1, $this -> codigoOrden,        PDO::PARAM_INT);
                $stmt -> execute();
                
                $resultSet = $stmt;
                return $resultSet;

                } // FIN METODO CONSULTA

                /*====================
                    METODO LISTAR
                =======================*/

                public function mdlListarOrden(){
                
                /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
                ===================================================*/  

                $sql = "call SPListarorden (  );";

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

          // $objDtoOrden = new Orden();

          //   $objDtoOrden -> setCodigoOrden(null); 
          //   $objDtoOrden -> setFecha("2022/04/12"); 
          //   $objDtoOrden -> setNumero(3148596235); 
          //   $objDtoOrden -> setProveedor("PASIVO"); 
          //   $objDtoOrden -> setUbicacion("COMUNA13"); 
          //   $objDtoOrden -> setRuta(123); 
          //   $objDtoOrden -> setTelefono(2751907); 
          //   $objDtoOrden -> setEmail("ORDEN@HOTMAIL.COM"); 
          //   $objDtoOrden -> setProducto("CABLES"); 
          //   $objDtoOrden -> setCantidad(50);
          //   $objDtoOrden -> setEstampilla("LOCAL"); 
          //   $objDtoOrden -> setCabezote("AMERICANO"); 
          //   $objDtoOrden -> setFurgon("MAZDA"); 
          //   $objDtoOrden -> setLlantas("PIRELLI"); 
          //   $objDtoOrden -> setEstado("SOLDADITO");

          // $objDaoOrden = new OrdenDao($objDtoOrden);
          
          // $objDaoOrden -> mdlInsertarorden();
          // $objDaoOrden -> mdlModificarOrden();
          // $objDaoOrden -> mdlEliminarOrden();
          // echo ( var_dump($objDaoOrden -> mdlConsultarOrden() -> fetch() ) );    
          // foreach ($objDaoOrden -> mdlConsultarOrden() -> fetch() as $key => $value) {
          //         echo $key . "  =  " . $value . "<br>";   }

          // echo "<table border = '5'> 
          // <tr>
          // ";
          // foreach ($objDaoOrden -> mdlConsultarOrden() -> fetch() as $key => $value) {
          //         echo "
          //             <th>$key</th>
          //         ";
          //     }
          // echo "</tr>";

          // foreach ($objDaoOrden -> mdlListarOrden() -> fetchAll() as $registro) {
          //         echo "<tr>";
          //         foreach ($registro as $campo => $value) {
          //         echo "<td>$value</td>";
          //         }
          //         echo "</tr>";
          // }
          // echo "</table>";

          // echo ( var_dump($objDaoOrden -> mdlListarOrden() -> fetchAll() ) );
    //       foreach ($objDaoOrden -> mdlListarOrden() -> fetchAll() as $registro) {
    //         // echo var_dump($registro). "<br><br><br>";
    //         foreach ($registro as $campo => $value) {
    //             echo $campo . " = " .$value ."<br>";
    //         }
    //         echo "<br><br><br>";
    // }

          // echo var_dump($objDaoOrden); 
          // echo "se ha insertado";
          // echo "se ha modificado";
          // echo "se ha eliminado";
          
?>












