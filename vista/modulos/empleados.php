  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MODULO EMPLEADOS

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class=" fa  fa-user-plus"></i> empleados</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#modalIngresar"> Ingresar Empleados
          </button>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="tablaEmpleado" class="table table-dark table-striped">
            <thead>
              <tr>
                <th>codEmpleados</th>
                <th>primer_Nombre</th>
                <th>segundo_Nombre</th>
                <th>primer_Apellido</th>
                <th>segundo_Apellido</th>
                <th>sexo</th>
                <th>religion</th>
                <th>escolaridad</th>
                <th>deporte</th>
                <th>telefono</th>
                <th>celular</th>
                <th>direccion</th>
                <th>fecha_Nacimiento</th>
                <th>cedula</th>
                <th>correo</th>
                <th>acciones</th>

              </tr>
            </thead>
            <tbody>

              <?php

              $objEmpleado = new ControladorEmpleado();
              $arrayEmpleado = $objEmpleado->ctrListarEmpleado();
              foreach ($arrayEmpleado as $campo) {
                      $cod = $campo['cod_Empleados'];
              ?>
                <tr>
                  <td id="<?php echo 'cod'.$cod;?>"><?php echo $cod;  ?></td>
                  <td id="<?php echo 'pri'.$cod;?>"><?php echo $campo['primer_Nombre'];  ?></td>
                  <td id="<?php echo 'seg'.$cod;?>"><?php echo $campo['segundo_Nombre'];  ?></td>
                  <td id="<?php echo 'prim'.$cod;?>"><?php echo $campo['primer_Apellido'];  ?></td>
                  <td id="<?php echo 'segu'.$cod;?>"><?php echo $campo['segundo_Apellido'];  ?></td>
                  <td id="<?php echo 'sex'.$cod;?>"><?php echo $campo['sexo'];  ?></td>
                  <td id="<?php echo 'rel'.$cod;?>"><?php echo $campo['religion'];  ?></td>
                  <td id="<?php echo 'esc'.$cod;?>"><?php echo $campo['escolaridad'];  ?></td>
                  <td id="<?php echo 'dep'.$cod;?>"><?php echo $campo['deporte'];  ?></td>
                  <td id="<?php echo 'tel'.$cod;?>"><?php echo $campo['telefono'];  ?></td>
                  <td id="<?php echo 'cel'.$cod;?>"><?php echo $campo['celular'];  ?></td>
                  <td id="<?php echo 'dir'.$cod;?>"><?php echo $campo['direccion'];  ?></td>
                  <td id="<?php echo 'fec'.$cod;?>"><?php echo $campo['fecha_Nacimiento'];  ?></td>
                  <td id="<?php echo 'ced'.$cod;?>"><?php echo $campo['cedula'];  ?></td>
                  <td id="<?php echo 'cor'.$cod;?>"><?php echo $campo['correo'];  ?></td>
                  <td>
                    <button type='button' class='btn btn-success' data-toggle='modal'><i class='fa fa-file'></i></button>
                    <button type='button' class='btn btn-warning' data-toggle='modal' data-target="#modalModificar" onclick='modificarEmpleado(<?php echo "cod".$cod ?>,<?php echo "pri".$cod ?>,<?php echo "seg".$cod ?>,<?php echo "prim".$cod ?>,<?php echo "segu".$cod ?>,<?php echo "sex".$cod ?>,<?php echo "rel".$cod ?>,<?php echo "esc".$cod ?>,<?php echo "dep".$cod ?>,<?php echo "tel".$cod ?>,<?php echo "cel".$cod ?>,<?php echo "dir".$cod ?>,<?php echo "fec".$cod ?>,<?php echo "ced".$cod ?>,<?php echo "cor".$cod ?>)'><i class='fa fa-edit'></i></button>
                    <button type='button' class='btn btn-danger' data-toggle='modal'><i class='fa fa-trash'></i></button>
                  </td>
                </tr>
              <?php
              }
              ?>

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

  <!-- The Modal Ingresar-->
  <div class="modal fade" id="modalIngresar" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <form method="post">
        <div class="modal-header" style='background-color:#3c8dbc; color:white;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ingresar Empleados</h4>
        </div>
        <div class="modal-body">
          <!-- ==============================================
        CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION 
      ================================================-->

          
          <!-- Modal codEmpleados -->          
          <!-- <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtCodEmpleados" placeholder="Ingrese su codigo">
            </div>
          </div> -->

          <!-- Modal primerNombre -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtPrimerNombre" placeholder="Ingrese su Primer Nombre">
            </div>
          </div>

          <!-- Modal segundoNombre -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtSegundoNombre" placeholder="Ingrese su segundo Nombre">
            </div>
          </div>

          <!-- Modal primerApellido -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtPrimerApellido" placeholder="Ingrese su primer Apellido">
            </div>
          </div>

          <!-- Modal segundoApellido -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtSegundoApellido" placeholder="Ingrese su segundo Apellido">
            </div>
          </div>

          <!-- Modal sexo -->
          <!--sexo-->
          <div class="input-group" style="margin: 10px;">
            <label for="cboSexo" class="input-group-addon">Sexo</label>
            <select class="form-control" name="cboSexo" id="cboSexo">
              <option value="0">Hombre</option>
              <option value="1">Mujer</option>
            </select>
          </div>

          <!-- Modal religion -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtReligion" placeholder="Ingrese su religion">
            </div>
          </div>

          <!-- Modal escolaridad -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtEscolaridad" placeholder="Ingrese su escolaridad">
            </div>
          </div>

          <!-- Modal deporte -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtDeporte" placeholder="Ingrese su deporte">
            </div>
          </div>

          <!-- Modal telefono -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtTelefono" placeholder="Ingrese su telefono">
            </div>
          </div>

          <!-- Modal celular -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCelular" placeholder="Ingrese su celular">
            </div>
          </div>

          <!-- Modal direccion -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtDireccion" placeholder="Ingrese su direccion">
            </div>
          </div>

          <!-- Modal fechaNacimiento -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="date" class="form-control input-lg" name="txtFechaNacimiento" placeholder="Ingrese su fecha de Nacimiento">
            </div>
          </div>

          <!-- Modal cedula -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCedula" placeholder="Ingrese su cedula">
            </div>
          </div>

          <!-- Modal correo -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtCorreo" placeholder="Ingrese su correo">
            </div>
          </div>                

        <?php 
        if(isset($_POST['txtPrimerNombre'])){
                $objEmpleado = new ControladorEmpleado();
                if ( $objEmpleado->ctrInsertarEmpleado() ){
                  echo '<script>
                  Swal.fire("El registro ha sido guardado");
                  </script>';
                }
              }        
        ?>
        </div> <!-- Fin del  Modal body-->        
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
  <!--  Modal Modificar-->
<div class="modal fade" id="modalModificar" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <form method="post">
        <div class="modal-header" style='background-color:#3c8dbc; color:white;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar Empleados</h4>
        </div>
        <div class="modal-body">
          <!-- ==============================================
        CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION 
      ================================================-->

          
          <!-- Modal codEmpleados -->          
          <!-- <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtCodEmpleados" placeholder="Ingrese su codigo">
            </div>
          </div> -->

          <!-- Modal primerNombre -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModPrimerNombre" type="text" class="form-control input-lg" name="txtPrimerNombre" placeholder="Ingrese su Primer Nombre">
            </div>
          </div>

          <!-- Modal segundoNombre -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModSegundoNombre" type="text" class="form-control input-lg" name="txtSegundoNombre" placeholder="Ingrese su segundo Nombre">
            </div>
          </div>

          <!-- Modal primerApellido -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModPrimerApellido" type="text" class="form-control input-lg" name="txtPrimerApellido" placeholder="Ingrese su primer Apellido">
            </div>
          </div>

          <!-- Modal segundoApellido -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModSegundoApellido" type="text" class="form-control input-lg" name="txtSegundoApellido" placeholder="Ingrese su segundo Apellido">
            </div>
          </div>

          <!-- Modal sexo -->
          <!--sexo-->
          <div class="input-group" style="margin: 10px;">
            <label for="cboSexo" class="input-group-addon">Sexo</label>
            <select class="form-control" name="cboSexo" id="cboSexo">
              <option value="0">Hombre</option>
              <option value="1">Mujer</option>
            </select>
          </div>

          <!-- Modal religion -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModReligion" type="text" class="form-control input-lg" name="txtReligion" placeholder="Ingrese su religion">
            </div>
          </div>

          <!-- Modal escolaridad -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModEscolaridad" type="text" class="form-control input-lg" name="txtEscolaridad" placeholder="Ingrese su escolaridad">
            </div>
          </div>

          <!-- Modal deporte -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModDeporte" type="text" class="form-control input-lg" name="txtDeporte" placeholder="Ingrese su deporte">
            </div>
          </div>

          <!-- Modal telefono -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModTelefono" type="number" class="form-control input-lg" name="txtTelefono" placeholder="Ingrese su telefono">
            </div>
          </div>

          <!-- Modal celular -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModCelular" type="number" class="form-control input-lg" name="txtCelular" placeholder="Ingrese su celular">
            </div>
          </div>

          <!-- Modal direccion -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModDireccion" type="text" class="form-control input-lg" name="txtDireccion" placeholder="Ingrese su direccion">
            </div>
          </div>

          <!-- Modal fechaNacimiento -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModFechaNacimiento" type="date" class="form-control input-lg" name="txtFechaNacimiento" placeholder="Ingrese su fecha de Nacimiento">
            </div>
          </div>

          <!-- Modal cedula -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModCedula" type="number" class="form-control input-lg" name="txtCedula" placeholder="Ingrese su cedula">
            </div>
          </div>

          <!-- Modal correo -->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input id = "txtModCorreo" type="text" class="form-control input-lg" name="txtCorreo" placeholder="Ingrese su correo">
            </div>
          </div>                

        <?php 
        if(isset($_POST['txtPrimerNombre'])){
                $objEmpleado = new ControladorEmpleado();
                if ( $objEmpleado->ctrInsertarEmpleado() ){
                  echo '<script>
                  Swal.fire("El registro ha sido guardado");
                  </script>';
                }
              }        
        ?>
        </div> <!-- Fin del  Modal body-->        
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
  