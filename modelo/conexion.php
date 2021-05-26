<?php

/*==============================
  CONEXION ALA BASE DE DATOS
============================== */

    class Conexion{

    private $driver;
    private $host;
    private $user; 
    private $pass;
    private $database;
    private $charset;

/*  METODO CONSTRUCTOR -- INICIA UNA CLASE -- METODO DE ARRANQUE */

    function __construct(){

        // $archivo  = '../../util/config.ini';

        $archivo  = 'util/config.ini';

        $vector   = parse_ini_file($archivo);

        $this -> driver     =   $vector['driver'];
        $this -> host       =   $vector['host'];
        $this -> user       =   $vector['user'];
        $this -> pass       =   $vector['pass'];
        $this -> database   =   $vector['database'];
        $this -> charset    =   $vector['charset'];
         // echo var_dump($vector);
        // echo "estamos conectados"; 
    }

    public function conectar(){

    /*================================  
      CONSTRUIR LA CADENA  DE CONEXION 
    ==================================*/

    $cadena = $this -> driver.':host='.$this->host.';dbname='.$this -> database;
    
    /*=================================
      INSTANCIAR LA CLASE PDO
    =================================*/
    
    $Conexion = new PDO($cadena, $this-> user,$this->pass);
    
    $Conexion -> setAttribute (PDO::ATTR_ERRMODE,             PDO::ERRMODE_EXCEPTION );
    $Conexion -> setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE,  PDO::FETCH_ASSOC);
    
    /*=======================================
    ESTABLECER LA CODIFICACION CON Ñ Y TILDES
    =========================================*/
    $Conexion -> exec ('SET CHARACTER SET '.$this -> charset);

    // echo $cadena;
    // echo var_dump($Conexion);

    return $Conexion;
    
    }



  }

      $objConexion = new Conexion();
      // $objConexion -> conectar();
      echo "<br>";
      // echo var_dump($objConexion->conectar() );
?>
