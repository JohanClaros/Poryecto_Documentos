<body>

    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Swiper-->
            <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2"
                data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false"
                data-direction="vertical">
                <div class="swiper-wrapper text-left">
                    <div class="swiper-slide context-dark" data-slide-bg="<?= base_url() ?>assets/images/slider1.JPG">
                        <div class="swiper-slide-caption section-md">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10">
                                        <a href="#view<?= $paginas[0]->id ?>" data-bs-toggle="modal">
                                            <h6 class="text-uppercase" data-caption-animate="fadeInRight"
                                                data-caption-delay="0"><?= $paginas[0]->texto ?></h6>
                                        </a>
                                        <h2 class="oh font-weight-light" data-caption-animate="slideInUp"
                                            data-caption-delay="100">
                                            <a href="#view<?= $paginas[1]->id ?>" data-bs-toggle="modal"><span>
                                                    <?= $paginas[1]->texto ?></span></a><a
                                                href="#view<?= $paginas[2]->id ?>" data-bs-toggle="modal"><span
                                                    class="font-weight-bold">
                                                    <?= $paginas[2]->texto ?></span></a>
                                        </h2><button class="button button-default-outline button-ujarak"
                                            data-caption-animate="fadeInLeft"
                                            data-caption-delay="0">Suscribirme</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide context-dark" data-slide-bg="<?= base_url() ?>assets/images/slider.jpg">
                        <div class="swiper-slide-caption section-md">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10"><a href="#view<?= $paginas[3]->id ?>" data-bs-toggle="modal">
                                            <h6 class="text-uppercase" data-caption-animate="fadeInRight"
                                                data-caption-delay="0"><?= $paginas[3]->texto ?></h6>
                                        </a>
                                        <h2 class="oh font-weight-light" data-caption-animate="slideInUp"
                                            data-caption-delay="100">
                                            <a href="#view<?= $paginas[4]->id ?>"
                                                data-bs-toggle="modal"><span><?= $paginas[4]->texto ?></span></a>
                                            <a href="#view<?= $paginas[5]->id ?>" data-bs-toggle="modal"><span
                                                    class="font-weight-bold">
                                                    <?= $paginas[5]->texto ?></span></a>
                                        </h2><button class="button button-default-outline button-ujarak"
                                            data-caption-animate="fadeInLeft"
                                            data-caption-delay="0">Suscribirme</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide context-dark" data-slide-bg="<?= base_url() ?>assets/images/slider3.JPG">
                        <div class="swiper-slide-caption section-md">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10">
                                        <a href="#view<?= $paginas[6]->id ?>" data-bs-toggle="modal">
                                            <h6 class="text-uppercase" data-caption-animate="fadeInRight"
                                                data-caption-delay="0"><?= $paginas[6]->texto ?></h6>
                                        </a>
                                        <h2 class="oh font-weight-light" data-caption-animate="slideInUp"
                                            data-caption-delay="100">
                                            <a href="#view<?= $paginas[7]->id ?>" data-bs-toggle="modal">
                                                <span><?= $paginas[7]->texto ?></span></a><a
                                                href="#view<?= $paginas[8]->id ?>" data-bs-toggle="modal"><span
                                                    class="font-weight-bold"><?= $paginas[8]->texto ?></span></a>
                                        </h2><button class="button button-default-outline button-ujarak"
                                            data-caption-animate="fadeInLeft"
                                            data-caption-delay="0">Suscribirme</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper Pagination-->
                <div class="swiper-pagination"></div>
            </section>
            <!-- Section Box Categories-->
            <section class="section section-lg section-top-1 bg-gray-4">
                <div class="container offset-negative-1">
                    <div class="box-categories cta-box-wrap">
                        <div class="box-categories-content">
                            <div class="row justify-content-center">
                                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                                    <ul class="list-marked-2 box-categories-list">
                                        <li><img src="<?= base_url() ?>assets/images/cuadro1.JPG" alt="" width="368"
                                                height="420" />
                                            <a href="#view<?= $paginas[9]->id ?>" data-bs-toggle="modal">
                                                <h5 class="box-categories-title"><?= $paginas[9]->texto ?></h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                                    <ul class="list-marked-2 box-categories-list">
                                        <li><img src="<?= base_url() ?>assets/images/cuadro3.JPG" alt="" width="368"
                                                height="420" />
                                            <a href="#view<?= $paginas[10]->id ?>" data-bs-toggle="modal">
                                                <h5 class="box-categories-title"><?= $paginas[10]->texto ?></h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                                    <ul class="list-marked-2 box-categories-list">
                                        <li><img src="<?= base_url() ?>assets/images/cuadro2.JPG" alt="" width="368"
                                                height="420" />
                                            <a href="#view<?= $paginas[11]->id ?>" data-bs-toggle="modal">
                                                <h5 class="box-categories-title"><?= $paginas[11]->texto ?></h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a class="link-classic wow fadeInUp" href="#">Other Tours<span></span></a> -->
                    <!-- Owl Carousel-->
                </div>
            </section>
            <!-- Discover New Horizons-->
            <section class="section section-sm section-first bg-default text-md-left" id="nosotros">
                <div class="container">
                    <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
                        <div class="col-lg-6 text-center wow fadeInUp"><img
                                src="<?= base_url() ?>assets/images/index-3-556x382.jpg" alt="" width="556"
                                height="382" />
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                            <div class="box-width-lg-470">
                                <a href="#view<?= $paginas[12]->id ?>" data-bs-toggle="modal">
                                    <h3><?= $paginas[12]->texto ?></h3>
                                </a>
                                <!-- Bootstrap tabs-->
                                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left"
                                    id="tabs-7">
                                    <!-- Nav tabs-->
                                    <ul class="nav nav-tabs">
                                        <a class="nav-link active" href="#tabs-7-1" data-toggle="tab">
                                            <li class="nav-item" role="presentation"><?= $paginas[13]->texto ?>
                                        </a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2"
                                                data-toggle="tab"><?= $paginas[14]->texto ?></a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3"
                                                data-toggle="tab"><?= $paginas[15]->texto ?></a></li>
                                    </ul>
                                    <!-- Tab panes-->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs-7-1">
                                        <a href="#view<?= $paginas[16]->id ?>" data-bs-toggle="modal"><p><?= $paginas[16]->texto ?></p></a>
                                            <div class="group-md group-middle"><button
                                                    class="button button-secondary button-pipaluk"
                                                    type="button">Suscribirme</button><a
                                                    class="button button-black-outline button-md"
                                                    href="https://wa.me/573176688471">Contactar</a></div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-7-2">
                                            </a> <a href="#view<?= $paginas[17]->id ?>" data-bs-toggle="modal"><p><?= $paginas[17]->texto ?></p></a>
                                            <div class="group-md group-middle"><a
                                                    class="button button-secondary button-pipaluk"
                                                    href="contact-us.html">Suscribirme</a><a
                                                    class="button button-black-outline button-md"
                                                    href="https://wa.me/573176688471">Contactar</a></div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-7-3">
                                        <a href="#view<?= $paginas[18]->id ?>" data-bs-toggle="modal"><p><?= $paginas[18]->texto ?></p></a>
                                            <div class="group-md group-middle"><a
                                                    class="button button-secondary button-pipaluk"
                                                    href="contact-us.html">Suscribirme</a><a
                                                    class="button button-black-outline button-md"
                                                    href="https://wa.me/573176688471">Contactar</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--	Our Services-->
            <section class="section section-sm" id="asesorias">
                <div class="container">
                <a href="#view<?= $paginas[19]->id ?>" data-bs-toggle="modal"><h3><?= $paginas[19]->texto ?></h3></a>
                    <div class="row row-30">
                        <div class="col-sm-6 col-lg-4">
                            <article class="box-icon-classic">
                                <div
                                    class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                                    </div>
                                    <div class="unit-body">
                                    <a href="#view<?= $paginas[20]->id ?>" data-bs-toggle="modal"><h5 class="box-icon-classic-title"><?= $paginas[20]->texto ?></h5></a>
                                    <a href="#view<?= $paginas[21]->id ?>" data-bs-toggle="modal"><p class="box-icon-classic-text"><?= $paginas[21]->texto ?></p></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="box-icon-classic">
                                <div
                                    class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                                    </div>
                                    <div class="unit-body">
                                    <a href="#view<?= $paginas[22]->id ?>" data-bs-toggle="modal"><h5 class="box-icon-classic-title"><?= $paginas[22]->texto ?></h5></a>
                                    <a href="#view<?= $paginas[23]->id ?>" data-bs-toggle="modal"><p class="box-icon-classic-text"><?= $paginas[23]->texto ?></p></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="box-icon-classic">
                                <div
                                    class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-icon fl-bigmug-line-favourites5"></div>
                                    </div>
                                    <div class="unit-body">
                                    <a href="#view<?= $paginas[24]->id ?>" data-bs-toggle="modal"><h5 class="box-icon-classic-title"><?= $paginas[24]->texto ?></h5></a>
                                    <a href="#view<?= $paginas[25]->id ?>" data-bs-toggle="modal"><p class="box-icon-classic-text"><?= $paginas[25]->texto ?></p></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="box-icon-classic">
                                <div
                                    class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-icon fl-bigmug-line-headphones32"></div>
                                    </div>
                                    <div class="unit-body">
                                    <a href="#view<?= $paginas[26]->id ?>" data-bs-toggle="modal"><h5 class="box-icon-classic-title"><?= $paginas[26]->texto ?></h5></a>
                                    <a href="#view<?= $paginas[27]->id ?>" data-bs-toggle="modal"><p class="box-icon-classic-text"><?= $paginas[27]->texto ?></p></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="box-icon-classic">
                                <div
                                    class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-icon fl-bigmug-line-hot67"></div>
                                    </div>
                                    <div class="unit-body">
                                    <a href="#view<?= $paginas[28]->id ?>" data-bs-toggle="modal"><h5 class="box-icon-classic-title"><?= $paginas[28]->texto ?></h5></a>
                                    <a href="#view<?= $paginas[29]->id ?>" data-bs-toggle="modal"><p class="box-icon-classic-text"><?= $paginas[29]->texto ?></p></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="box-icon-classic">
                                <div
                                    class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-icon fl-bigmug-line-wallet26"></div>
                                    </div>
                                    <div class="unit-body">
                                    <a href="#view<?= $paginas[30]->id ?>" data-bs-toggle="modal"><h5 class="box-icon-classic-title"><?= $paginas[30]->texto ?></h5></a>
                                    <a href="#view<?= $paginas[31]->id ?>" data-bs-toggle="modal"><p class="box-icon-classic-text"><?= $paginas[31]->texto ?></p></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hot tours-->
            <section class="section section-sm bg-default" id="precios">
                <div class="container">
                <a href="#view<?= $paginas[32]->id ?>" data-bs-toggle="modal"><h3 class="oh-desktop"><span
                            class="d-inline-block wow slideInDown"><?= $paginas[32]->texto ?></span>
                    </h3></a>
                    <div class="row row-sm row-40 row-md-50">
                        <div class="col-sm-6 col-md-12 wow fadeInRight">
                            <!-- Product Big-->
                            <article class="product-big">
                                <div class="unit flex-column flex-md-row align-items-md-stretch">
                                    <div class="unit-left"><a class="product-big-figure"><img
                                                src="<?= base_url() ?>assets/images/4.jpg" alt="" width="600"
                                                height="366" /></a></div>
                                    <div class="unit-body">
                                        <div class="product-big-body">
                                        <a href="#view<?= $paginas[33]->id ?>" data-bs-toggle="modal"><h5 class="product-big-title"><?= $paginas[33]->texto ?></h5></a>
                                            <div class="group-sm group-middle justify-content-start">
                                                <div class="product-big-rating"><span
                                                        class="icon material-icons-star"></span><span
                                                        class="icon material-icons-star"></span><span
                                                        class="icon material-icons-star"></span><span
                                                        class="icon material-icons-star"></span><span
                                                        class="icon material-icons-star_half"></span></div>
                                            </div>
                                            <a href="#view<?= $paginas[34]->id ?>" data-bs-toggle="modal"><p class="product-big-text"><?= $paginas[34]->texto ?></p></a><a
                                                class="button button-black-outline button-ujarak"
                                                href="https://wa.me/573176688471" target="_blank">Contactar</a>
                                            <div class="product-big-price-wrap"><a href="#view<?= $paginas[40]->id ?>" data-bs-toggle="modal"><span
                                                    class="product-big-price"><?= $paginas[40]->texto ?></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-12 wow fadeInLeft">
                            <!-- Product Big-->
                            <article class="product-big">
                                <div class="unit flex-column flex-md-row align-items-md-stretch">
                                    <div class="unit-left"><a class="product-big-figure"><img
                                                src="<?= base_url() ?>assets/images/asesorias.jpg" alt="" width="600"
                                                height="366" /></a></div>
                                    <div class="unit-body">
                                        <div class="product-big-body">
                                        <a href="#view<?= $paginas[35]->id ?>" data-bs-toggle="modal"><h5 class="product-big-title"><?= $paginas[35]->texto ?></h5></a>
                                            <div class="group-sm group-middle justify-content-start">
                                                <div class="product-big-rating"><span
                                                        class="icon material-icons-star"></span><span
                                                        class="icon material-icons-star"></span><span
                                                        class="icon material-icons-star"></span><span
                                                        class="icon material-icons-star"></span><span
                                                        class="icon material-icons-star_half"></span></div>
                                            </div>
                                            <a href="#view<?= $paginas[36]->id ?>" data-bs-toggle="modal"><p class="product-big-text"><?= $paginas[36]->texto ?></p></a><a
                                                class="button button-black-outline button-ujarak"
                                                href="https://wa.me/573176688471" target="_blank">Contactar</a>
                                            <div class="product-big-price-wrap"><a href="#view<?= $paginas[41]->id ?>" data-bs-toggle="modal"><span
                                                    class="product-big-price"><?= $paginas[41]->texto ?></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Different People-->
            <section class="section section-sm">
                <div class="container">
                    <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Diferentes Personas —
                            Una
                            Mision</span></h3>
                    <div class="row row-30 justify-content-center box-ordered">
                        <?php foreach ($personas as $p) { ?>
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <!-- Team Modern-->
                            <article class="team-modern">
                                <div class="team-modern-header"><img class="img-circles"
                                        src="<?= base_url() ?>assets/personas/<?= $p->imagen ?>" alt="" width="118"
                                        height="118" />
                                    <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70"
                                        enable-background="new 0 0 270 70" xml:space="preserve">
                                        <g>
                                            <path fill="#161616"
                                                d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="team-modern-caption">
                                    <h6 class="team-modern-name"><a href="#"><?= $p->nombre ?></a></h6>
                                    <p class="team-modern-status"><?= $p->cargo ?></p>
                                    <!-- <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6> -->
                                </div>
                            </article>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- Section Subscribe-->
            <section class="section bg-default text-center offset-top-50">
                <div class="parallax-container" data-parallax-img="<?= base_url() ?>assets/images/IMG_8794.jpg">
                    <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
                        <div class="container">
                            <h2 class="heading-2 oh font-weight-normal wow slideInDown"><a href="#view<?= $paginas[37]->id ?>" data-bs-toggle="modal"><span
                                    class="d-block font-weight-semi-bold"><?= $paginas[37]->texto ?></span></a>
                                    <a href="#view<?= $paginas[38]->id ?>" data-bs-toggle="modal"><span
                                    class="d-block font-weight-light"><?= $paginas[38]->texto ?></span></a></h2>
                                    <a href="#view<?= $paginas[39]->id ?>" data-bs-toggle="modal"><p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">
                                <?= $paginas[39]->texto ?></p></a><button class="button button-secondary button-pipaluk"
                                type="button">Contactar</button>
                        </div>
                    </div>
                </div>
            </section>
            <!--	Instagrram wondertour-->
            <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4" id="patrocinio">
                <div class="container-fluid">
                    <h6 class="gallery-title">Patrocinadores</h6>
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2"
                        data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15"
                        data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true"
                        data-dots="true">
                        <!-- Thumbnail Classic-->
                        <?php foreach ($patrocinadores as $p) { ?>
                        <article class="thumbnail thumbnail-mary">
                            <div class="thumbnail-mary-figure"><img
                                    src="<?= base_url() ?>producto/img/<?= $p->imagen ?>" alt="" width="270"
                                    height="195" />
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-window50"
                                    href="<?= $p->url ?>" target="_blank"></a>
                                <h6 style="background-color:#c7c7c7a1;">
                                    <?= $p->nombre ?>
                                </h6>
                            </div>
                        </article>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <!-- AREA MODAL -->
            <?php foreach ($paginas as $g) {  ?>

            <div class="modal fade" id="view<?= $g->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Editar Listado</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url() ?>Admin/updateTexto/<?= $g->id ?>" method="post">
                                <input type="text" name="texto" value="<?= $g->texto ?>" class="form-control"> <br>

                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
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