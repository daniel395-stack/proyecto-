<?php

class Orden {

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


        public function setCodigoOrden($codigoOrden){
          $this-> codigoOrden = $codigoOrden;
        } 
        public function setFecha($fecha){
          $this-> fecha = $fecha;
        } 
        public function setNumero($numero){
          $this-> numero = $numero;
        } 
        public function setProveedor($proveedor){
          $this-> proveedor = $proveedor;
        } 
        public function setUbicacion($ubicacion){
          $this-> ubicacion = $ubicacion;
        } 
        public function setRuta($ruta){
          $this-> ruta = $ruta;
        } 
        public function setTelefono($telefono){
          $this-> telefono = $telefono;
        } 
        public function setEmail($email){
          $this-> email = $email;
        } 
        public function setProducto($producto){
          $this-> producto = $producto;
        } 
        public function setCantidad($cantidad){
          $this-> cantidad = $cantidad;
        }
        public function setEstampilla($estampilla){
          $this-> estampilla = $estampilla;
        } 
        public function setCabezote($cabezote){
          $this-> cabezote = $cabezote;
        } 
        public function setFurgon($furgon){
          $this-> furgon = $furgon;
        } 
        public function setLlantas($llantas){
          $this-> llantas = $llantas;
        } 
        public function setEstado($estado){
          $this-> estado = $estado;
        }


          public function getCodigoOrden(){
            return $this-> codigoOrden; 
          } 
          public function getFecha(){
            return $this-> fecha;
          } 
          public function getNumero(){
            return $this-> numero;
          } 
          public function getProveedor(){
            return $this-> proveedor;
          } 
          public function getUbicacion(){
            return $this-> ubicacion;
          } 
          public function getRuta(){
            return $this-> ruta;
          } 
          public function getTelefono(){
            return $this-> telefono;
          } 
          public function getEmail(){
            return $this-> email;
          } 
          public function getProducto(){
            return $this-> producto;
          } 
          public function getCantidad(){
            return $this-> cantidad;
          }
          public function getEstampilla(){
            return $this-> estampilla;
          } 
          public function getCabezote(){
            return $this-> cabezote;
          } 
          public function getFurgon(){
            return $this-> furgon;
          } 
          public function getLlantas(){
            return $this-> llantas;
          } 
          public function getEstado(){
            return $this-> estado;
          } 
        
}

      //       $objOrden = new Orden();

      // // $objOrden -> setCabezote("exitosos2021");
      // // echo $objOrden ->getCabezote();

      //       $objOrden -> setCodigoOrden(3); 
      //       $objOrden -> setFecha("2021/03/15"); 
      //       $objOrden -> setNumero(3148596235); 
      //       $objOrden -> setProveedor("ACTIVO"); 
      //       $objOrden -> setUbicacion("POBLADO"); 
      //       $objOrden -> setRuta(123); 
      //       $objOrden -> setTelefono(4569874); 
      //       $objOrden -> setEmail("CR7@GMAIL.COM"); 
      //       $objOrden -> setProducto("VINILOS"); 
      //       $objOrden -> setCantidad(15);
      //       $objOrden -> setEstampilla("LOCAL"); 
      //       $objOrden -> setCabezote("AMERICANO"); 
      //       $objOrden -> setFurgon("TOYOTA"); 
      //       $objOrden -> setLlantas("PIRELLI"); 
      //       $objOrden -> setEstado("SOLDADITO");


      //     echo $objOrden -> getCodigoOrden();
      //     echo "<br>"; 
      //     echo $objOrden -> getFecha();
      //     echo "<br>";  
      //     echo $objOrden -> getNumero();
      //     echo "<br>";  
      //     echo $objOrden -> getProveedor(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getUbicacion(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getRuta(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getTelefono(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getEmail(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getProducto(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getCantidad();
      //     echo "<br>"; 
      //     echo $objOrden -> getEstampilla(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getCabezote(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getFurgon(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getLlantas(); 
      //     echo "<br>"; 
      //     echo $objOrden -> getEstado();
      //     echo "<br>";

          
?>






