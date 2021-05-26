<?php

class Empleado{

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


        Public function getCodEmpleados(){
            return $this->codEmpleados;
        }

        Public function getPrimerNombre(){
            return $this->primerNombre;
        }

        Public function getSegundoNombre(){
            return $this->segundoNombre;
        }

        Public function getPrimerApellido(){
            return $this->primerApellido;
        }

        Public function getSegundoApellido(){
            return $this->segundoApellido;
        }

        Public function getSexo(){
            return $this->sexo;
        }

        Public function getReligion(){
            return $this->religion;
        }

        Public function getEscolaridad(){
            return $this->escolaridad;
        }

        Public function getDeporte(){
            return $this->deporte;
        }

        Public function getTelefono(){
            return $this->telefono;
        }

        Public function getCelular(){
            return $this->celular;
        }

        Public function getDireccion(){
            return $this->direccion;
        }

        Public function getFechaNacimiento(){
            return $this->fechaNacimiento;
        }

        Public function getCedula(){
            return $this->cedula;
        }

        Public function getCorreo(){
            return $this->correo;
        }

            /*Setters */


        public function  setCodEmpleados($codEmpleados){
            $this->codEmpleados=$codEmpleados; 
        }


        public function  setPrimerNombre($primerNombre){
            $this->primerNombre=$primerNombre;
        }

        public function  setSegundoNombre($segundoNombre){
            $this->segundoNombre=$segundoNombre;
        }


        public function  setPrimerApellido($primerApellido){
            $this->primerApellido=$primerApellido;
        }


        public function  setSegundoApellido($segundoApellido){
            $this->segundoApellido=$segundoApellido;
        }

        public function  setSexo($sexo){
            $this->sexo=$sexo;
        }
 
        public function  setReligion($religion){
            $this->religion=$religion;
        }

        public function  setEscolaridad($escolaridad){
            $this->escolaridad=$escolaridad;
        }

        public function setDeporte($deporte){
            $this->deporte=$deporte;
        }

        public function  setTelefono($telefono){
            $this->telefono=$telefono;
        }

        public function  setCelular($celular){
            $this->celular=$celular;
        }

        public function  setDireccion($direccion){
            $this->direccion=$direccion;
        }

        public function  setFechaNacimiento($fechaNacimiento){
            $this->fechaNacimiento=$fechaNacimiento;
        }

        public function  setCedula($cedula){
            $this->cedula=$cedula;
        }

        public function  setCorreo($correo){
            $this->correo=$correo;
        }


    }

// $objEmpleado = new Empleado();

        // CAPTURAMOS LOS DATOS 

        // $objEmpleado->setCodEmpleados(null);
        // $objEmpleado->setPrimerNombre("HENRY");
        // $objEmpleado->setSegundoNombre("MANUEL");
        // $objEmpleado->setPrimerApellido("SANCHEZ");
        // $objEmpleado->setSegundoApellido("AGUDELO");
        // $objEmpleado->setSexo("1");
        // $objEmpleado->setReligion("TESTIGO");
        // $objEmpleado->setEscolaridad("NACIONAL");
        // $objEmpleado->setDeporte("GOLF");
        // $objEmpleado->setTelefono("4561237");
        // $objEmpleado->setCelular("3146958465");
        // $objEmpleado->setDireccion("CAR:200#45-36");
        // $objEmpleado->setFechaNacimiento("1885/05/23");
        // $objEmpleado->setCedula("1234567890");
        // $objEmpleado->setCorreo("MANUEL@GMAIL.CO");

        // // IMPRIMIMOS CON EL METODO GET

        // echo $objEmpleado->getCodEmpleados();
        // echo "<br>";
        // echo $objEmpleado->getPrimerNombre();
        // echo "<br>";
        // echo $objEmpleado->getSegundoNombre();
        // echo "<br>";
        // echo $objEmpleado->getPrimerApellido();
        // echo "<br>";
        // echo $objEmpleado->getSegundoApellido();
        // echo "<br>";
        // echo $objEmpleado->getSexo();
        // echo "<br>";
        // echo $objEmpleado->getReligion();
        // echo "<br>";
        // echo $objEmpleado->getEscolaridad();
        // echo "<br>";
        // echo $objEmpleado->getDeporte();
        // echo "<br>";
        // echo $objEmpleado->getTelefono();
        // echo "<br>";
        // echo $objEmpleado->getCelular();
        // echo "<br>";
        // echo $objEmpleado->getDireccion();
        // echo "<br>";
        // echo $objEmpleado->getFechaNacimiento();
        // echo "<br>";
        // echo $objEmpleado->getCedula();
        // echo "<br>";
        // echo $objEmpleado->getCorreo();
    

?>


