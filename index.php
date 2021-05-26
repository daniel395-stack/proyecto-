<?php
    /*===========================
      CARGAR TODOS LOS DTO O BEAN
    =============================*/
    include_once 'modelo/dto/empleado.php';
    include_once 'modelo/dto/orden.php';
    include_once 'modelo/dto/personal.php';
    include_once 'modelo/dto/usuario.php';

    /*=================================
          CARGAR TODOS LOS MODELOS 
    ==================================*/
    include_once 'modelo/dao/empleadodao.php';
    include_once 'modelo/dao/ordendao.php';
    include_once 'modelo/dao/personaldao.php';
    include_once 'modelo/dao/usuariodao.php';

    /*============================
    CARGAR TODOS LOS CONTROLADORES 
    ==============================*/
    include_once 'controlador/empleado.controlador.php';
    include_once 'controlador/orden.controlador.php';
    include_once 'controlador/personal.controlador.php';
    include_once 'controlador/plantilla.controlador.php';
    include_once 'controlador/usuario.controlador.php';
    /*============================
    CREAMOS UN OBJETO DE ARRANQUE
    ===============================*/
    $objPlantilla = new PlantillaControlador();
    $objPlantilla -> ctrArranque();
    
?>