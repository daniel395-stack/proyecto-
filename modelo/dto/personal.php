<?php


class Personal {


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


        public function setCodigoPersonal($codigoPersonal){
            $this -> codigoPersonal = $codigoPersonal;
        } 
        public function setCedula($cedula){
            $this-> cedula = $cedula;
        }
        public function setNombre($nombre){
            $this-> nombre = $nombre;
        } 
        public function setApellido($apellido){
            $this-> apellido = $apellido;
        } 
        public function setTelefono($telefono){
            $this-> telefono = $telefono;
        } 
        public function setDireccion($direccion){
            $this-> direccion = $direccion;
        } 
        public function setEmail($email){
            $this-> email = $email;
        }
        public function setProfesion($profesion){
            $this-> profesion = $profesion;
        } 
        public function setPaisNac($paisNac){
            $this-> paisNac = $paisNac;
        } 
        public function setNivelEduc($nivelEduc){
            $this-> nivelEduc = $nivelEduc;
        } 
        public function setFechaNac($fechaNac){
            $this-> fechaNac = $fechaNac;
        } 
        public function setSexo($sexo){
            $this-> sexo = $sexo;
        } 
        public function setGrupoSanguineo($grupoSanguineo){
            $this-> grupoSanguineo = $grupoSanguineo;
        } 
        public function setEdoCivil($edoCivil){
            $this-> edoCivil = $edoCivil;
        } 
        public function setCargaFamiliar($cargaFamiliar){
            $this-> cargaFamiliar = $cargaFamiliar;
        } 



        public function getCodigoPersonal(){
            return $this->codigoPersonal;
        } 
        public function getCedula(){
            return $this->cedula;
        }
        public function getNombre(){
            return $this->nombre;
        } 
        public function getApellido(){
            return $this->apellido;
        } 
        public function getTelefono(){
            return $this->telefono;
        } 
        public function getDireccion(){
            return $this->direccion;
        } 
        public function getEmail(){
            return $this->email;
        } 
        public function getProfesion(){
            return $this->profesion;
        } 
        public function getPaisNac(){
            return $this->paisNac;
        } 
        public function getNivelEduc(){
            return $this->nivelEduc;
        } 
        public function getFechaNac(){
            return $this->fechaNac;
        } 
        public function getSexo(){
            return $this->sexo;
        } 
        public function getGrupoSanguineo(){
            return $this->grupoSanguineo;
        } 
        public function getEdoCivil(){
            return $this->edoCivil;
        } 
        public function getCargaFamiliar(){
            return $this->cargaFamiliar;
        } 



}

                // $objPersonal = new Personal();


                // // CAPTURAMOS LOS DATOS 

                // $objPersonal -> setCodigoPersonal(2); 
                // $objPersonal -> setCedula(1234568920);
                // $objPersonal -> setNombre("ALVARO"); 
                // $objPersonal -> setApellido("CASTAÑO"); 
                // $objPersonal -> setTelefono(1234567); 
                // $objPersonal -> setDireccion("CAR:25-46"); 
                // $objPersonal -> setEmail("ALCAS@GMIAL.COM"); 
                // $objPersonal -> setProfesion("INGENIERO DE SISTEMAS"); 
                // $objPersonal -> setPaisNac("ALEMAN"); 
                // $objPersonal -> setNivelEduc("PROFESIONAL"); 
                // $objPersonal -> setFechaNac("1999/03/28"); 
                // $objPersonal -> setSexo(0); 
                // $objPersonal -> setGrupoSanguineo("0+"); 
                // $objPersonal -> setEdoCivil(" FELIZMENTE CASADO"); 
                // $objPersonal -> setCargaFamiliar("PESADO"); 

                // echo $objPersonal -> getCodigoPersonal();
                // echo "<br>"; 
                // echo $objPersonal -> getCedula();
                // echo "<br>";
                // echo $objPersonal -> getNombre(); 
                // echo "<br>";
                // echo $objPersonal -> getApellido(); 
                // echo "<br>";
                // echo $objPersonal -> getTelefono(); 
                // echo "<br>";
                // echo $objPersonal -> getDireccion(); 
                // echo '<br>';
                // echo $objPersonal -> getEmail(); 
                // echo '<br>';
                // echo $objPersonal -> getProfesion(); 
                // echo '<br>';
                // echo $objPersonal -> getPaisNac(); 
                // echo '<br>';
                // echo $objPersonal -> getNivelEduc();
                // echo '<br>'; 
                // echo $objPersonal -> getFechaNac();
                // echo '<br>'; 
                // echo $objPersonal -> getSexo();
                // echo '<br>'; 
                // echo $objPersonal -> getGrupoSanguineo();
                // echo '<br>'; 
                // echo $objPersonal -> getEdoCivil(); 
                // echo '<br>';
                // echo $objPersonal -> getCargaFamiliar(); 
                // echo "<br>";
?>
