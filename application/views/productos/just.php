<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JUST</title>
    <!-- Bootstrap -->
    <link href="<?= base_url() ?>producto/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>producto/css/styles.css?v=1.2" rel="stylesheet">
    <link href="<?= base_url() ?>producto/css/queries.css?v=1.2" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>producto/css/flexslider.css?v=1.2" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>producto/css/animate.css" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<style>
    .btn-flotante {
	font-size: 16px; /* Cambiar el tamaño de la tipografia */
	text-transform: uppercase; /* Texto en mayusculas */
	font-weight: bold; /* Fuente en negrita o bold */
	color: #ffffff; /* Color del texto */
	border-radius: 5px; /* Borde del boton */
	letter-spacing: 2px; /* Espacio entre letras */
	background-color: #E91E63; /* Color de fondo */
	padding: 18px 30px; /* Relleno del boton */
	position: fixed;
	bottom: 40px;
	right: 40px;
	transition: all 300ms ease 0ms;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
	z-index: 99;
}
.btn-flotante:hover {
	background-color: #2c2fa5; /* Color de fondo al pasar el cursor */
	box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
	transform: translateY(-7px);
}
@media only screen and (max-width: 600px) {
 	.btn-flotante {
		font-size: 14px;
		padding: 12px 20px;
		bottom: 20px;
		right: 20px;
	}
}
</style>

<body>
    <header>
        <div class="hero"></div>
    </header>
    <div class="container-fluid intro" id="about">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="chain"><?=$paginas[5]->titulo?></h1>
                <p class="text-intro"><?=$paginas[5]->texto?></p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 section-1 nopadding" id="work">
            </div>
            <div class="col-md-4 section-text nopadding">
                <div class="wp4">
                    <h2 class="frame"><?=$paginas[6]->titulo?></h2>
                    <p><?=$paginas[6]->texto?></p>
                    <div class="thin-sep"></div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 section-text nopadding">
                <div class="wp5">
                    <h2 class="mech"><?=$paginas[7]->titulo?></h2>
                    <p><?=$paginas[7]->texto?></p>
                    <div class="thin-sep"></div>
                </div>

            </div>
            <div class="col-md-8 section-2 nopadding">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 section-3">
            </div>
            <div class="col-md-4 section-text nopadding">
                <div class="wp6">
                    <h2 class="front-frame"><?=$paginas[8]->titulo?></h2>
                    <p><?=$paginas[8]->texto?></p>
                    <div class="thin-sep"></div>
                </div>

            </div>
            <div class="col-md-4 section-4"></div>
        </div>
    </div>
    <section class="flex-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="embed-responsive container">

                        <iframe class="embed-responsive-item" src="https://catalogo.justcolombia.net/?p=573176688471" class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s" frameborder="0" scrolling="auto"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="<?=base_url()?>" class="btn-flotante">Volver a Element[s]</a>


    <footer id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-4 footer-midcol">
                    <ul>
                        <li><a href="#" class="twitter-icon">Twitter</a></li>
                        <li><a href="#" class="facebook-icon">Facebook</a></li>
                        <li><a href="#" class="pintrest-icon">Pintrest</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 footer-rightcol">
                    <p>Creado por <a href="#">Robinson Villabon</a>2022. Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url() ?>producto/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>producto/js/jquery.flexslider.js"></script>
    <script src="<?= base_url() ?>producto/js/scripts.js"></script>
    <script src="<?= base_url() ?>producto/js/modernizr.js"></script>
    <script src="<?= base_url() ?>producto/js/waypoints.min.js"></script>
</body>

</html>