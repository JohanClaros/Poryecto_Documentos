<body>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1>Blog Listado</h1>
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
                                <table id="order-listing2" class="table">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th><i class="fa fa-edit"></i> Titulo</th>
                                            <th><i class="fa fa-bullhorn"></i> Descripcion</th>
                                            <th><i class="fa fa-bullhorn"></i> Texto</th>
                                            <th><i class="fa fa-bullhorn"></i> Imagen</th>
                                            <th><i class="fa fa-bullhorn"></i> Video</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($listado)) { ?>

                                            <?php foreach ($listado as $g) {  ?>
                                                <tr>
                                                    <td><?= $g->fecha ?></td>
                                                    <td><?= $g->titulo ?></td>
                                                    <td><?= $g->descripcion ?></td>
                                                    <td><?= $g->texto ?></td>
                                                    <td><?= $g->imagen ?></td>
                                                    <td><?= $g->video ?></td>
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
                <h4 class="modal-title" id="myModalLabel">Añadir Blog</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Admin/insertarBlog" method="post" enctype="multipart/form-data">
                    <input type="text" name="titulo" placeholder="Titulo" class="form-control"> <br>
                    <label for="">Descripcion: </label> <br>
                    <textarea name="descripcion" class="form-control" cols="30" rows="10"></textarea> <br>
                    <label for="">Texto: </label> <br>
                    <textarea name="texto" class="form-control" cols="30" rows="10"></textarea> <br>
                    <input type="file" name="foto" class="form-control"> <br>
                    <select aria-label="Default select example" class="form-control" id="metodo" name="metodo" required>
                        <option selected>Video...</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select> <br>
                    <div class="add" id="add"></div> <br>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- AREA MODAL -->
<?php foreach ($listado as $g) {  ?>

    <div class="modal fade" id="view<?= $g->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Editar Blog</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ?>Admin/updateBlog" method="post">
                        <input type="text" name="titulo" value="<?= $g->titulo ?>" class="form-control"> <br>
                        <label for="">Descripcion: </label> <br>
                        <textarea name="descripcion" class="form-control" cols="30" rows="10"><?= $g->descripcion ?></textarea> <br>
                        <label for="">Texto: </label> <br>
                        <textarea name="texto" class="form-control" cols="30" rows="10"><?= $g->descripcion ?></textarea> <br>
                        <?php if ($g->video == null) { ?>
                            <input type="text" name="video" value="(NULL)" class="form-control"> <br>
                        <?php }else{ ?>
                            <input type="text" name="video" value="<?=$g->video?>" class="form-control"> <br>
                        <?php } ?>
                        <input type="hidden" name="id" value="<?= $g->id ?>">
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
                    <h4 class="modal-title" id="myModalLabel">Eliminar Listado</h4>
                </div>
                <div class="modal-body">
                    <p>Deseas eliminar este listado con titulo <?= $g->titulo ?></p>
                    <a href="<?= base_url() ?>Admin/deleteBlog/<?= $g->id ?>" class="btn btn-success">Eliminar</a>
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

<script>
    $("#metodo").on("change", function() {
        var id = $(this).val();
        if (id == 1) {
            html = '<input type="text" name="video" placeholder="Enlace Video" class="form-control"> <br>';

            $('#add').html(html);
        } else {
            html = '';

            $('#add').html(html);
        }

    });
</script>