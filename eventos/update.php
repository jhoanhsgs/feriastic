<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include '../app/controllers/eventos/update_evento.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar eventos</h1>
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
                                    <form action="../app/controllers/eventos/update.php" method="post">
                                        <input type="text" name="id_evento" value="<?php echo $id_eventos_get; ?>" hidden="">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nombre del evento</label>
                                                    <input type="text" name="nombre_evento" value="<?php echo $nombre_evento ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Descripcion del evento</label>
                                                    <input type="text" name="descripcion_evento" value="<?php echo $descripcion ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Responsable del evento</label>
                                                    <input type="text" name="responsable" value="<?php echo $responsable ?>" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Lugar del evento</label>
                                                    <select name="lugar" id="" class="form-control">
                                                        <?php
                                                            foreach($datos_lugar as $datos_luga){
                                                                $lugar_tabla = $datos_luga['descripcion_lugar'];
                                                                $id_lugar = $datos_luga['id_lugar'];?>
                                                            
                                                        <option value="<?php echo $id_lugar;?>" 
                                                            <?php 
                                                                if($lugar_tabla == $lugar){ ?> selected="selected"
                                                                <?php
                                                                }
                                                            ?> ><?php echo $lugar_tabla;?></option>
                                                        
                                                            <?php    
                                                            }                      
                                                        ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Modalidad</label>
                                                    <select name="modalidad" id="" class="form-control">
                                                        <?php
                                                            foreach($datos_modalidad as $datos_modalida){
                                                                $modalidad_tabla = $datos_modalida['descripcion_modalidad'];
                                                                $id_modalidad = $datos_modalida['id_modalidad'];?>
                                                            
                                                        <option value="<?php echo $id_modalidad;?>" 
                                                            <?php 
                                                                if($modalidad_tabla == $modalidad1){ ?> selected="selected"
                                                                <?php
                                                                }
                                                            ?> ><?php echo $modalidad_tabla;?></option>
                                                        
                                                            <?php    
                                                            }                      
                                                        ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Fecha de inicio</label>
                                                    <input type="date" name="Fecha_inicio" value="<?php echo $Fecha_inicio ?>" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Fecha de fin</label>
                                                    <input type="date" name="Fecha_fin" value="<?php echo $Fecha_fin ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Es de la feria</label>
                                                   <select name="feria" id="" class="form-control">
                                                        <?php
                                                            foreach($datos_feria as $datos_feri){
                                                                $feria_tabla = $datos_feri['nombre_feria'];
                                                                $id_feria = $datos_feri['id_feria'];?>
                                                            
                                                        <option value="<?php echo $id_feria;?>" 
                                                            <?php 
                                                                if($feria_tabla == $feria){ ?> selected="selected"
                                                                <?php
                                                                }
                                                            ?> ><?php echo $feria_tabla;?></option>
                                                        
                                                            <?php    
                                                            }                      
                                                        ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tipo</label>
                                                    <select name="tipo" id="" class="form-control">
                                                        <?php
                                                            foreach($datos_tipo as $datos_tip){
                                                                $tipo_tabla = $datos_tip['descripcion_tipo_evento'];
                                                                $id_tipo = $datos_tip['id_tipo_evento'];?>
                                                            
                                                        <option value="<?php echo $id_tipo;?>" 
                                                            <?php 
                                                                if($tipo_tabla == $tipo){ ?> selected="selected"
                                                                <?php
                                                                }
                                                            ?> ><?php echo $tipo_tabla;?></option>
                                                        
                                                            <?php    
                                                            }                      
                                                        ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="index.php" class="btn btn-secondary">Volver</a>
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

<!-- /.content-wrapper -->


<?php include('../layout/parte2.php'); ?>
<?php include('../layout/mensajes.php'); ?>
