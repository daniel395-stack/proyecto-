<?php

      class Usuario{

      private $codigo;
      private $usuario;
      private $clave;
      private $fecha;

      public function getCodigo(){
        return $this->codigo;
      }
      public function getUsuario(){
        return $this->usuario;
      }
      public function getClave(){
        return $this->clave;
      }
      public function getFecha(){
        return $this->fecha;
      }


      public function setUsuario ( $usuario ){
        $this -> usuario = $usuario;
      }
      public function setClave ( $clave ){
          $this -> clave = $clave;
      }

      }


?>