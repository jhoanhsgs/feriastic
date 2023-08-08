<?php

include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include '../app/controllers/ferias/show_ferias.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Datos de la feria</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">feria <?php echo $nombre_feria;?> </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="row">
                  <div class="col-md-12">
                    
                      <div class="form-group">
                        <label for="">Responsable</label>
                        <input type="text" name="responsable" value="<?php echo $responsable?>" class="form-control" disabled="">
                      </div>
                      <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" name="description" value="<?php echo $descripcion?>" class="form-control" disabled="">
                      </div>
                      <div class="form-group">
                        <a href="index.php" class="btn btn-secondary">Volver</a>
                      </div>
                   
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>
