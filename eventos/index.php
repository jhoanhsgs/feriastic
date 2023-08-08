<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');
include('../app/controllers/eventos/listado_eventos.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de eventos</h1>
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
                            <h3 class="card-title">eventos registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">



                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th><center>Nro</center></th>
                                <th><center>Nombre del evento</center></th>
                                <th><center>Fecha inicio</center></th>
                                <th><center>Fecha fin</center></th>
                                <!-- <th><center>Descripcion de la feria</center></th> -->  
                                <th><center>Acciones</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach ($datos_eventos as $datos_evento) {
                                        $id_feria = $datos_evento['id_evento']
                                        ?>
                                        <tr>
                                            <td><center><?php echo $contador = $contador + 1; ?></center></td>
                                    <td><?php echo $datos_evento['nombre_evento']; ?></td>
                                    <td><?php echo $datos_evento['fecha_inicio']; ?></td>
                                    <td><?php echo $datos_evento['fecha_fin']; ?></td>
                                    <!-- <td><?php echo $datos_evento['descripcion_evento']; ?></td> -->
                                    <td>
                                    <center>
                                        <div class="btn-group">
                                            <a href="show.php?id=<?php echo $id_feria ?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i> Mostrar</a>
                                            <a href="update.php?id=<?php echo $id_feria ?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i>Editar</a>
                                            <a href="delete.php?id=<?php echo $id_feria ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Borrar</a>
                                        </div>
                                    </center>
                                    </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th><center>Nro</center></th>
                                <th><center>Nombre de la feria</center></th>
                                <th><center>Fecha inicio</center></th>
                                <th><center>Fecha fin</center></th>
                                <!-- <th><center>Descripcion de la feria</center></th> -->
                                <th><center>Acciones</center></th>
                                </tr>
                                </tfoot>
                            </table>
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


<script>
    $(function () {
        $("#example1").DataTable({
            /* cambio de idiomas de datatable */
            "pageLength": 5,
            language: {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Mostrando 0 to 0 of 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Usuarios",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            /* fin de idiomas */
            "responsive": true, "lengthChange": true, "autoWidth": false,

        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
</script>





