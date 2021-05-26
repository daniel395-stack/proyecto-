<?php

    class ControladorUsuario{

        public function ctrConsultaUsuario(){

            if (isset($_POST['txtUsuario'])){
                // echo '<script>alert("ingreso")</script>';
                $usuario = $_POST['txtUsuario'];
                $clave = $_POST['txtClave'];

                $objUsuario = new Usuario();
                $objUsuario -> setUsuario($usuario);
                $objUsuario -> setClave($clave);

                $objModeloUsuario = new UsuarioDao ( $objUsuario );

                $arrayUsuario = $objModeloUsuario -> mdlConsultarLogin() -> fetch();

                if ( is_bool($arrayUsuario) ){
                
                    // echo '<script>alert("Incorrecta contraseña")</script>';
                    echo "<script>

                        Swal.fire({
                            icon: 'error',
                            title: 'Error...',
                            text: 'Contraseña equivocada!'                            
                        })

                    </script>";
                }else{
                
                if ( $arrayUsuario['ZZZ'] != "" && $arrayUsuario['YYY'] != ""){

                // if ( $usuario == 'adsi' && $clave == 395){
                $_SESSION['inicioSesion'] = 'ok';
                //   echo '<script>alert("contraseña correcta")</script>';
                // echo '  <script> 
                //                 window.locate = "inicio.php";
                //         </script>
                
                // ';
                header('location:index.php');
                } //if

            }//else

        }//if

    }//metodo

}//clase

?>
