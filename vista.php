<?php
include './app/config.php';
include './app/controllers/eventos/listado_eventos.php';
include './app/controllers/galeria/card/listado_card.php';

session_start();
if (isset($_SESSION['mensaje'])) {
    //echo 'si existe session';
} else {
    // echo 'no existe session';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de ventas</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">

        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- icheck slick -->
        <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
        <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

        <!-- Theme style -->
        <link rel="stylesheet" href="public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
        <!--libreria sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style type="text/css">
            html, body {
                margin: 0;
                padding: 0;
            }

            * {
                box-sizing: border-box;
            }

            .slider {
                width: 50%;
                margin: 100px auto;
            }

            .slick-slide {
                margin: 0px 20px;
            }

            .slick-slide img {
                width: 100%;
            }

            .slick-prev:before,
            .slick-next:before {
                color: black;
            }



        </style>
    </head>

    <body class="hold-transition ">

        <nav class="navbar navbar-expand navbar-light navbar-dark">

            <ul class="navbar-nav">

                <li class="nav-item d-none d-sm-inline-block">
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-success">
                        Asistencia
                    </button>
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-subir">
                        Subir imagen
                    </button>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <button type="button" class="btn btn btn-outline-success" data-toggle="modal" data-target="#modal-success1">
                        Asistencias
                    </button>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="login/" class="btn btn-outline-success">Ingresar</a>
                </li>
            </ul>
        </nav>

        <div class="bg-light">
            <section class="regular slider">
                <?php
                foreach ($card_datos as $imagen_card) {
                    $id = $imagen_card['fk_imagen'];
                    $imagen = $imagen_card['imagen'];
                    ?>
                    <div>
                        <img src="<?php echo $URL . "/galeria/imagenes/" . $imagen; ?>" width="200px" height="200%" alt=""/>
                    </div>
                    <?php
                }
                ?>
            </section>
        </div>
        <br>
        <br>
        <br>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card-header">

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
            <th><center>Acciones</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $contador = 0;
        foreach ($datos_eventos as $datos_evento) {
            $id_evento11 = $datos_evento['id_evento'];
            ?>
            <tr>
                <td><center><?php echo $contador = $contador + 1; ?></center></td>
                <td><?php echo $datos_evento['nombre_evento']; ?></td>
                <td><?php echo $datos_evento['fecha_inicio']; ?></td>
                <td><?php echo $datos_evento['fecha_fin']; ?></td>
                <td>
                    <center>
                        <div class="btn-group">
                            <a href="show.php?id=<?php echo $id_evento11 ?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i> Mostrar</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $id_evento11;?>">
                                Launch demo modal
                            </button>
                        </div>
                    </center>
                </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo $id_evento11;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo $id_evento11;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel<?php echo $id_evento11;?>">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Aquí puedes agregar los datos específicos del evento -->
                            <p>Nombre del evento: <?php echo $datos_evento['nombre_evento']; ?></p>
                            <p>Fecha de inicio: <?php echo $datos_evento['fecha_inicio']; ?></p>
                            <p>Fecha de fin: <?php echo $datos_evento['fecha_fin']; ?></p>
                            <!-- Agrega más información si es necesario -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </div>
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
            <th><center>Acciones</center></th>
        </tr>
    </tfoot>
</table>
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>



        <div class="col-md-12 my-5">
            <div class="row">
                <?php
                foreach ($card_datos as $imagen_card) {
                    $imagen = $imagen_card['imagen'];
                    $fecha_imagen = $imagen_card['fecha_imagen'];
                    ?>
                    <div class="card m-5" style="width: 10rem;">
                        <img src="<?php echo $URL . "/galeria/imagenes/" . $imagen; ?>" width="200px" height="200%" alt=""/>
                        <div class="card-body">
                            <h5 class="card-title"><?php; ?></h5>
                            <p class="card-text">Fecha de publicacion: <?php echo $fecha_imagen; ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>



        <div class="modal fade" id="modal-subir">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1d36b6;color: white">
                        <h4 class="modal-title">Subir imagen</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="app/controllers/vista/imagen.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>identificacion</label>
                                                        <input type="text" name="identificacion" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Evento</label>
                                                        <select name="evento1" id="evento" class="form-control">
                                                            <?php
                                                            foreach ($datos_eventos as $datos_evento) {
                                                                $evento_tabla = $datos_evento['nombre_evento'];
                                                                $id_evento = $datos_evento['id_evento'];
                                                                ?>
                                                                <option value="<?php echo $id_evento; ?>"><?php echo $evento_tabla; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div>
                                                    <label>Imagen </label>
                                                    <input type="file" class="form-control" name="img" id="file">
                                                    <ouput id="list"></ouput>
                                                    <script>
                                                        function archivo(evt) {
                                                            var files = evt.target.files; // FileList object
                                                            // Obtenemos la imagen del campo "file".
                                                            for (var i = 0, f; f = files[i]; i++) {
                                                                //Solo admitimos imágenes.
                                                                if (!f.type.match('image.*')) {
                                                                    continue;
                                                                }
                                                                var reader = new FileReader();
                                                                reader.onload = (function (theFile) {
                                                                    return function (e) {
                                                                        // Insertamos la imagen
                                                                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="', e.target.result, '" width="100%" title="', escape(theFile.name), '"/>'].join('');
                                                                    };
                                                                })(f);
                                                                reader.readAsDataURL(f);
                                                            }
                                                        }
                                                        document.getElementById('file').addEventListener('change', archivo, false);
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" >Subir imagen</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal fade" id="modal-success" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-success">
                    <div class="modal-header">
                        <h4 class="modal-title">Asistencia</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="app/controllers/vista/asistencia.php" method="POST">
                            <center>
                                <div class="form-group">
                                    <label for="identificacion">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Ingrese su email">
                                </div>
                                <div class="form-group">
                                    <label for="evento">Elige un evento</label>
                                    <select name="evento" id="evento" class="form-control">
                                        <?php
                                        foreach ($datos_eventos as $datos_evento) {
                                            $evento_tabla = $datos_evento['nombre_evento'];
                                            $id_evento = $datos_evento['id_evento'];
                                            ?>
                                            <option value="<?php echo $id_evento; ?>"><?php echo $evento_tabla; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </center>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-light">Asistir</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>




        <!-- Bootstrap 4 -->
        <script src="public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://kenwheeler.github.io/slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
                                                        $(document).on('ready', function () {
                                                            $(".regular").slick({
                                                                dots: true,
                                                                infinite: true,
                                                                slidesToShow: 3,
                                                                slidesToScroll: 3
                                                            });
                                                        });

        </script>
    </body>
</html>
<?php include('./layout/mensajes.php'); ?>
