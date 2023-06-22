<body>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1>Patrocinadores Listado</h1>
    <br>
                            <button data-bs-target="#myModal" data-bs-toggle="modal" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Añadir Nuevo</button>
                            <br><br>
                            <?php if ($this->session->flashdata("exito")) { ?>
                                <div class="alert alert-success">
                                    <p><?php echo $this->session->flashdata("exito") ?></p>
                                </div>
                            <?php } ?>
                            <?php if ($this->session->flashdata("error")) { ?>
                                <div class="alert alert-danger">
                                    <p><?php echo $this->session->flashdata("error") ?></p>
                                </div>
                            <?php } ?>
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-edit"></i> Nombre</th>
                                            <th><i class="fa fa-bullhorn"></i>Imagen</th>
                                            <th><i class="fa fa-bullhorn"></i>Url</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($patrocinadores)) { ?>

                                            <?php foreach ($patrocinadores as $g) {  ?>
                                                <tr>
                                                    <td><?= $g->nombre ?></td>
                                                    <td><?= $g->imagen ?></td>
                                                    <td><?= $g->url ?></td>
                                                    <td>
                                                        <button data-bs-target="#view<?= $g->id ?>" data-bs-toggle="modal" class="btn btn-info"><span class="mdi mdi-check"></span></button>
                                                        <button data-bs-target="#delete<?= $g->id ?>" data-bs-toggle="modal" class="btn btn-danger"><span class="mdi mdi-close"></span></button>
                                                    </td>
                                                </tr>

                                            <?php }  ?>
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<!-- AREA MODAL -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Añadir Patrocinador</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Admin/insertarPatrocinador" method="post"  enctype="multipart/form-data">
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control"> <br>
                    <input type="text" name="url" placeholder="Enlace" class="form-control"> <br>
                    <input type="file" name="imagen" class="form-control"> <br>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- AREA MODAL -->
<?php foreach ($patrocinadores as $g) {  ?>

    <div class="modal fade" id="view<?= $g->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Editar Patrocinador</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ?>Admin/updatePatrocinador/<?= $g->id ?>" method="post">
                        <input type="text" name="nombre" value="<?= $g->nombre ?>" class="form-control"> <br>
                        <input type="text" name="url" value="<?= $g->url ?>" class="form-control"> <br>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete<?= $g->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Eliminar Patrocinador</h4>
                </div>
                <div class="modal-body">
                    <p>Deseas eliminar este Patrocinador <?= $g->nombre ?></p>
                    <a href="<?= base_url() ?>Admin/deletePatrocinador/<?= $g->id ?>" class="btn btn-success">Eliminar</a>
                </div>
            </div>
        </div>
    </div>

<?php }  ?>


<!-- base:js -->
<script src="<?= base_url() ?>admin_temp/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?= base_url() ?>admin_temp/js/off-canvas.js"></script>
<script src="<?= base_url() ?>admin_temp/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>admin_temp/js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>admin_temp/js/file-upload.js"></script>

<script src="<?= base_url() ?>admin_temp/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>admin_temp/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>admin_temp/js/data-tables.js"></script>