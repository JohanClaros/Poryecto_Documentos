<body>


    <div class="main-panel">
        <div class="content-wrapper">
            <?php if ($this->session->flashdata("error")) { ?>
                <div class="alert alert-success">
                    <p><?php echo $this->session->flashdata("error") ?></p>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1>Tabla De documentos</h1>
                            <br>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Añadir
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url() ?>index.php/Admin/anadir" method="post">
                                                <div class="mb-3">
                                                    <label for="nombre" class="form-label">Nombre Documento:</label>
                                                    <input type="text" class="form-control" id="nombre" name='nombre' required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tipo" class="form-label">Tipo:</label>
                                                    <select class="form-select" id="tipo" name='tipo'>
                                                        <?php foreach ($tipo as $t) {  ?>

                                                            <option value="<?= $t->TIP_ID ?>"><?= $t->TIP_NOMBRE ?></option>

                                                        <?php }  ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="proceso" class="form-label">Proceso:</label>
                                                    <select class="form-select" id="proceso" name='proceso'>
                                                        <?php foreach ($proceso as $p) {  ?>

                                                            <option value="<?= $p->PRO_ID ?>"><?= $p->PRO_NOMBRE ?></option>

                                                        <?php }  ?>
                                                    </select>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="contenido" class="form-label">Contenido:</label>
                                                    <textarea class="form-control" id="contenido" name='contenido' rows="4"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar Documento</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>

                            <div class="table-responsive">
                                <table id="order-listing2" class="table">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-edit"></i> Documento</th>
                                            <th><i class="fa fa-bullhorn"></i> Proceso</th>
                                            <th><i class="fa fa-bullhorn"></i> Tipo</th>
                                            <th><i class="fa fa-bullhorn"></i> Codigo</th>
                                            <th><i class="fa fa-bullhorn"></i> Contenido</th>
                                            <th><i class="fa fa-bullhorn"></i> accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($documentos)) { ?>

                                            <?php foreach ($documentos as $g) {  ?>
                                                <tr>
                                                    <td><?= $g->DOC_NOMBRE ?></td>
                                                    <td><?= $g->PRO_NOMBRE ?></td>
                                                    <td><?= $g->TIP_NOMBRE ?></td>
                                                    <td><?= $g->DOC_CODIGO ?></td>
                                                    <td><?= $g->DOC_CONTENIDO ?></td>
                                                    <td> <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modificar<?= $g->DOC_ID ?>">
                                                            Modificar
                                                        </button>

                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Eliminar<?= $g->DOC_ID ?>">
                                                            Eliminar
                                                        </button>
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





    <!-- Modal -->
    <?php foreach ($documentos as $g) {  ?>
        <div class="modal fade" id="Eliminar<?= $g->DOC_ID ?>" tabindex="-1" aria-labelledby="Eliminar" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <h4>ESTAS SEGURO QUE DESEAS ELIMINAR <?= $g->DOC_NOMBRE ?></h4>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="<?= base_url() ?>index.php/Admin/del_escondido/<?= $g->DOC_ID ?>">ELIMINAR DOCUMENTO</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }  ?>



    <!-- Modal -->
    <?php foreach ($documentos as $g) {  ?>
        <div class="modal fade" id="Modificar<?= $g->DOC_ID ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url() ?>index.php/Admin/update/<?= $g->DOC_ID ?>" method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Documento:</label>
                                <input type="text" class="form-control" id="nombre" name='nombre' value="<?= $g->DOC_NOMBRE ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo:</label>
                                <select class="form-select" id="tipo" name='tipo'>
                                    <?php foreach ($tipo as $t) {  ?>
                                        <?php if ($t->id ==  $g->DOC_ID_TIPO) { ?>
                                            <option value="<?= $t->TIP_ID ?>" selected><?= $t->TIP_NOMBRE ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $t->TIP_ID ?>"><?= $t->TIP_NOMBRE ?></option>
                                        <?php } ?>
                                    <?php }  ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="proceso" class="form-label">Proceso:</label>
                                <select class="form-select" id="proceso" name='proceso'>
                                    <?php foreach ($proceso as $p) {  ?>
                                        <?php if ($t->id ==  $g->DOC_ID_TIPO) { ?>
                                            <option value="<?= $p->PRO_ID ?>" selected><?= $p->PRO_NOMBRE ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $p->PRO_ID ?>"><?= $p->PRO_NOMBRE ?></option>
                                        <?php } ?>


                                    <?php }  ?>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="contenido" class="form-label">Contenido:</label>
                                <textarea class="form-control" id="contenido" name='contenido' rows="4"><?= $g->DOC_CONTENIDO ?></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">MODIFICAR DOCUMENTO</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php }  ?>


</body>

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