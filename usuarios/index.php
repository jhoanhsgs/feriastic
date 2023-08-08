<?php

include('../app/config.php');
include('../layout/sesion.php');


include('../layout/parte1.php');
include('../app/controllers/usuarios/listado_de_usuarios.php');



?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de usuarios</h1>
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
                <h3 class="card-title">Usuarios registrados</h3>

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
                    <th><center>nombres</center></th>
                    <th><center>email</center></th>
                    <th><center>Acciones</center></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $contador = 0;
                        foreach ($datos_usuarios as $datos_usuario) {
                            $id_usuario =$datos_usuario['id_usuario']?>
                        <tr>
                          <td><center><?php echo $contador = $contador + 1;?></center></td>
                          <td><?php echo $datos_usuario['nombres'];?></td>
                          <td><?php echo $datos_usuario['email'];?></td>
                          <td>
                          <center>
                              <div class="btn-group">
                                  <a href="show.php?id=<?php echo $id_usuario?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i> Mostrar</a>
                                  <a href="update.php?id=<?php echo $id_usuario?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i>Editar</a>
                                  <a href="delete.php?id=<?php echo $id_usuario?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Borrar</a>
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
                    <th><center>nombres</center></th>
                    <th><center>email</center></th>
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
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
</script>





 