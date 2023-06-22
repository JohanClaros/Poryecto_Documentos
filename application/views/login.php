<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar Sesion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/animate.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/select2.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/main.css">

    <meta name="robots" content="noindex, follow">
    <script
        nonce="ada87274-25f2-49af-8869-c9c537cdba8c">(function (w, d) { !function (bv, bw, bx, by) { bv[bx] = bv[bx] || {}; bv[bx].executed = []; bv.zaraz = { deferred: [], listeners: [] }; bv.zaraz.q = []; bv.zaraz._f = function (bz) { return function () { var bA = Array.prototype.slice.call(arguments); bv.zaraz.q.push({ m: bz, a: bA }) } }; for (const bB of ["track", "set", "debug"]) bv.zaraz[bB] = bv.zaraz._f(bB); bv.zaraz.init = () => { var bC = bw.getElementsByTagName(by)[0], bD = bw.createElement(by), bE = bw.getElementsByTagName("title")[0]; bE && (bv[bx].t = bw.getElementsByTagName("title")[0].text); bv[bx].x = Math.random(); bv[bx].w = bv.screen.width; bv[bx].h = bv.screen.height; bv[bx].j = bv.innerHeight; bv[bx].e = bv.innerWidth; bv[bx].l = bv.location.href; bv[bx].r = bw.referrer; bv[bx].k = bv.screen.colorDepth; bv[bx].n = bw.characterSet; bv[bx].o = (new Date).getTimezoneOffset(); if (bv.dataLayer) for (const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ, bK) => ({ ...bJ[1], ...bK[1] }))))) zaraz.set(bI[0], bI[1], { scope: "page" }); bv[bx].q = []; for (; bv.zaraz.q.length;) { const bL = bv.zaraz.q.shift(); bv[bx].q.push(bL) } bD.defer = !0; for (const bM of [localStorage, sessionStorage]) Object.keys(bM || {}).filter((bO => bO.startsWith("_zaraz_"))).forEach((bN => { try { bv[bx]["z_" + bN.slice(7)] = JSON.parse(bM.getItem(bN)) } catch { bv[bx]["z_" + bN.slice(7)] = bM.getItem(bN) } })); bD.referrerPolicy = "origin"; bD.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bv[bx]))); bC.parentNode.insertBefore(bD, bC) };["complete", "interactive"].includes(bw.readyState) ? zaraz.init() : bv.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
              
                <form class="login100-form validate-form" action="<?= base_url() ?>index.php/Login/validar_user" method="POST">
                    <span class="login100-form-title p-b-34">
                        Iniciar Sesion
                    </span>
                    <?php if ($this->session->flashdata("error")) { ?>
                    <div class="alert alert-danger">
                        <p>
                            <?php echo $this->session->flashdata("error") ?>
                        </p>
                    </div>
                <?php } ?>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                        <input id="first-name" class="input100" type="text" name="user" placeholder="Usuario">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Ingresar
                        </button>
                    </div>

                </form>
                <div class="login100-more"
                    style="background-image: url('https://www.comunidadelemental.com/login/bg-01.jpg');"></div>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="<?= base_url() ?>login/js/jquery-3.2.1.min.js"></script>

    <script src="<?= base_url() ?>login/js/animsition.min.js"></script>

    <script src="<?= base_url() ?>login/js/popper.js"></script>
    <script src="<?= base_url() ?>login/js/bootstrap.min.js"></script>

    <script src="<?= base_url() ?>login/js/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>

    <script src="<?= base_url() ?>login/js/moment.min.js"></script>
    <script src="<?= base_url() ?>login/js/daterangepicker.js"></script>

    <script src="<?= base_url() ?>login/js/countdowntime.js"></script>

    <script src="<?= base_url() ?>login/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996"
        integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ=="
        data-cf-beacon='{"rayId":"7b6f435b1d848db8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>