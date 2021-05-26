  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MODULO PERSONAL

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class=" fa  fa-user-plus"></i> Personal</a></li>

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
                <th>CodigoPersonal</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Profesion</th>
                <th>PaisNac</th>
                <th>NivelEduc</th>
                <th>FechaNac</th>
                <th>Sexo</th>
                <th>GrupoSanguineo</th>
                <th>EdoCivil</th>
                <th>CargaFamiliar</th>
                <th>acciones</th>

              </tr>
            </thead>
            <tbody>

              <?php

              $objPersonal = new ControladorPersonal();
              $arrayPersonal = $objPersonal->ctrListarPersonal();
              foreach ($arrayPersonal as $campo) {
              ?>
                <tr>
                  <td><?php echo $campo['Codigo_Personal'];  ?></td>
                  <td><?php echo $campo['Cedula'];  ?></td>
                  <td><?php echo $campo['Nombre'];  ?></td>
                  <td><?php echo $campo['Apellido'];  ?></td>
                  <td><?php echo $campo['Telefono'];  ?></td>
                  <td><?php echo $campo['Direccion'];  ?></td>
                  <td><?php echo $campo['Email'];  ?></td>
                  <td><?php echo $campo['Profesion'];  ?></td>
                  <td><?php echo $campo['Pais_Nac'];  ?></td>
                  <td><?php echo $campo['Nivel_Educ'];  ?></td>
                  <td><?php echo $campo['Fecha_Nac'];  ?></td>
                  <td><?php echo $campo['Sexo'];  ?></td>
                  <td><?php echo $campo['Grupo_Sanguineo'];  ?></td>
                  <td><?php echo $campo['Edo_Civil'];  ?></td>
                  <td><?php echo $campo['Carga_Familiar'];  ?></td>
                  <td>
                    <button type='button' class='btn btn-success' data-toggle='modal'><i class='fa fa-file'></i></button>
                    <button type='button' class='btn btn-warning' data-toggle='modal' data-target="#modalModificar"><i class='fa fa-edit'></i></button>
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
          <h4 class="modal-title">Ingresar Personal</h4>
        </div>
        <div class="modal-body">
          <!-- ==============================================
        CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION 
      ================================================-->

          
          <!-- Modal Codigo_Personal  -->          
          <!-- <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCodigoPersonal " placeholder="Ingrese su codigo">
            </div>
          </div> -->

          <!-- Modal Cedula-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCedula" placeholder="Ingrese su Cedula">
            </div>
          </div>

          <!-- Modal Nombre-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtNombre" placeholder="Ingrese su Nombre">
            </div>
          </div>

          <!-- Modal Apellido-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtApellido" placeholder="Ingrese su Apellido">
            </div>
          </div>

          <!-- Modal Telefono-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtTelefono" placeholder="Ingrese su Telefono">
            </div>
          </div>

          <!-- Modal Direccion-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="txt" class="form-control input-lg" name="txtDireccion" placeholder="Ingrese su Direccion">
            </div>
          </div>
        

          <!-- Modal 	Email-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtEmail" placeholder="Ingrese su Email">
            </div>
          </div>

          <!-- Modal Profesion-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtProfesion" placeholder="Ingrese su Profesion">
            </div>
          </div>

          <!-- Modal PaisNac-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtPaisNac" placeholder="Ingrese su PaisNac">
            </div>
          </div>

          <!-- Modal NivelEduc-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="txt" class="form-control input-lg" name="txtNivelEduc" placeholder="Ingrese su NivelEduc">
            </div>
          </div>

          <!-- Modal FechaNac-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="date" class="form-control input-lg" name="txtFechaNac" placeholder="Ingrese su FechaNac">
            </div>
          </div>

          <!-- Modal sexo -->
          <div class="input-group" style="margin: 10px;">
            <label for="cboSexo" class="input-group-addon">Sexo</label>
            <select class="form-control" name="cboSexo" id="cboSexo">
              <option value="0">Hombre</option>
              <option value="1">Mujer</option>
            </select>
          </div>

          <!-- Modal GrupoSanguineo-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="txt" class="form-control input-lg" name="txtGrupoSanguineo" placeholder="Ingrese su GrupoSanguineo">
            </div>
          </div>

          <!-- Modal EdoCivil-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="txt" class="form-control input-lg" name="txtEdoCivil" placeholder="Ingrese su EdoCivil">
            </div>
          </div>

          <!-- Modal CargaFamiliar-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtCargaFamiliar" placeholder="Ingrese su CargaFamiliar">
            </div>
          </div>                

        <?php 
        if(isset($_POST['txtCedula'])){
                $objPersonal = new ControladorPersonal();
                if ( $objPersonal->ctrInsertarPersonal() ){
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
        <div class="modal-header" style='background-color:#3c8dbc; color:white;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar Personal</h4>
        </div>
        <div class="modal-body">

        <!--===================================================================
          =          CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION
          ====================================================================-->
                    
          <!-- Modal Codigo_Personal  -->          
          <!-- <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCodigoPersonal " placeholder="Ingrese su codigo">
            </div>
          </div> -->

          <!-- Modal Cedula-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCedula" placeholder="Ingrese su Cedula">
            </div>
          </div>

          <!-- Modal Nombre-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtNombre" placeholder="Ingrese su Nombre">
            </div>
          </div>

          <!-- Modal Apellido-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtApellido" placeholder="Ingrese su Apellido">
            </div>
          </div>

          <!-- Modal Telefono-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtTelefono" placeholder="Ingrese su Telefono">
            </div>
          </div>

          <!-- Modal Direccion-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="txt" class="form-control input-lg" name="txtDireccion" placeholder="Ingrese su Direccion">
            </div>
          </div>
        

          <!-- Modal 	Email-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtEmail" placeholder="Ingrese su Email">
            </div>
          </div>

          <!-- Modal Profesion-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtProfesion" placeholder="Ingrese su Profesion">
            </div>
          </div>

          <!-- Modal PaisNac-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtPaisNac" placeholder="Ingrese su PaisNac">
            </div>
          </div>

          <!-- Modal NivelEduc-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="txt" class="form-control input-lg" name="txtNivelEduc" placeholder="Ingrese su NivelEduc">
            </div>
          </div>

          <!-- Modal FechaNac-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="date" class="form-control input-lg" name="txtFechaNac" placeholder="Ingrese su FechaNac">
            </div>
          </div>

          <!-- Modal sexo -->
          <div class="input-group" style="margin: 10px;">
            <label for="cboSexo" class="input-group-addon">Sexo</label>
            <select class="form-control" name="cboSexo" id="cboSexo">
              <option value="0">Hombre</option>
              <option value="1">Mujer</option>
            </select>
          </div>
          

          <!-- Modal GrupoSanguineo-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="txt" class="form-control input-lg" name="txtGrupoSanguineo" placeholder="Ingrese su GrupoSanguineo">
            </div>
          </div>

          <!-- Modal EdoCivil-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="txt" class="form-control input-lg" name="txtEdoCivil" placeholder="Ingrese su EdoCivil">
            </div>
          </div>

          <!-- Modal CargaFamiliar-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtCargaFamiliar" placeholder="Ingrese su CargaFamiliar">
            </div>
          </div> 

        </div> <!-- Fin del  Modal body-->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Agregar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
</div>



