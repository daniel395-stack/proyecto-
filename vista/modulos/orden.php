  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MODULO ORDEN

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class=" fa  fa-user-plus"></i> Orden</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#modalIngresar"> Ingresar Orden
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
                <th>CodigoOrden</th>
                <th>Fecha</th>
                <th>Numero</th>
                <th>Proveedor</th>
                <th>Ubicacion</th>
                <th>Ruta</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Estampilla</th>
                <th>Cabezote</th>
                <th>Furgon</th>
                <th>Llantas</th>
                <th>Estado</th>
                <th>acciones</th>

              </tr>
            </thead>
            <tbody>

              <?php

              $objOrden = new ControladorOrden();
              $arrayOrden = $objOrden->ctrListarOrden();
              foreach ($arrayOrden as $campo) {
              ?>
                <tr>
                  <td><?php echo $campo['Codigo_Orden'];  ?></td>
                  <td><?php echo $campo['Fecha'];  ?></td>
                  <td><?php echo $campo['Numero'];  ?></td>
                  <td><?php echo $campo['Proveedor'];  ?></td>
                  <td><?php echo $campo['Ubicacion'];  ?></td>
                  <td><?php echo $campo['Ruta'];  ?></td>
                  <td><?php echo $campo['Telefono'];  ?></td>
                  <td><?php echo $campo['Email'];  ?></td>
                  <td><?php echo $campo['Producto'];  ?></td>
                  <td><?php echo $campo['Cantidad'];  ?></td>
                  <td><?php echo $campo['Estampilla'];  ?></td>
                  <td><?php echo $campo['Cabezote'];  ?></td>
                  <td><?php echo $campo['Furgon'];  ?></td>
                  <td><?php echo $campo['Llantas'];  ?></td>
                  <td><?php echo $campo['Estado'];  ?></td>
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
          <h4 class="modal-title">Ingresar Orden</h4>
        </div>
        <div class="modal-body">
          <!-- ==============================================
        CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION 
      ================================================-->

          
          <!-- Modal codigoOrden -->          
          <!-- <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCodigoOrden" placeholder="Ingrese su codigo">
            </div>
          </div> -->

          <!-- Modal Fecha-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="date" class="form-control input-lg" name="txtFecha" placeholder="Ingrese su Fecha">
            </div>
          </div>

          <!-- Modal Numero-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtNumero" placeholder="Ingrese su Numero">
            </div>
          </div>

          <!-- Modal Proveedor-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtProveedor" placeholder="Ingrese su Proveedor">
            </div>
          </div>

          <!-- Modal Ubicacion-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtUbicacion" placeholder="Ingrese su Ubicacion">
            </div>
          </div>

          
          <!-- Modal Ruta-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtRuta" placeholder="Ingrese su Ruta">
            </div>
          </div>

          <!-- Modal Telefono-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtTelefono" placeholder="Ingrese su Telefono">
            </div>
          </div>

          <!-- Modal Email-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtEmail" placeholder="Ingrese su Email">
            </div>
          </div>

          <!-- Modal Producto-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtProducto" placeholder="Ingrese su Producto">
            </div>
          </div>

          <!-- Modal Cantidad-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCantidad" placeholder="Ingrese su Cantidad">
            </div>
          </div>

          <!-- Modal Estampilla-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtEstampilla" placeholder="Ingrese su Estampilla">
            </div>
          </div>

          <!-- Modal Cabezote-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtCabezote" placeholder="Ingrese su Cabezote">
            </div>
          </div>

          <!-- Modal Furgon-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtFurgon" placeholder="Ingrese su Furgon">
            </div>
          </div>

          <!-- Modal Llantas-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtLlantas" placeholder="Ingrese su Llantas">
            </div>
          </div>

          <!-- Modal Estado-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtEstado" placeholder="Ingrese su Estado">
            </div>
          </div>                

        <?php 
        if(isset($_POST['txtProveedor'])){
                $objOrden = new ControladorOrden();
                if ( $objOrden->ctrInsertarOrden() ){
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
          <h4 class="modal-title">Modificar Orden</h4>
        </div>
        <div class="modal-body">

        <!--===================================================================
          =          CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION
          ====================================================================-->
<!-- Modal codigoOrden -->          
          <!-- <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCodigoOrden" placeholder="Ingrese su codigo">
            </div>
          </div> -->

          <!-- Modal Fecha-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="date" class="form-control input-lg" name="txtFecha" placeholder="Ingrese su Fecha">
            </div>
          </div>

          <!-- Modal Numero-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtNumero" placeholder="Ingrese su Numero">
            </div>
          </div>

          <!-- Modal Proveedor-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtProveedor" placeholder="Ingrese su Proveedor">
            </div>
          </div>

          <!-- Modal Ubicacion-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtUbicacion" placeholder="Ingrese su Ubicacion">
            </div>
          </div>

          
          <!-- Modal Ruta-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtRuta" placeholder="Ingrese su Ruta">
            </div>
          </div>

          <!-- Modal Telefono-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtTelefono" placeholder="Ingrese su Telefono">
            </div>
          </div>

          <!-- Modal Email-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtEmail" placeholder="Ingrese su Email">
            </div>
          </div>

          <!-- Modal Producto-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtProducto" placeholder="Ingrese su Producto">
            </div>
          </div>

          <!-- Modal Cantidad-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="number" class="form-control input-lg" name="txtCantidad" placeholder="Ingrese su Cantidad">
            </div>
          </div>

          <!-- Modal Estampilla-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtEstampilla" placeholder="Ingrese su Estampilla">
            </div>
          </div>

          <!-- Modal Cabezote-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtCabezote" placeholder="Ingrese su Cabezote">
            </div>
          </div>

          <!-- Modal Furgon-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtFurgon" placeholder="Ingrese su Furgon">
            </div>
          </div>

          <!-- Modal Llantas-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtLlantas" placeholder="Ingrese su Llantas">
            </div>
          </div>

          <!-- Modal Estado-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
              <input type="text" class="form-control input-lg" name="txtEstado" placeholder="Ingrese su Estado">
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
  