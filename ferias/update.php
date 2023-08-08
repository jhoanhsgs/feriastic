<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include '../app/controllers/ferias/update_ferias.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar ferias</h1>
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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos con cuidado</h3>

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
                                    <form action="../app/controllers/ferias/update.php" method="post">
                                        <input type="text" name="id_feria" value="<?php echo $id_feria_get; ?>" hidden="">

                                        <div class="form-group">
                                            <label for="">Nombre de la feria</label>
                                            <input type="text" name="nombre_feria" class="form-control" value="<?php echo $nombre_feria;?>" placeholder="Escriba aqui el nombre del responsable" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Responsable de la feria</label>
                                            <input type="text" name="nombre_responsable" class="form-control" value="<?php echo $responsable;?>" placeholder="Escriba aqui el nombre del responsable" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de inicio</label>
                                            <input type="date" name="Fecha_inicio" class="form-control" value="<?php echo $fecha_inicio;?>" placeholder="Escriba aqui el nombre del nuevo usuario" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de fin</label>
                                            <input type="date" name="Fecha_fin" class="form-control" value="<?php echo $fecha_fin;?>" placeholder="Escriba aqui el nombre del nuevo usuario" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Descripcion</label>
                                            <input type="text" name="Descripcion" class="form-control" value="<?php echo $descripcion;?>" placeholder="Escriba aqui la descripcion de la feria" required="">
                                        </div>

                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                    </form>

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


<?php include('../layout/parte2.php'); ?>
<?php include('../layout/mensajes.php'); ?>
