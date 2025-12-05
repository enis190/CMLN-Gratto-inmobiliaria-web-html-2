<?php
/*
 * Template Name: Old - Privados
 */
?>

<!doctype html>
<html lang="es">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berlitz Perú - Privados</title>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon-32x32.png">

    <style>
        .jm-loadingpage {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 999999999;
            background-color: #004FEF;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-left: 50px;
            padding-right: 50px;
        }

        .jm-loadingpage table {
            text-align: center;
        }
    </style>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/revolution/navigation.min.css">
    <link rel="stylesheet" href="assets/css/revolution/settings.min.css">
    <link rel="stylesheet" href="assets/css/cmln-style.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

    <!-- <link rel="preload" href="assets/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/revolution/navigation.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/revolution/settings.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/cmln-style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="styles.css">
    </noscript> -->

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.min.css">


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PGFZW8S');
    </script>
    <!-- End Google Tag Manager -->




</head>

<body>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGFZW8S" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="t_header"></div>

    <!-- loader -->
    <div class="jm-loadingpage ">
        <table border="0">
            <tr>
                <td>
                    <img class="img-fluid" src="assets/img/berlitz-logo.png" loading="lazy">
                </td>
            </tr>
            <tr>
                <td><span class="loader"></span></td>
            </tr>
        </table>
    </div>
    <!-- end loader -->


    <!-- Para bordes redondeados en poligonos -->
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="round">
                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
            </filter>
        </defs>
    </svg>


    <?php
    date_default_timezone_set('America/Lima');
    $fecha_inicio = '2025-07-01 00:00:00';
    $fecha_fin = '2025-12-21 23:59:59';
    if (isset($_GET['preview'])) {
        $fecha_inicio = '2024-04-25 00:00:00';
    }

    $timestamp_inicio = strtotime($fecha_inicio);
    $timestamp_fin = strtotime($fecha_fin);

    $timestamp_actual = time();
    $promo_dia_lengua = false;
    $cintillo = false;
    $cintillo_blank_friday = false;
    $cintillo_contador = false;
    $banner_promo_black_friday = false;
    $dscto_form_black_friday = false;
    $fecha_legal_form_black_friday = false;
    $banner_principal_black_friday = false;

    if ($timestamp_actual >= $timestamp_inicio && $timestamp_actual <= $timestamp_fin) {
        //$promo_dia_lengua = true;
        //$cintillo = true;
        //$cintillo_blank_friday = true;
        //$cintillo_contador = true;
        $banner_promo_black_friday = true;
        $dscto_form_black_friday = true;
        $fecha_legal_form_black_friday = true;
        $banner_principal_black_friday = true;
    }

    ?>


    <?php
    if ($cintillo == true) {

    ?>
        <div class="container-fluid" id="c_cintillo">
            <div class="row">
                <div class="col-12" style="padding: 0px;">
                    <a href="javascript:click_section('formulario')">
                        <?php
                        if ($cintillo_blank_friday == true) {
                        ?>
                            <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/1924x70.png"
                                alt="" class="img-fluid d-none d-sm-block">
                            <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/920x90.png"
                                alt="" class="img-fluid d-block d-sm-none">
                        <?php
                        } else {
                        ?>
                            <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/1924x70-204to2025.gif"
                                alt="" class="img-fluid d-none d-sm-block">
                            <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/920x90--204to2025.gif"
                                alt="" class="img-fluid d-block d-sm-none">
                        <?php
                        }
                        ?>

                    </a>
                </div>
            </div>
        </div>
        <style>
            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
                #header_page {
                    margin-top: 35px;
                }

                #c_cintillo {
                    position: fixed;
                    top: 0px;
                    width: 100%;
                    z-index: 999;
                }

                /* #slider_page{
                margin-top: 50px;
            } */
            }

            /* Media query para dispositivos móviles en orientación horizontal */
            @media only screen and (max-width: 767px) and (orientation: landscape) {

                #header_page {
                    margin-top: 20px;
                }
            }


            /* Small devices (portrait tablets and large phones, 600px and up) */
            @media only screen and (min-width: 600px) {}

            /* Medium devices (landscape tablets, 768px and up) */
            @media only screen and (min-width: 768px) {}

            /* Large devices (laptops/desktops, 992px and up) */
            @media only screen and (min-width: 992px) {
                #header_page {
                    margin-top: 50px;
                }

                #c_cintillo {
                    position: fixed;
                    top: 0px;
                    width: 100%;
                    z-index: 99999;
                }

                .c-menu.c-fixed {
                    top: 44px;
                }
            }

            /* Extra large devices (large laptops and desktops, 1200px and up) */
            @media only screen and (min-width: 1200px) {}
        </style>

    <?php
    }
    ?>





    <!-- menu xs -->
    <?php
    $class_menu_xs = '';
    if ($banner_promo_black_friday == true) {
        $class_menu_xs = 'd-none';
    }
    ?>
    <div id="div_menu_xs" class="container menu-xs" style="z-index: 99999; ">
        <div class="container">
            <div class="row ">
                <div class="col-12 item cerrar">
                    <i id="btn-menu-xs-cerrar" class="fa-solid fa-circle-xmark fa-cmln"></i>
                </div>
                <div class="col-12 item li_promos <?php echo $class_menu_xs; ?>">
                    <a href="javascript:click_section('promos')" class="i_menu menu_1 ">Promociones</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('viaje')" class="i_menu menu_2 ">plan de aprendizaje</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('acerca')" class="i_menu menu_3 ">programa</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('niveles')" class="i_menu menu_4 ">Niveles</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('metodo')" class="i_menu menu_5 ">Método</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('testimonios')" class="i_menu menu_6 ">Testimonios</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('porque')" class="i_menu menu_7 ">¿Por qué Berlitz?</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('ventajas')" class="i_menu menu_8 ">Ventajas de aprender
                        inglés</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('formulario')" class="i_menu menu_9 ">Registrarme</a>
                </div>
            </div>
        </div>
    </div>
    <!--end menu xs -->



    <?php

    if ($cintillo_contador == true) {
        //$promo_dia_lengua = true;

    ?>

        <style>
            #contenido_1,
            .li_promos {
                display: none;
            }

            @media only screen and (max-width: 600px) {
                .header {
                    background-color: transparent;
                }

            }
        </style>
        <!-- header -->
        <div id="header_page" class="container-fluid header">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-4 col-md-2 logo">
                        <picture>
                            <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                            <source srcset="assets/img/berlitz-logo.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/berlitz-logo.png" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-md-5 offset-md-3 call">

                        <a id="btn-menu-xs-abrir" class="btn-menu d-block d-lg-none"><i class="fa-solid fa-bars"></i>
                            <!-- <span>MENU</span> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->

    <?php
    }
    if ($banner_principal_black_friday == true) {
    ?>

        <!-- slider -->
        <div id="slider_page" class="container-fluid cmln-slider ">
            <div class="row">
                <div class="col-12">
                    <div class="d-block">

                    </div>
                </div>
            </div>
        </div>

        <div id="header_page" class="container-fluid header d-block d-sm-none">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-4 col-md-2 logo">
                        <picture>
                            <source srcset="assets/img/berlitz-logo.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/berlitz-logo.png" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-md-5 offset-md-3 call">

                        <a id="btn-menu-xs-abrir" class="btn-menu d-block d-lg-none"><i class="fa-solid fa-bars"></i>

                        </a>
                    </div>
                </div>
            </div>
        </div>


    <?php
    }
    if ($cintillo_contador == true) {
    ?>

        <div class="container-fluid contador">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-sm-3 offset-md-1">
                        <center>
                            <img src="assets/img/txt48.png" alt="" class="img-fluid img-48">
                        </center>
                    </div> -->
                    <div class="col-sm-3 col-md-2 offset-md-3 text-center text-sm-left">
                        <h2 class="d-none d-sm-block">La promo <br> termina en: </h2>
                        <h2 class="d-block d-sm-none">La promo termina en: </h2>
                    </div>
                    <div class="col-sm-8 col-md-4 cronometro">
                        <div class="d-block">
                            <div class="row nros">
                                <div class="col-2 nro">
                                    <div class="d-block c-block" id="dias">
                                        00
                                    </div>
                                </div>
                                <div class="col-1 nro">
                                    <div class="d-block c-block">
                                        :
                                    </div>
                                </div>
                                <div class="col-2 nro">
                                    <div class="d-block c-block" id="horas">
                                        00
                                    </div>
                                </div>
                                <div class="col-1 nro">
                                    <div class="d-block c-block">
                                        :
                                    </div>
                                </div>
                                <div class="col-2 nro">
                                    <div class="d-block c-block" id="minutos">
                                        00
                                    </div>
                                </div>
                                <div class="col-1 nro">
                                    <div class="d-block c-block">
                                        :
                                    </div>
                                </div>
                                <div class="col-2 nro">
                                    <div class="d-block c-block" id="segundos">
                                        00
                                    </div>
                                </div>
                            </div>
                            <div class="row det text-center">
                                <div class="col-2">
                                    <p>DÍAS</p>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-2">
                                    <p>HRS</p>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-2">
                                    <p>MIN</p>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-2">
                                    <p>SEG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-sm-3 cta">
                        <a href="javascript:click_section('formulario')">
                            <img src="assets/img/btn_contador.png" alt="" class="img-fluid">
                        </a>
                    </div> -->
                </div>
            </div>
        </div>


    <?php
    }
    if ($banner_principal_black_friday == true) {
    ?>

        <!-- Para margen de cintillo -->
        <!-- <div class="container-fluid c-banner-black-friday"> -->


        <div class="container-fluid c-banner-black-friday">
            <div class="row">
                <div class="col-12" style="padding: 0px;">
                    <a href="javascript:click_section('formulario')">
                        <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/HEAD%20LP%20PRIV%20DSK%20PE-Oct-01-2025-01-54-40-6711-PM.png" alt="" class="img-fluid d-none d-sm-block" style="width: 100%;">
                        <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/HEAD%20LP%20PRIV%20MOB%20PE-Oct-01-2025-01-54-40-5782-PM.png" alt="" class="img-fluid d-block d-sm-none" style="width: 100%;">
                    </a>

                </div>
            </div>
        </div>

        <style>
            .cta-otra-lp {
                position: absolute;
                width: 100%;
                margin-top: -37px;
            }

            .cta-otra-lp a {
                text-decoration: none;
                font-size: 1rem;
                color: #FFF;
            }

            .c-banner-black-friday {
                /*margin-top: 47px;*/
            }

            @media only screen and (max-width: 600px) {
                .c-banner-black-friday {
                    margin-top: 75px;
                }
            }

            /* Media query para dispositivos móviles en orientación horizontal */
            @media only screen and (max-width: 767px) and (orientation: landscape) {
                .cta-otra-lp a {
                    font-size: .7rem;
                }

                .cta-otra-lp {
                    margin-top: -29px;
                }

                .c-banner-black-friday {
                    margin-top: 0px;
                }

            }
        </style>
        <!-- <div class="container-fluid cta-otra-lp">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="https://berlitz-marketing.com.pe/grupales/?utm_source=lp_privados" target="_blank">Ver también descuento en Curso Grupal <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div> -->



    <?php
    } else {

    ?>


        <div id="slider_page" class="container-fluid cmln-slider ">
            <div class="row">
                <div class="col-12">
                    <div class="d-block">

                    </div>
                </div>
            </div>
        </div>

        <!-- header -->
        <div id="header_page" class="container-fluid header">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-4 col-md-2 logo d-block d-sm-none">
                        <picture>
                            <source srcset="assets/img/berlitz-logo.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/berlitz-logo.png" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-md-5 offset-md-3 call">

                        <a id="btn-menu-xs-abrir" class="btn-menu d-block d-lg-none"><i class="fa-solid fa-bars"></i>
                            <span>MENU</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->

        <div class="container-fluid c-banner-black-friday">
            <div class="row">
                <div class="col-12" style="padding: 0px;">
                    <a href="javascript:click_section('formulario')">
                        <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/HERO-DSK-Jun-23-2025-04-11-34-7449-PM.png" alt="" class="img-fluid d-none d-sm-block" style="width: 100%;">
                        <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/HERO-MOB-Jun-23-2025-04-11-34-5207-PM.png" alt="" class="img-fluid d-block d-sm-none" style="width: 100%;">
                    </a>

                </div>
            </div>
        </div>

        <style>
            .cta-otra-lp {
                position: absolute;
                width: 100%;
                margin-top: -37px;
            }

            .cta-otra-lp a {
                text-decoration: none;
                font-size: 1rem;
                color: #FFF;
            }

            .c-banner-black-friday {
                /*margin-top: 47px;*/
            }

            @media only screen and (max-width: 600px) {
                .c-banner-black-friday {
                    margin-top: 55px;
                }
            }

            /* Media query para dispositivos móviles en orientación horizontal */
            @media only screen and (max-width: 767px) and (orientation: landscape) {
                .cta-otra-lp a {
                    font-size: .7rem;
                }

                .cta-otra-lp {
                    margin-top: -29px;
                }

                .c-banner-black-friday {
                    margin-top: 0px;
                }

            }
        </style>
        <!-- <div class="container-fluid cta-otra-lp">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="https://berlitz-marketing.com.pe/grupales/?utm_source=lp_privados" target="_blank">Ver también descuento en Curso Grupal <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div> -->
    <?php

    }
    ?>

    <div class="container-fluid c-video-testimonial-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-md-5 mt-md-4">De la necesidad y la determinación al éxito</h2>
                    <p class="mb-3">Descubre cómo Juan, ingeniero peruano, transformó su carrera y su vida aprendiendo inglés con Berlitz. <br>Inspírate con su historia y conviértete en nuestro próximo caso de éxito. </p>
                </div>
                <div class="col-md-5 offset-md-1">
                    <center>
                        <iframe src="https://www.youtube.com/embed/rBjlxlqBUx8?si=fAEOZwHdBlqvKBBc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>


    <div class="reconocimiento container-fluid">
        <div class="row">
            <div class="col-12 fade-in" data-delay="300" data-duration="500" style="padding: 0px;margin-top: 2px;">
                <picture>
                    <source srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/BANNER%20RECONOCIMIENTO%20LP.png" type="image/png">
                    <img class="img-fluid d-none d-sm-block" data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/BANNER%20RECONOCIMIENTO%20LP.png" loading="lazy" style="    width: 100%;">
                </picture>
                <picture>
                    <source srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/BANNER%20RECONOCIMIENTO%20MAILING.png" type="image/png">
                    <img class="img-fluid d-block d-sm-none" data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/BANNER%20RECONOCIMIENTO%20MAILING.png" loading="lazy" style="    width: 100%;">
                </picture>
            </div>
        </div>
    </div>


    <!-- MENU -->
    <?php
    $class_menu = '';
    if ($banner_promo_black_friday == true) {
        $class_menu = 'd-none';
    }
    ?>
    <div class="container-fluid c-menu d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li class="li_promos <?php echo $class_menu; ?>"><a href="javascript:click_section('promos')" class="i_menu menu_1 ">Promociones</a></li>
                        <li><a href="javascript:click_section('viaje')" class="i_menu menu_2 ">plan de aprendizaje</a>
                        </li>
                        <li><a href="javascript:click_section('acerca')" class="i_menu menu_3 ">programa</a></li>
                        <li><a href="javascript:click_section('niveles')" class="i_menu menu_4 ">Niveles</a></li>
                        <li><a href="javascript:click_section('metodo')" class="i_menu menu_5 ">Método</a></li>
                        <li><a href="javascript:click_section('testimonios')" class="i_menu menu_6 ">Testimonios</a>
                        </li>
                        <li><a href="javascript:click_section('porque')" class="i_menu menu_7 ">¿Por qué Berlitz?</a>
                        </li>
                        <li><a href="javascript:click_section('ventajas')" class="i_menu menu_8 ">Ventajas de aprender
                                inglés</a></li>
                        <li><a href="javascript:click_section('formulario')" class="i_menu menu_9 azul">Registrarme</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END MENU -->



    <!-- PROMOS -->
    <?php
    $class_promos = '';
    if ($banner_promo_black_friday == true) {
        //$class_promos = 'd-none';
    }
    ?>
    <div id="contenido_1" class=" container-lg c-container promos d_promos <?php echo $class_promos ?>">
        <div class="row">
            <div class="col-12 fade-in" data-delay="300" data-duration="500">
                <?php
                if ($banner_promo_black_friday == true) {
                ?>
                    <picture>
                        <source srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/DSK-Oct-01-2025-01-59-40-4703-PM.png" type="image/png">
                        <img class="img-fluid d-none d-sm-block" data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/DSK-Oct-01-2025-01-59-40-4703-PM.png" loading="lazy">
                    </picture>
                    <picture>
                        <source srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/MOB-Oct-01-2025-01-59-40-3797-PM.png" type="image/png">
                        <img class="img-fluid d-block d-sm-none" data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/MOB-Oct-01-2025-01-59-40-3797-PM.png" loading="lazy">
                    </picture>
                <?php
                } else {
                ?>
                    <picture>
                        <source srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/DSK-Oct-01-2025-01-59-40-4703-PM.png" type="image/png">
                        <img class="img-fluid d-none d-sm-block" data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/DSK-Oct-01-2025-01-59-40-4703-PM.png" loading="lazy">
                    </picture>
                    <picture>
                        <source srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/MOB-Oct-01-2025-01-59-40-3797-PM.png" type="image/png">
                        <img class="img-fluid d-block d-sm-none" data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/MOB-Oct-01-2025-01-59-40-3797-PM.png" loading="lazy">
                    </picture>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!-- END PROMOS -->




    <!-- FORM -->
    <div class="container-fluid formulario">


        <div class="container-lg c-container  ">
            <div class="row">
                <div class="col-sm-5 col-lg-4 offset-lg-1 txt fade-in">
                    <h3>¡Regístrate
                        <span>ahora!</span>
                    </h3>
                    <h2>

                        <?php
                        if ($dscto_form_black_friday == false) {
                        ?>
                            <div class="det">Tu curso privado hasta con:</div> <span>
                                50

                                <div class="dscto">
                                    <div class="simbolo">%</div> dscto.
                                </div>
                            </span>
                        <?php
                        } else {
                        ?>
                            <!-- <div class="det">Tu curso privado hasta con:</div>
                            <img src="assets/img/txt_form_promo.png" alt="" class="img-fluid"> -->
                            <div class="det">Tu curso privado hasta con:</div> <span>
                                35

                                <div class="dscto">
                                    <div class="simbolo">%</div> dscto.
                                </div>
                            </span>
                        <?php
                        }
                        ?>


                    </h2>
                    <p class="completa"><span>Completa el formulario</span>
                        para recibir más información</p>

                </div>
                <div class="col-sm-6 offset-sm-1 c-hs-form fade-in-right">
                    <!-- FORM HS -->
                    <div id="hs_form_target_widget_1614708359277"></div>

                    <script src="https://peru.berlitzuavp.live/hs/hsstatic/cos-i18n/static-1.53/bundles/project.js"></script>

                    <!--[if lte IE 8]>
                <script charset="utf-8" src="https://js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->

                    <script data-hs-allowed="true" src="https://peru.berlitzuavp.live/_hcms/forms/v2.js"></script>

                    <script data-hs-allowed="true">
                        var options = {
                            portalId: '9068661',
                            formId: '7c4adb6d-bbf2-4c21-ab23-0bc98fb7cf9e',
                            formInstanceId: '8899',
                            pageId: '113138659853',
                            region: 'na1',
                            pageName: "Berlitz Per\u00FA - Privados",
                            redirectUrl: "https:\/\/berlitz-marketing.com.pe\/gracias-privados",
                            css: '',
                            target: '#hs_form_target_widget_1614708359277',
                            contentType: "landing-page",
                            formsBaseUrl: '/_hcms/forms/',
                            formData: {
                                cssClass: 'hs-form stacked hs-custom-form'
                            },
                            onFormReady: function($form) {

                                // Sincronizar los checkboxes
                                const check1 = document.getElementById('legal_form_1-1f1efaf6-0894-471c-b6f0-2d34aa718978_8899');
                                const check2 = document.getElementById('legal_form_2-1f1efaf6-0894-471c-b6f0-2d34aa718978_8899');

                                if (check1 && check2) {
                                    const syncCheckboxes = (source, target) => {
                                        source.addEventListener('change', () => {
                                            target.checked = source.checked;
                                        });
                                    };

                                    // Sincronizar ambos checks
                                    syncCheckboxes(check1, check2);
                                    syncCheckboxes(check2, check1);
                                }


                                $('.hs-fieldtype-intl-phone select').val('PE');
                                $('.hs-fieldtype-intl-phone select').trigger('change');

                                // Validación personalizada de teléfono
                                // const phoneInput = $form.find('input[type="tel"]')[0];
                                // phoneInput.addEventListener('input', () => {
                                //     validarTelefono(phoneInput);
                                // });


                                // Detectar el botón de enviar
                                const formElement = $form.get(0); // Convertir de jQuery a elemento DOM
                                const phoneInput = formElement.querySelector('.hs-input[type="tel"]');



                                function validarTelefono(input, form) {

                                    const select = form.querySelector('select[name="tipo_de_telefono"]');
                                    console.log('Tipo de teléfono seleccionado: ' + select.value);


                                    const rawValue = input.value.trim().replace(/\s+/g, '');
                                    const regex = /^\+519\d{8}$/;
                                    const isValid = regex.test(rawValue);

                                    const rawValue2 = input.value.trim().replace(/\s+/g, '');
                                    const regex2 = /^\+510\d{8}$/;
                                    const isValid2 = regex2.test(rawValue2);

                                    // Buscar el contenedor padre del campo
                                    const fieldWrapper = input.closest('.hs-form-field');

                                    // if (select.value === 'Celular') {
                                    //     let errorList = fieldWrapper.querySelector('.hs-error-msgs');
                                    //     if (!errorList) {
                                    //         errorList = document.createElement('ul');
                                    //         errorList.className = 'no-list hs-error-msgs inputs-list';
                                    //         errorList.setAttribute('role', 'alert');
                                    //         fieldWrapper.appendChild(errorList);
                                    //     }

                                    //     let errorItem = errorList.querySelector('li');
                                    //     if (!errorItem) {
                                    //         errorItem = document.createElement('li');
                                    //         errorList.appendChild(errorItem);
                                    //     }

                                    //     let errorLabel = errorItem.querySelector('.hs-error-msg');
                                    //     if (!errorLabel) {
                                    //         errorLabel = document.createElement('label');
                                    //         errorLabel.className = 'hs-error-msg hs-main-font-element mt-1';
                                    //         errorItem.appendChild(errorLabel);
                                    //     }

                                    //     if (!isValid) {
                                    //         input.classList.add('invalid', 'error');
                                    //         errorLabel.innerText = 'El número debe comenzar con +519 y tener 9 dígitos';
                                    //         errorList.style.display = 'block';
                                    //         return false;
                                    //     } else {
                                    //         input.classList.remove('invalid', 'error');
                                    //         errorLabel.innerText = '';
                                    //         errorList.style.display = 'none';
                                    //         return true;
                                    //     }
                                    // }else{
                                    //     // FIJOS
                                    //     let errorList = fieldWrapper.querySelector('.hs-error-msgs');
                                    //     if (!errorList) {
                                    //         errorList = document.createElement('ul');
                                    //         errorList.className = 'no-list hs-error-msgs inputs-list';
                                    //         errorList.setAttribute('role', 'alert');
                                    //         fieldWrapper.appendChild(errorList);
                                    //     }

                                    //     let errorItem = errorList.querySelector('li');
                                    //     if (!errorItem) {
                                    //         errorItem = document.createElement('li');
                                    //         errorList.appendChild(errorItem);
                                    //     }

                                    //     let errorLabel = errorItem.querySelector('.hs-error-msg');
                                    //     if (!errorLabel) {
                                    //         errorLabel = document.createElement('label');
                                    //         errorLabel.className = 'hs-error-msg hs-main-font-element mt-1';
                                    //         errorItem.appendChild(errorLabel);
                                    //     }

                                    //     if (!isValid2) {
                                    //         input.classList.add('invalid', 'error');
                                    //         errorLabel.innerText = 'El número debe comenzar con +51 0 y tener un máximo de 8 dígitos';
                                    //         errorList.style.display = 'block';
                                    //         return false;
                                    //     } else {
                                    //         input.classList.remove('invalid', 'error');
                                    //         errorLabel.innerText = '';
                                    //         errorList.style.display = 'none';
                                    //         return true;
                                    //     }
                                    // }



                                    let errorList = fieldWrapper.querySelector('.hs-error-msgs');
                                    if (!errorList) {
                                        errorList = document.createElement('ul');
                                        errorList.className = 'no-list hs-error-msgs inputs-list';
                                        errorList.setAttribute('role', 'alert');
                                        fieldWrapper.appendChild(errorList);
                                    }

                                    let errorItem = errorList.querySelector('li');
                                    if (!errorItem) {
                                        errorItem = document.createElement('li');
                                        errorList.appendChild(errorItem);
                                    }

                                    let errorLabel = errorItem.querySelector('.hs-error-msg');
                                    if (!errorLabel) {
                                        errorLabel = document.createElement('label');
                                        errorLabel.className = 'hs-error-msg hs-main-font-element mt-1';
                                        errorItem.appendChild(errorLabel);
                                    }

                                    if (!isValid) {
                                        input.classList.add('invalid', 'error');
                                        errorLabel.innerText = 'El número debe comenzar con +519 y tener 9 dígitos';
                                        errorList.style.display = 'block';
                                        return false;
                                    } else {
                                        input.classList.remove('invalid', 'error');
                                        errorLabel.innerText = '';
                                        errorList.style.display = 'none';
                                        return true;
                                    }









                                }


                                if (formElement && phoneInput) {
                                    formElement.addEventListener('submit', function(event) {
                                        const isValid = validarTelefono(phoneInput, formElement);

                                        if (!isValid) {
                                            event.preventDefault(); // Detener envío
                                            event.stopPropagation();
                                        }
                                    });
                                }





                                // Interceptar el submit antes que HubSpot
                                $form[0].addEventListener('submit', function(e) {
                                    const esValido = validarTelefono(phoneInput);

                                    if (!esValido) {
                                        e.preventDefault();
                                        e.stopImmediatePropagation(); // ⚠️ clave para bloquear HubSpot
                                    }
                                }, true); // ⚠️ con captura activa

                            }
                        };

                        options.getExtraMetaDataBeforeSubmit = function() {
                            var metadata = {};
                            if (hbspt.targetedContentMetadata) {
                                var count = hbspt.targetedContentMetadata.length;
                                var targetedContentData = [];
                                for (var i = 0; i < count; i++) {
                                    var tc = hbspt.targetedContentMetadata[i];
                                    if (tc.length !== 3) {
                                        continue;
                                    }
                                    targetedContentData.push({
                                        definitionId: tc[0],
                                        criterionId: tc[1],
                                        smartTypeId: tc[2]
                                    });
                                }
                                metadata["targetedContentMetadata"] = JSON.stringify(targetedContentData);
                            }
                            return metadata;
                        };
                        hbspt.forms.create(options);
                    </script>
                    <!-- END FORM HS -->
                </div>
            </div>
        </div>
    </div>
    <!-- END FORM -->





    <!-- VIAJE -->
    <div id="contenido_2" class="container-fluid c-container viaje">
        <div class="container">
            <div class="row c-head text-center fade-in">
                <div class="col-12">
                    <h2>Comienza tu viaje lingüístico con <div class="d-none">Berlitz</div>
                        <div class="c-img">
                            <picture>
                                <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                <source srcset="assets/img/berlitz-logo-2.png" type="image/png">
                                <img class="img-fluid" data-src="assets/img/berlitz-logo-2.png" loading="lazy">
                            </picture>
                        </div>
                    </h2>
                    <h3>¿Te gustaría ser parte de Berlitz? Esto es lo que te espera.</h3>
                </div>
            </div>
            <div class="row c-body mt-md-4">
                <div class="col-6 offset-3 col-sm-6 offset-sm-3 col-lg-4 offset-lg-0 v2 fade-in mt-4 mt-md-0 order-1 order-sm-1 order-md-1">
                    <center>
                        <picture>
                            <source srcset="assets/img/img-body-viaje.webp" type="image/webp">
                            <source srcset="assets/img/img-body-viaje.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/img-body-viaje.png" loading="lazy">
                        </picture>
                    </center>
                </div>
                <div class="col-sm-12 col-lg-8 v2 items order-2 order-sm-2 order-md-2">
                    <div class="row item item1 fade-in-right">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-3 col-md-5 nro">
                                    1
                                </div>
                                <div class="col-7 icon d-none d-md-block">
                                    <div class="d-block c-block">
                                        <picture>
                                            <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                            <source srcset="assets/img/icon-viaje-1.png" type="image/png">
                                            <img class="img-fluid img-init" data-src="assets/img/icon-viaje-1.png" loading="lazy">
                                        </picture>
                                        <picture>
                                            <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                            <source srcset="assets/img/icon-viaje-1-hover.png" type="image/png">
                                            <img class="img-fluid img-hover" data-src="assets/img/icon-viaje-1-hover.png" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 txt">
                            <h4>Primer Contacto</h4>
                            <p>
                                <font>Uno de nuestros ejecutivos expertos se pondrá en contacto contigo con el objetivo
                                    de
                                    escuchar, entender e identificar tus necesidades específicas.</font> <br>
                                Así podremos recomendarte el curso y la modalidad que mejor se adapte a tu vida, para
                                que logres avanzar en el aprendizaje del idioma objetivo de manera eficaz.
                            </p>
                        </div>
                    </div>

                    <div class="row item item2 fade-in-right">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-3 col-md-5 nro">
                                    2
                                </div>
                                <div class="col-7 icon d-none d-md-block">
                                    <div class="d-block c-block">
                                        <picture>
                                            <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                            <source srcset="assets/img/icon-viaje-2.png" type="image/png">
                                            <img class="img-fluid img-init" data-src="assets/img/icon-viaje-2.png" loading="lazy">
                                        </picture>
                                        <picture>
                                            <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                            <source srcset="assets/img/icon-viaje-2-hover.png" type="image/png">
                                            <img class="img-fluid img-hover" data-src="assets/img/icon-viaje-2-hover.png" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 txt">
                            <h4>Plan de Estudio personalizado según tus objetivos</h4>
                            <p>
                                <font>Diseñado por expertos, adaptado para ti.</font> Nuestro equipo de profesionales en
                                enseñanza de
                                idiomas crea un plan de estudio a medida, garantizando un camino eficaz y personal hacia
                                tu éxito en inglés.
                            </p>
                        </div>
                    </div>


                    <div class="row item item3 fade-in-right">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-3 col-md-5 nro">
                                    3
                                </div>
                                <div class="col-7 icon d-none d-md-block">
                                    <div class="d-block c-block">
                                        <picture>
                                            <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                            <source srcset="assets/img/icon-viaje-3.png" type="image/png">
                                            <img class="img-fluid img-init" data-src="assets/img/icon-viaje-3.png" loading="lazy">
                                        </picture>
                                        <picture>
                                            <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                            <source srcset="assets/img/icon-viaje-3-hover.png" type="image/png">
                                            <img class="img-fluid img-hover" data-src="assets/img/icon-viaje-3-hover.png" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 txt">
                            <h4>Seguimiento constante en tu progreso</h4>
                            <p>Porque estamos 100% comprometidos con tu aprendizaje, nuestro plan personalizado de
                                estudio, basado en la eficaz <font>metodología Berlitz, te asegura un progreso rápido y
                                    notable en cada etapa de tu recorrido.</font>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END VIAJE -->



    <!-- ACERCA DEL PROGRAMA -->
    <div id="contenido_3" class="container c-container acerca ">
        <div class="row bm-4 fade-in">
            <div class="col-md-6 txt">
                <h3>Facilitamos tu experiencia de aprendizaje en inglés con nuestro <span>Programa Privado</span></h3>
                <h2><span>Clases privadas</span>
                    <font>diseñadas exclusivamente para ti.</font>
                </h2>
                <h4 class="mt-4">
                    <font>Aprende inglés</font> con un instructor dedicado a ti, en clases <font>online o presencial en
                        sede
                        Camacho.</font>
                </h4>
                <h4 class="txt-beneficios mt-3">Los beneficios de nuestras <font>clases privadas</font> son:</h4>
                <ul class="i-beneficios ">
                    <li>
                        <h5>
                            <!-- <div class="boulet"><i class="fa-light fa-check c-fa"></i></div> -->
                            <div class="boulet"><img src="assets/img/icon_users.png" class="img-fluid" alt="" data-no-lazy="1"></div>
                            <div class="i-txt"><span>Enfocadas</span> en situaciones de la vida cotidiana</div>
                        </h5>
                        <h5>
                            <div class="boulet"><img src="assets/img/icon_flexi.png" class="img-fluid" alt="" data-no-lazy="1"></div>
                            <div class="i-txt"><span>Flexibilidad</span> de horarios</div>
                        </h5>
                        <h5>
                            <div class="boulet"><img src="assets/img/icon_chats.png" class="img-fluid" alt="" data-no-lazy="1"></div>
                            <div class="i-txt"><span>Contenidos personalizados</span> según tus objetivos de aprendizaje
                            </div>
                        </h5>
                        <h5>
                            <div class="boulet"><img src="assets/img/icon_conversa.png" class="img-fluid" alt="" data-no-lazy="1"></div>
                            <div class="i-txt"><span>100% inmersivas:</span> tu instructor solo se comunicará en el
                                idioma meta</div>
                        </h5>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 offset-sm-3 col-md-5 offset-md-1 img ">
                <picture>
                    <source srcset="assets/img/img-caracteristicas.webp" type="image/webp">
                    <source srcset="assets/img/img-caracteristicas.png" type="image/png">
                    <img class="img-fluid" data-src="assets/img/img-caracteristicas.png" loading="lazy">
                </picture>
            </div>
        </div>
        <div class="row mt-4 fade-in-bottom">
            <div class="col-md-12 text-center">
                <a href="javascript:click_section('formulario')" class="btn-1 ">inicia tu <span>curso ahora</span> <i class="fa-solid fa-arrow-right c-fa"></i></a>
            </div>
        </div>
    </div>
    <!-- END ACERCA DEL PROGRAMA -->


    <!-- NIVELES -->
    <div id="contenido_4" class="container-fluid  niveles">
        <div class="container c-container">
            <div class="row head fade-in">
                <div class="col-12 text-center">
                    <h2>Los niveles <div class="d-none">Berlitz</div>
                        <div class="c-img">
                            <picture>
                                <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                <source srcset="assets/img/berlitz-logo-2.png" type="image/png">
                                <img class="img-fluid" data-src="assets/img/berlitz-logo-2.png" loading="lazy">
                            </picture>
                        </div>
                        <br>
                        MCER
                    </h2>
                </div>
            </div>
            <div class="row mb-4 fade-in">
                <div class="col-12 text-center">
                    <h3>El <font>Consejo Europeo para el Marco Común Europeo de Referencia para las Lenguas“ (MCER)
                        </font> se divide
                        en
                        diferentes niveles, para hacer que el aprendizaje de idiomas y la evaluación de las competes
                        lingüísticas sean más transparentes y comparables.</h3>

                </div>
            </div>
            <div class="row d-none d-md-block">
                <div class="col-12">
                    <div class="row niv-html ">

                        <div class="col-md-1 item">
                            <div class="d-block c-block a1 nivel_1">
                                <div class="cont cont-niv-html" data-delay="100" data-duration="500">
                                    <p class="det">A1</p>
                                    <p class="nro">1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a2 nivel_1">
                                <div class="cont cont-niv-html" data-delay="200" data-duration="500">
                                    <p class="det">A2.1</p>
                                    <p class="nro">2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a3 nivel_1">
                                <div class="cont cont-niv-html" data-delay="300" data-duration="500">
                                    <p class="det">A2.1</p>
                                    <p class="nro">3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a4 nivel_1">
                                <div class="cont cont-niv-html" data-delay="400" data-duration="500">
                                    <p class="det">A2.3</p>
                                    <p class="nro">4</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-1 item">
                            <div class="d-block c-block a5 nivel_2">
                                <div class="cont cont-niv-html" data-delay="500" data-duration="500">
                                    <p class="det">B1.1</p>
                                    <p class="nro">5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a6 nivel_2">
                                <div class="cont cont-niv-html" data-delay="600" data-duration="500">
                                    <p class="det">B1.2</p>
                                    <p class="nro">6</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a7">
                                <div class="cont cont-niv-html" data-delay="700" data-duration="500">
                                    <p class="det">B1.3</p>
                                    <p class="nro">7</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a8">
                                <div class="cont cont-niv-html" data-delay="800" data-duration="500">
                                    <p class="det">B2.1</p>
                                    <p class="nro">8</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1 item">
                            <div class="d-block c-block a9">
                                <div class="cont cont-niv-html" data-delay="900" data-duration="500">
                                    <p class="det">B2.2</p>
                                    <p class="nro">9</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a10">
                                <div class="cont cont-niv-html" data-delay="1000" data-duration="500">
                                    <p class="det">C1/C2</p>
                                    <p class="nro">10</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 item">
                            <div class="d-block c-block a11">
                                <div class="cont cont-niv-html" data-delay="1000" data-duration="500">
                                    <p class="det">MCER</p>
                                    <p class="nro">Nivel Berlitz</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row niv-html-sub">
                        <div class="col-md-2">
                            <p class="c-verde fade-in-top">Habilidades básicas del idioma</p>
                        </div>
                        <div class="col-md-2">
                            <p class="c-verde fade-in-top">Habilidades de comprensión</p>
                        </div>
                        <div class="col-md-2">
                            <p class="c-morado fade-in-top">Habilidades de conversación</p>
                        </div>
                        <div class="col-md-2">
                            <p class="c-morado fade-in-top">Habilidades de conversación</p>
                        </div>
                        <div class="col-md-2">
                            <p class="c-azul fade-in-top">Habilidades perfectas del idioma</p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- <div class="row ">
                <div class="col-md-12">
                    <div class="contenedor">
                        <div class="row">
                            <div class="col-md-6 item">
                                000
                            </div>
                            <div class="col-md-6 item">
                               1111
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->



            <div class="row fade-in-left">
                <div class="col-12">
                    <picture>
                        <source srcset="assets/img/img-niveles-xs.webp" type="image/webp">
                        <source srcset="assets/img/img-niveles-xs.png" type="image/png">
                        <img class="img-fluid d-block d-sm-none" data-src="assets/img/img-niveles-xs.png" loading="lazy">
                    </picture>
                    <picture>
                        <source srcset="assets/img/img-niveles.png" type="image/png">
                        <img class="img-fluid d-none d-sm-block d-md-none" data-src="assets/img/img-niveles.png" loading="lazy">
                    </picture>
                </div>
            </div>

            <div class="row fade-in-top">
                <div class="col-12 text-center">
                    <h3 class="det">Los <span>10 niveles Berlitz y la escala de puntos online</span> (para e-learning)
                        se pueden alinear
                        fácilmente con los niveles MCER.</h3>
                </div>
            </div>

            <div class="d-block banner-cta-2">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <p class="titulo">¿Estás list@ para un año de logros y avances?
                        </p>
                        <p><b>Con nuestros programas regulares, puedes completar hasta 5 niveles por año,</b>
                            <br>dependiendo de la frecuencia que elijas.<br>
                            ¿Quieres más? ¡Elige Berlitz Intensivo y avanza un nivel en solo semanas!
                        </p>
                        <p class="mt-4"><b>Con Berlitz, tú decides la manera de crecer.</b></p>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <!-- END NIVELES -->


    <!-- METODO -->
    <div id="contenido_5" class="container c-container metodo fade-in">
        <div class="row">
            <div class="col-md-8 offset-md-2 txt text-center">
                <h2>El método que te hará aprender un idioma de <span>manera definitiva</span></h2>
                <!-- <h3>Desde 1878, el <span>método Berlitz ha revolucionado el aprendizaje de idiomas</span>.</h3> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 txt">

                <div class="row mt-4">
                    <div class="col-sm-6 offset-sm-3 col-md-10 offset-md-2">
                        <picture>
                            <source srcset="assets/img/img-metodo.webp" type="image/webp">
                            <source srcset="assets/img/img-metodo.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/img-metodo.png" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 col-md-8 offset-md-4">
                        <picture>
                            <source srcset="assets/img/img-fecha_metodo.webp" type="image/webp">
                            <source srcset="assets/img/img-fecha_metodo.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/img-fecha_metodo.png" loading="lazy">
                        </picture>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-11 offset-md-1">
                        <p class="sup">
                            <font class="azul">Berlitz® ha revolucionado el aprendizaje de idiomas;</font> con <font>145
                                años de experiencia en el mercado lingüístico,</font> ofrecemos una inmersión total que
                            va más allá de las palabras, sumergiéndote en la cultura y las sutilezas de un nuevo idioma.
                        </p>
                        <p class="mt-4">En la práctica, nuestro método, te sumerge completamente en el idioma desde el
                            primer día. A través de una inmersión total, recreando situaciones de la vida real, aprendes
                            no solo a hablar, sino a vivir el idioma. Esta experiencia no solo mejora tu fluidez, sino
                            que también fortalece tu confianza para comunicarte en cualquier contexto.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END METODO -->



    <!-- TESTIMONIOS -->
    <div id="contenido_6" class="container-fluid  testimonio fade-in">
        <div class="container c-container">
            <div class="row testimonios">
                <div class="col-md-4 txt">
                    <h2 class="titulo-1">Berlitz y su efecto en los estudiantes</h2>
                    <p class="sup">Descubre las <span>historias inspiradoras de profesionales</span> como tú que
                        transformaron su
                        carrera y su vida con <span>Berlitz</span>.</p>
                    <p>Cada testimonio es un reflejo de cómo el dominio del
                        inglés puede abrir puertas a nuevas oportunidades y elevar tu potencial profesional.</p>
                </div>
                <div class="col-md-7 offset-md-1 ">
                    <div class="d-block c-block laptop-cont">
                        <div class="youtube-prev active">
                            <!-- <div class="youtube" id="5NGkxKzNYWM" style=" margin:0 auto; display:block; border:none">
                            </div> -->
                            <iframe src="https://www.youtube.com/embed/5NGkxKzNYWM" style="margin: 0px auto; border: none; display: block;"></iframe>
                        </div>
                        <div class="youtube">
                            0000
                        </div>
                        <div class="img-laptop">
                            <picture>
                                <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                <source srcset="assets/img/bg-laptop.png" type="image/png">
                                <img class="img-fluid" data-src="assets/img/bg-laptop.png" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TESTIMONIOS -->


    <!-- PORQUE -->
    <div id="contenido_7" class="container c-container porque">

        <div class="row mt-4">
            <div class="col-6 offset-3 col-md-4 offset-md-0  fade-in order-md-1 order-2">
                <center>
                    <picture>
                        <source srcset="assets/img/img-body-porque.webp" type="image/webp">
                        <source srcset="assets/img/img-body-porque.png" type="image/png">
                        <img class="img-fluid" data-src="assets/img/img-body-porque.png" loading="lazy">
                    </picture>
                </center>
            </div>
            <div class="col-md-8 mt-5 order-md-2 order-1">
                <div class="row head text-center">
                    <div class="col-12 fade-in">
                        <h2 class="titulo-1 text-left">¿Por qué estudiar en Berlitz?</h2>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item fade-in-bottom">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Personalización del aprendizaje
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Cada estudiante es único, y en Berlitz, tu aprendizaje también lo es. En nuestro
                                    programa privado, personalizamos cada clase a tus necesidades específicas. Esto
                                    garantiza que cada lección sea relevante y eficiente, enfocados a situaciones de la
                                    vida real.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item fade-in-bottom">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Instructores expertos en el idioma y la cultura
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Los instructores de Berlitz manejan una fluidez nativa del idioma; son maestros
                                    capacitados en nuestra metodología única. Su experiencia y habilidades aseguran una
                                    enseñanza de alta calidad y una experiencia de aprendizaje enriquecedora. Con
                                    Berlitz, estás en manos de expertos que te guiarán en cada paso de tu viaje
                                    lingüístico
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item fade-in-bottom">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Acceso a recursos en cualquier momento
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Podrás acceder a todos los materiales de aprendizaje en los niveles que has
                                    participado, así ya no estés en el nivel o en el curso.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PORQUE -->


    <!-- BANNER CTA 1 -->
    <div class="container-fluid banner-cta-1">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1 img">
                    <center>
                        <picture>
                            <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                            <source srcset="assets/img/icon-descubre.png" type="image/png">
                            <img class="img-fluid d-none d-md-block" data-src="assets/img/icon-descubre.png" loading="lazy">
                        </picture>
                    </center>
                </div>
                <div class="col-md-6 col-lg-6 txt">
                    <h2>Descubre Berlitz y habla inglés fluido definitivamente <span class="efecto">#BeUnstoppable</span>
                        <!-- <span class="c_small">donde no solo aprendes el idioma, también lo hablas
                            definitivamente.</span> -->
                    </h2>
                </div>
                <div class="col-md-2 offset-md-1 col-lg-2 offset-lg-1">
                    <center>
                        <picture>
                            <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                            <source srcset="assets/img/img-b.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/img-b.png" loading="lazy">
                        </picture>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- END BANNER  CTA 1 -->


    <!-- VENTAJAS -->
    <div id="contenido_8" class="container-fluid  ventajas">
        <div class="container c-container">
            <div class="row head">
                <div class="col-12 text-center fade-in">
                    <h2 class="titulo-1">Ventajas de hablar inglés</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <section class="slider responsive2">
                        <div class="item fade-in-bottom" data-delay="300" data-duration="500">
                            <div class="d-block c-block">
                                <center>
                                    <picture>
                                        <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                        <source srcset="assets/img/icon-empleo.png" type="image/png">
                                        <img class="img-fluid" data-src="assets/img/icon-empleo.png" loading="lazy">
                                    </picture>
                                </center>
                                <h3>El <span>inglés</span> es la lengua más demandada en las ofertas de empleo; </h3>
                                <p>se requiere en el 75% de los casos en sectores como marketing, finanzas, RRHH,
                                    consultoría, industria y tecnología.</p>
                            </div>
                        </div>
                        <div class="item fade-in-bottom" data-delay="600" data-duration="500">
                            <div class="d-block c-block">
                                <center>
                                    <picture>
                                        <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                        <source srcset="assets/img/icon-dinero.png" type="image/png">
                                        <img class="img-fluid" data-src="assets/img/icon-dinero.png" loading="lazy">
                                    </picture>
                                </center>
                                <h3>Un profesional con solo tener su certificado avanzado de <span>inglés,</span> </h3>
                                <p>puede ganar un 40% más frente a un profesional que no maneja el idioma.</p>
                            </div>
                        </div>
                        <div class="item fade-in-bottom" data-delay="900" data-duration="500">
                            <div class="d-block c-block">
                                <center>
                                    <picture>
                                        <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                        <source srcset="assets/img/icon-persona.png" type="image/png">
                                        <img class="img-fluid" data-src="assets/img/icon-persona.png" loading="lazy">
                                    </picture>
                                </center>
                                <h3>Profesionales Tech tienen un 80%</h3>
                                <p>más de oportunidad laboral si hablan <span>inglés.</span></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row mt-4 fade-in-bottom">
                <div class="col-md-12 text-center">
                    <a href="javascript:click_section('formulario')" class="btn-1 "><span>¡INSCRÍBETE YA!</span> <i class="fa-solid fa-arrow-right c-fa"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END VENTAJAS -->


    <!-- TyC -->
    <div class="container-fluid tyc">
        <div class="container c-container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="accordion" id="accordionExample1">

                        <div class="accordion-item">
                            <p class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                    Términos y condiciones
                                </button>
                            </p>
                            <div id="collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <!-- * Hasta 6 Cuotas Sin Intereses con VISA BBVA y Diners.<br><br>
                                    Descuento sobre el precio de lista de cada programa. Aplican condiciones y
                                    restricciones que serán informadas en el proceso de venta. No combinable con otros
                                    descuentos. Válido hasta el
                                    31/05/2024.

                                    <br><br>
                                    Powerpay es un medio de pago que permite pagar tus compras en las cuotas que elijas, con tu tarjeta de crédito a 3,6 y 12 meses. Podrás dividir tus compras en plazos de 3 y 6 cuotas sin intereses y sin comisiones (TEA 0.00% y TCEA 0.00%). Y en 12 cuotas tampoco cobramos intereses, pero sí una comisión Powerpay que varía en función a tu compra: desde S/6.66 hasta S/ 650.28 (TEA 0.00% y TCEA variable). Esta comisión la cobraremos de forma fraccionada en cada una de las cuotas en partes iguales. -->


                                    <ul>
                                        <li>
                                            Descuento sobre el precio de lista de cada programa. No combinable con otros descuentos*.
                                        </li>
                                        <li>Promoción solo disponible para venta nueva. No aplica para rematrícula.</li>
                                        <li>Hasta 6 cuotas sin intereses con BBVA y Dinners*. </li>
                                        <li>6 cuotas sin intereses con tarjetas Visa del BCP*. </li>
                                        <li>Paga en cuotas sin tarjeta de crédito con Cuotéalo por BCP*.
                                        </li>
                                        <li>3-6 cuotas sin intereses con cualquier tarjeta de crédito a través de PowerPay. Powerpay es un medio de pago que permite pagar tus compras en las cuotas que elijas, con tu tarjeta de crédito a 3,6 y 12 meses. Podrás dividir tus compras en plazos de 3 y 6 cuotas sin intereses y sin comisiones (TEA 0.00% y TCEA 0.00%). Y en 12 cuotas tampoco cobramos intereses, pero sí una comisión Powerpay que varía en función a tu compra: desde S/6.66 hasta S/ 650.28 (TEA 0.00% y TCEA variable). Esta comisión la cobraremos de forma fraccionada en cada una de las cuotas en partes iguales. Aprobación sujeta a previa revisión de capacidad de endeudamiento.</li>
                                        <li>
                                            Promo convenios exclusiva clientes BBVA: Aplica sobre precio de lista del canal consumidor convenios Perú. No aplica para niveles 9 y 10 de los programas Berlitz Anywhere. No acumulable con otras promociones. Modalidad: Clases online privadas personalizadas con docentes especializados. Se permiten pago en cuotas sin interés, pero se difunden en plataformas diferentes del BBVA Promo 2 → Plataforma Cuotas Sin Interés.
                                        </li>


                                    </ul>
                                    <p>*Aplican términos y condiciones que serán comunicados en el proceso de ventas.</p>
                                    <p>Válido hasta el

                                        <?php
                                        if ($fecha_legal_form_black_friday == true) {
                                            echo '31/10/2025.';
                                        } else {
                                            echo '31/10/2025.';
                                        }
                                        ?>

                                    </p>

                                    <!-- <div class="cerrar">
                                        <a href="" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>
                                                <i class="fa-thin fa-chevron-up"></i>
                                            </span>
                                        </a>
                                    </div> -->




                                    <!-- 
                                    <p class="text-light mb-0">* Hasta 6 Cuotas Sin Intereses con VISA BBVA y Diners
                                        Club.</p>
                                    <p class="text-light mb-0">* 3-6 cuotas Sin Intereses con cualquier tarjeta de
                                        crédito a través de PowerPay.</p>

                                    <p class="text-light mb-4">Descuento sobre el precio de lista de cada programa.
                                        Aplican condiciones y restricciones que serán informadas en el proceso de venta.
                                        No combinable con otros descuentos. Válido hasta el
                                        <?php
                                        if ($fecha_legal_form_black_friday == true) {
                                            echo '28/02/2025.';
                                        } else {
                                            echo '31/12/2024.';
                                        }
                                        ?>


                                    </p>

                                    
                                    <p class="text-light mb-0">Powerpay es un medio de pago que permite pagar tus
                                        compras en las cuotas que elijas, con tu tarjeta de crédito a 3,6 y 12 meses.
                                        Podrás dividir tus compras en plazos de 3 y 6 cuotas sin intereses y sin
                                        comisiones (TEA 0.00% y TCEA 0.00%). Y en 12 cuotas tampoco cobramos intereses,
                                        pero sí una comisión Powerpay que varía en función a tu compra: desde S/6.66
                                        hasta S/ 650.28 (TEA 0.00% y TCEA variable). Esta comisión la cobraremos de
                                        forma fraccionada en cada una de las cuotas en partes iguales. Aprobación sujeta
                                        a previa revisión de capacidad de endeudamiento.</p> -->


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TyC -->



    <div class="container-fluid footer2">
        <div class="container text-center">
            <p>Independently owned and operated</p>
        </div>
    </div>

    <div class="container-fluid footer">
        <div class="container text-center">
            <p>© <?php echo date("Y") ?> Berlitz Corporation</p>
        </div>
    </div>
    <!--end footer -->





    <!-- wsp -->
    <div id="btn_nosotros" class="c-wsp2 btn_contacto d-none">
        <i class="fa-regular fa-message-captions"></i>
    </div>

    <!-- <a href="https://api.whatsapp.com/send?phone=51936636289&text=Estoy%20interesado%20en%20el%20proyecto%20de%20Brasil"
        target="_blank" class="c-wsp pulse">
        <i class="fa-brands fa-whatsapp"></i>
    </a> -->


    <div class="btn-fixed-call">
        <a href="javascript:click_section('formulario')">
            <div class="img">
                <!-- <picture>
                    <source srcset="assets/img/btn-fixed-on.png" type="image/png">
                    <img class="img-fluid btn-fixed-on" data-src="assets/img/btn-fixed-on.png" loading="lazy">
                </picture> -->
                <div class="off">
                    <div class="cont-off">
                        <picture>
                            <source srcset="assets/img/btn-fixed-off.png" type="image/png">
                            <img class="img-fluid btn-fixed-off" data-src="assets/img/btn-fixed-off.png" loading="lazy">
                        </picture>
                    </div>
                </div>

                <div class="on">
                    <div class="cont-on">
                        <picture>
                            <source srcset="assets/img/btn-fixed-on.png" type="image/png">
                            <img class="img-fluid btn-fixed-on" data-src="assets/img/btn-fixed-on.png" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="txt ">
                Quiero que <span>me contacten</span>

                <picture>
                    <source srcset="assets/img/btn-fixed-on.png" type="image/png">
                    <img class="img-fluid d-inline d-sm-none" data-src="assets/img/btn-fixed-on.png" loading="lazy">
                </picture>

            </div>
        </a>
    </div>





    <a href="javascript:click_section('t_header')" class="c-subir"><i class="fa fa-angle-up"></i></a>


    <!-- <div class="c-wsp pulse" data-bs-toggle="modal" data-bs-target="#mdl_wsp">
        <i class="fa-brands fa-whatsapp"></i>
    </div> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="assets/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

    <!-- Slick-->
    <!-- <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script> -->
    <script src="assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>


    <script src="assets/js/propper.min.js"></script>
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <!--to view items on reach-->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!--Owl Slider-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--number counters-->
    <!-- <script src="assets/js/jquery-countTo.min.js"></script> -->
    <!--Parallax Background-->
    <script src="assets/js/parallaxie.min.js"></script>
    <!--Cubefolio Gallery-->
    <script src="assets/js/jquery.cubeportfolio.min.js"></script>
    <!--Fancybox js-->
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <!--tooltip js-->
    <script src="assets/js/tooltipster.min.js"></script>
    <!--wow js-->
    <!-- <script src="assets/js/wow.min.js"></script> -->

    <!--Revolution SLider-->
    <script src="assets/js/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/revolution/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="assets/js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <!-- <script src="js/revolution/extensions/revolution.extension.migration.min.js"></script> -->
    <script src="assets/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <!-- <script src="js/revolution/extensions/revolution.extension.video.min.js"></script> -->
    <!--custom functions and script-->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/cmln.js"></script>









    <script>

    </script>


    <script src="assets/js/cmln_2.js"></script>



    <script src="assets/js/luxon.min.js"></script>
    <script>
        const fechaEvento = luxon.DateTime.fromISO('2025-03-21T23:59:59', {
            zone: 'America/Lima'
        });

        function actualizarContador() {
            // Obtener la zona horaria local del navegador del usuario
            const zonaHorariaLocal = Intl.DateTimeFormat().resolvedOptions().timeZone;

            // Obtener la fecha y hora actual en la zona horaria local del navegador del usuario
            const ahora = luxon.DateTime.local().setZone(zonaHorariaLocal);

            const diferencia = fechaEvento.diff(ahora);

            if (diferencia.as('milliseconds') > 0) {
                const {
                    days,
                    hours,
                    minutes,
                    seconds
                } = diferencia.shiftTo('days', 'hours', 'minutes', 'seconds').toObject();

                document.getElementById('dias').innerHTML = `${String(days).padStart(2, '0')}`;
                document.getElementById('horas').innerHTML = `${String(hours).padStart(2, '0')}`;
                document.getElementById('minutos').innerHTML = `${String(minutes).padStart(2, '0')}`;
                document.getElementById('segundos').innerHTML = `${String(Math.floor(seconds)).padStart(2, '0')}`;
            } else {
                document.getElementById('dias').innerHTML = '00';
                document.getElementById('horas').innerHTML = '00';
                document.getElementById('minutos').innerHTML = '00';
                document.getElementById('segundos').innerHTML = '00';
            }
        }

        //setInterval(actualizarContador, 1000);
    </script>



    <script>
        // Esperar a que se cargue completamente la página (incluyendo CSS)
        window.addEventListener('load', function() {
            // Obtener el elemento con id div_menu_xs
            var menu = document.getElementById('div_menu_xs');
            // Retirar la clase d-none
            if (menu) {
                menu.classList.remove('d-none');
            }
        });
    </script>





</body>

</html>