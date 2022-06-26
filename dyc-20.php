<!DOCTYPE html>
<html lang="es">

<head>
    <script type="text/javascript">
        var apartado = "nuestro-whisky";
        var tipo_apartado = "interior2";
        var videoOn = false;
        var carruselDireccion = 'horizontal';
    </script>
    <?php
    include 'modules/common/metasdef.php';
    $titulo = 'Whisky DYC 20 años | Whisky DYC';
    $metaDescription = 'Sorpréndete con el exclusivo whisky DYC 20 años, una edición limitada de single malt de 20 años para honrar la memoria de nuestro fundador. ¡Descúbrelo!';
    $metaKeywords = 'dyc 20 años, whisky 20 años, dyc 20, whisky dyc 20 años';
    include 'modules/common/header.php';
    ?>
    <link rel="stylesheet" type="text/css" href="css/libs/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/libs/slick/slick-theme.css" />
</head>

<body>
    <style>
        .compra {
            position: absolute;
            max-width: 250px;
            bottom: 13%;
            left: 2%;
            /*    display:none;*/
        }

        .flex-container .compra a:hover:after {
            content: "";
        }

        .flex-container .compra a:hover {
            padding-left: 0;
        }

        .flex-container .compra a:hover:before {
            content: "";
        }

        .compra img {
            max-width: 100%;
            width: 80%;
        }

        .compra .slick-slide {
            pointer-events: none;
        }

        .compra .slick-slide.slick-current,
        .slick-slide.slick-active {
            pointer-events: initial;
        }

        .compra button {
            z-index: 99999999;
        }

        .red-pat {
            background-image: url("assets/img/whisky/fondo-pattern.jpg");
            background-repeat: no-repeat;
            /* color: #b18b55; */
            color: #E3C88D;
            text-align: center;
        }

        /* .red-pat p {
            font-size: 40px;
        } */

        /* .sello20 {
            background-image: url("assets/img/whisky/logo20.png");
            background-repeat: no-repeat;
        } */
        .titulo-pat {

            font-size: 30px;
            padding-top: 7%;
            font-family: 'Gilroy', serif;
        }

        .p-pat {
            /* text-align: justify; */

            font-weight: bold;
            margin-top: 0%;
            margin-bottom: 0%;
            margin-left: 20%;
            margin-right: 20%;
        }

        .texto-pat {
            font-size: 20px;
            font-family: 'Helvetica Neue Light', serif;
        }

        .gold-pat {
            background-color: #E3C88D;
            background-image: url(assets/img/whisky/fondo-maestros.png);
        }

        .p-pat-gold {
            font-weight: bold;
            color: #92000D;
            /* padding-top: 10%; */
            text-align: right;
            margin-left: 10%;
            margin-right: 50%;
        }

        .estuche {
            margin-left: 45%;
            /* margin-bottom: 20%; */
            margin-top: -30%;
            padding-bottom: 0%;
        }

        .enlacee {
            font-weight: bold;
            color: #92000D;
            text-align: center;
            font-style: italic;
            text-decoration: underline;
        }

        .p-gold-inferior {
            margin-right: 10%;
            text-align: center;
        }

        video {
            width: 100%;
            height: auto;
        }

        .botella {
            padding-top: 5%;
            margin-right: 40%;
            padding-bottom: 8%;
            /* max-width: 81%; */
            width: 15%;
        }

        .texto-cata {
            color: #92000D;
            margin-right: 20%;
            margin-left: 47%;
            text-align: left;
            margin-top: -37%;
            /* margin-bottom: 18%; */
            padding-bottom: 9%;
        }

        .li1 {
            background-image: url(../assets/img/SVG/icono-ojo.png);
        }

        .li2 {
            background-image: url(../assets/img/SVG/icono-nariz.png);
        }

        .li3 {
            background-image: url(../assets/img/SVG/icono-boca.png);
        }

        .li4 {
            background-image: url(../assets/img/SVG/icono-acabado.png);
        }
        
    </style>
    <style>
        @media (min-width: 1025px) {
            .p-bgBack {
                
            }

            .p-pageContent {
                height: 605px !important;

            }
            .flex-container{
                max-width: 330px !important;
                /* padding-left: 5%; */
            }
        }

        @media (min-width: 1920px) {
            .p-bgBack {
                
            }

            .p-pageContent {
                height: 615px !important;
            }

            .flex-container{
                max-width: 330px !important;
                padding-left: 5%;
            }
            
        }
    </style>
    <div class="fondo_corp"></div>
    <div class="container mainContainer">
        <?php include 'modules/common/menu.php'; ?>

        <!-- 	CONTENIDO ESPECÍFICO 	-->

        <div id="pagecontent" class="relative interiorweb anim carruselEstructura buy15dyc p-pageContent">
            <a href="nuestro-whisky#liquidos-insolitos">
                <div class="carruselVolver v2"></div>
            </a>
            <div class="container containerTotal buy15dyc">
                <div id="c0" class="containerCarrusel i1" data-index='1'>
                    <div class="compra-buttons container_img f1" data-index="1" data-src="assets/img/whisky/cabecera-dyc20.jpg">

                        <div class="flex-container left" style="margin-left: 10% !important;">
                            <img src="assets/img/whisky/logo20.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- debajo cabecera -->
        <div class="interiorContainer " style="opacity: 0; background-color: #E3C88D !important; background-image: url(assets/img/whisky/fondo-maestros.png);">
            <div class="red-pat">
                <div>
                    <p class="titulo-pat p-pat" style="padding-bottom: 5%;">&nbsp;DYC 20: GRANDES MAESTROS UNA EDICIÓN ÚNICA E IRREPETIBLE DISEÑADA POR LORENZO CAPRILE QUE NACE PARA PONER EN VALOR LA CALIDAD DE LO NUESTRO</p>

                    <p class="p-pat texto-pat">Gracias a la herencia y la labor de nuestros destiladores nade "DYC 20 Años: Grandes Maestros", una edición irrepetible en nuestra historia que pone en valor la excelencia local. Su origen reside en la unión de DYC junto a reconocidos maestros españoles referentes en diferentes disciplinas, que comparten con la marca los valores de orgullo local, exclusividad, artesanía y sostenibilidad.</p>
                    <br>
                    <p class="p-pat texto-pat" style="padding-bottom: 5%;">Elaborado con mimo durante 20 años, este whisky single malt exquisito limita su producción a 70 botellas únicas. Siendo fruto de un largo proceso de maduración en una sola barrica de roble americano de un solo uso y que previamente ha contenido bourbon, se convierte así en el más añejo y único single barrel de la marca</p>

                </div>
            </div>
            <div class="gold-pat">
                <div>
                    <p class="texto-pat p-pat p-pat-gold" style="padding-top: 10%; padding-bottom: 1%;">Lorenzo Caprile ha sido el encargado del diseño único y especial de la botella, así como del estuche de esta colección. En su diseño, Caprile recrea la belleza de madurar en un entorno único y excepcional.</p>
                    <p class="texto-pat p-pat p-pat-gold" style="padding-bottom: 1%;">Inspirándose en la naturaleza segoviana, ha bocetado una botella majestuosa y facetada en vidrio cuyos tallos evocan los picos más altos de la Sierra de Guadarrama, ubicación de la primera y única destilería de whisky de España, y que remata coronándola con un tapón de cristal con aristas.</p>
                    <p class="texto-pat p-pat p-pat-gold">La botella se encuentra dentro de un estuche proyectado igualmente por Caprile, en el que cobra protagonismo el rojo, color fetiche del diseñador y por el que es reconocido internacionalmente</p>
                    <img class="estuche" src="assets/img/whisky/estuche20.png" alt="">

                    <p class="texto-pat p-pat p-pat-gold p-gold-inferior">Para dar forma a las botellas de esta edción limitada, contamos con la destreza de los maestros sopladores de la Real Fábrica de Cristales de La Granja y su fidelidad a los procesos y técnicas del pasado siglo XVIII, así como a la sostenibilidad de todos sus materiales.</p>
                    <p class="texto-pat p-pat p-pat-gold p-gold-inferior">Este vidrio de excelente calidad es soplado con una caña de introducido en un molde diseñado en exclusiva y finalmente tallado manualmente, convirtiendo cada ejemplar en una pieza con distinción y singularidad sin precedentes.</p>

                    <p style="padding-bottom: 5%; margin-bottom: 0;"><a href="la-destileria.php" class="enlacee texto-pat">Descubre más sobre la calidad y el proceso de destilado de nuestro whisky</a></p>
                </div>
            </div>
            <div class="video-pat red-pat">
                <div style="padding:5%;">
                    <video controls>
                        <source src="assets/img/whisky/dyc20.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="interior-max " style="padding: 0px !important;">
                <div class="flex-container2 ">
                    <div class="modulo-flex2 img">
                        <img class="active" src="assets/img/whisky/botella-20.png" style="">
                    </div>
                    <div class="modulo-flex2 data">
                        <h3 style="color: #92000D;">Notas de cata:</h3>
                        <ul>
                            <li style="background-image: url(assets/img/whisky/iconos/rojo/icono-ojo.png);color: #92000D;"><b>Color</b>: Caramelo dorado intenso.
                            </li>
                        </ul>
                        <ul>
                            <li style="background-image: url(assets/img/whisky/iconos/rojo/icono-nariz.png);color: #92000D;"><b>Olor</b>: Amaderado, malta, vainilla y roble tostado.
                            </li>
                        </ul>
                        <ul>
                            <li style="background-image: url(assets/img/whisky/iconos/rojo/icono-paladar.png);color: #92000D;"><b>Paladar</b>: El prolongado envejecimiento en una única barrica aportanotas dulces de vainilla y caramelo, matices de café tostado y frutos secos.
                            </li>
                        </ul>
                        <ul>
                            <li style="background-image: url(assets/img/whisky/iconos/rojo/icono-acabado.png);color: #92000D;"><b>Acabado</b>: Muy equilibrado y con un final ligeramente picante.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="background-color: white;padding-top: 5%;margin-top: 5%;">
                <div class="flex-container2 flex3">
                    <a href="dyc-12.php" class="modulo-flex2 w50 anim boton">
                        <div class="bg bg1 lazy" data-src="assets/img/whisky/destacados/dyc12.jpg">
                            <div class="flex-bubble">
                                <p class="gilroy">DYC 12 AÑOS</p>
                            </div>
                        </div>
                    </a>
                    <a href="dyc-15.php" class="modulo-flex2 w50 anim boton">
                        <div class="bg bg1 lazy" data-src="assets/img/whisky/destacados/dyc15.jpg">
                            <div class="flex-bubble">
                                <p class="gilroy">DYC 15 AÑOS</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <!-- 	FIN CONTENIDO ESPECÍFICO 	-->

    </div>
    <?php include 'modules/common/footer.php'; ?>
    <?php include 'modules/common/scripts-interior.php'; ?>
    <?php include 'modules/common/scripts-productos.php'; ?>
    <script type="text/javascript">
        nombrevideo = 'whisky/dyc-15';
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            compra();
            $('.container_img.f1').removeClass('link')
        });

        function compra() {
            $('.compra').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });

        }
    </script>
</body>

</html>