<?php

include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include '../app/controllers/eventos/show_eventos.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Datos del evento</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <div class="card card-primary">
              <div class="card-header">
                  <h3 class="card-title"><?php echo $nombre_evento;?>   </h3>

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
                    
                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Descripcion del evento</label>
                                  <input type="text" value="<?php echo $descripcion?>" class="form-control" disabled>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Responsable del evento</label>
                                  <input type="text" value="<?php echo $responsable?>" class="form-control" disabled>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Lugar del evento</label>
                                  <input type="text" value="<?php echo $lugar?>" class="form-control" disabled>
                              </div>
                          </div>
                      </div>
                   
                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Modalidad</label>
                                  <input type="text" value="<?php echo $modalidad?>" class="form-control" disabled>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Evento de la feria</label>
                                  <input type="text" value="<?php echo $feria?>" class="form-control" disabled>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Tipo</label>
                                  <input type="text" value="<?php echo $tipo?>" class="form-control" disabled>
                              </div>
                          </div>
                      </div>
                      
                      <a href="index.php" class="btn btn-secondary">Volver</a>
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
