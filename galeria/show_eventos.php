<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php');

include ('../app/controllers/galeria/show_eventos.php');
?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Feria: __ <?php echo $nombre_feria.' id: ' .$id_feria;?></h1>
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
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Eventos registrados a la feria</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <?php
                        foreach ($datos_eventos as $datos_eve) {
                            $id_evento = $datos_eve['id_evento'];
                            $nombre_evento = $datos_eve['nombre_evento'];
                            $Descripcion_Evento = $datos_eve['descripcion_evento'];
                            $responsable_Evento = $datos_eve['responsable_evento'];
                            ?>
                            <div class="col-md-3 col-sm-8 col-12">
                                <div class="info-box bg-light">
                                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text"><?php echo $id_evento ?></span>
                                        <span class="info-box-number">Evento: <?php echo $nombre_evento ?></span>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                        <span class="progress-description">
                                            <?php echo $responsable_Evento ?>
                                        </span>
                                        <a href="show_imagenes.php?id=<?php echo $id_evento; ?>" type="button"
                                            class="btn btn-info"><i class="fa fa-eye"></i> Mostrar</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/parte2.php'); ?>


