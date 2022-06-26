<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {



    session_start();
    if (!isset($_COOKIE["remember"])) {
        $url = $_SERVER['REQUEST_URI'];
        $pos = strrpos($url, "?");
        if ($pos === false) {
            $params_get = '';
        } else {
            $params_get = substr($url, $pos);
        }
        // print_r($params_get);
        // $url_components = parse_url($url);
        // parse_str($url_components['query'], $params);
        // if(count($params)>0){
        //     $params_get=''
        // }
        header('Location:https://www.dyc.es/index2' . $params_get);
    } else { ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <script type="text/javascript">
                var apartado = "nuestro-whisky";
                var tipo_apartado = "interior2";
                var videoOn = false;
                var carruselDireccion = 'horizontal';
                <?php session_start(); ?>
            </script>
            <?php
            include 'modules/common/metasdef.php';
            $titulo = 'DYC Brand Experience | Whisky DYC';
            $metaDescription = 'Brand Experience: Una ruta soprendente para redescubrir tu ciudad.';
            $metaKeywords = 'dyc brand experience, whisky brand experience, dyc experience, whisky dyc brand experience';
            include 'modules/common/header.php';
            ?>
            <link rel="stylesheet" type="text/css" href="css/libs/slick/slick.css" />
            <link rel="stylesheet" type="text/css" href="css/libs/slick/slick-theme.css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
            <style>
                .hbutton:hover {
                    opacity: .75;
                }

                #vid {

                    margin-left: 0px;
                }

                .modalsito {
                    width: 100%;
                    height: 500%;
                    background: rgba(0, 0, 0, 0.8);

                    position: fixed;
                    top: -725;
                    left: 0;

                    display: flex;

                    animation: modal forwards;
                    visibility: hidden;
                    opacity: 0;

                    z-index: 3;
                }

                .contenido {
                    margin: auto;
                    width: 70%;
                    height: 10%;
                    background: transparent;
                    border-radius: 10px;
                    margin-top: 6%;
                }

                #cerrar {
                    display: none;
                }

                #cerrar+label {
                    position: fixed;
                    color: #fff;
                    font-size: 25px;
                    z-index: 50;
                    background: darkred;
                    height: 40px;
                    width: 40px;
                    line-height: 40px;
                    border-radius: 50%;
                    right: 150px;
                    top: 150px;
                    cursor: pointer;

                    animation: modal 2s 3s forwards;
                    visibility: hidden;
                    opacity: 0;
                }

                #cerrar:checked+label,
                #cerrar:checked~.modalsito {
                    display: none;
                }

                @keyframes modal {
                    100% {
                        visibility: visible;
                        opacity: 1;
                    }
                }

                @media (max-width:768px) {
                    .contenido {
                        width: 100%;
                        display: flex;
                        align-items: center;
                        margin-top: 25%;
                        flex-direction: column;
                    }

                    .botones-video {
                        /* margin-top: 20px; */
                    }

                    .video-button {
                        margin: 20px;
                    }

                    .video-button.bb1 {
                        background-color: #c8a986;
                        color: white;
                    }
                }
            </style>
        </head>

        <body>

            <style>
                @font-face {
                    font-family: 'trade-gothic-bold-condensed';
                    src: url('assets/img/experience/vinculos/trade-gothic-lt-std-bold-condensed-no-20.otf');
                }

                @font-face {
                    font-family: 'trade-gothic-regular';
                    src: url('assets/img/experience/vinculos/Trade-Gothic-LT-Std-Regular.otf');
                }

                @font-face {
                    font-family: 'open-sans-extrabold';
                    src: url('assets/img/experience/vinculos/open-sans-extrabold.ttf');
                }

                @font-face {
                    font-family: 'BrittanySignature';
                    src: url('assets/img/experience/vinculos/BrittanySignature.ttf');
                }

                .form-input {
                    border: solid 1px #dac291;

                }

                .verde {
                    color: #4c442f;
                }

                .ver-video {
                    cursor: pointer;
                }

                .video-button {
                    cursor: pointer;
                }

                .oro {
                    color: #cfad67;
                }

                .marron {
                    color: #c8a986 !important;
                }

                .beige {
                    color: #e7d6b7;
                }

                .beige2 {
                    color: #e8d5b7 !important;
                }

                .blanc {
                    color: #f5f3f0;
                }

                .titulo {
                    font-size: 40px;
                    font-weight: 900;
                    font-family: 'trade-gothic-bold-condensed';
                }

                .texto {
                    font-size: 25px;
                    font-family: 'trade-gothic-regular';
                    color: #7a6d67;
                }

                .texto-marron {
                    font-size: 30px;
                    font-weight: 900;
                    font-family: 'trade-gothic-bold-condensed';
                    color: #cda880;
                }

                .texto-cabecera {
                    font-family: 'trade-gothic-regular' !important;
                    text-align: center;
                }

                .videos {
                    /* margin-top: 5%; */
                    display: flex;
                    align-content: center;
                    justify-content: space-evenly;
                }

                .inside-b1 {
                    display: flex;
                    flex-direction: column;
                    align-content: center;
                    align-items: center;
                    margin-left: 10%;
                    margin-right: 10%;
                }

                video {
                    /* margin: 5px; */
                    margin-left: 12px;
                }

                .compra {
                    border: none;
                    background: transparent;
                    background-color: #c8a986;
                    color: white;
                    padding: 2rem;
                    font-size: 30px;
                    border-radius: 50px;
                    font-family: 'open-sans-extrabold';
                    cursor: pointer;
                }

                .bg {
                    background-image: none !important;
                }

                .b2 .texto {
                    color: white;
                }

                .puntuacionTotal {
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                }

                iframe {
                    width: 900px !important;

                    height: 500px;

                }

                .label-votos {
                    position: absolute;
                    padding-top: 115px;
                    font: bold 20px Arial;
                    color: rgb(232, 213, 183);
                }

                .ciudad {
                    z-index: 1;
                }
            </style>
            <style>
                @media (min-width:1440px) {
                    .video-button.bb1 {
                        background-color: #c8a986;
                        color: white;
                    }

                    .botones-video {
                        margin-top: 20px;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;
                    }

                    #vid {
                        height: 70vh;
                        width: auto;
                    }

                    .dial-circulo {
                        margin-top: 25px;
                    }

                    .texto {
                        font-size: 20px;
                    }

                    #votando {
                        font-family: 'trade-gothic-bold-condensed';
                        font-size: 30px;
                    }

                    .puntuacionTotal {
                        margin-left: 40px;
                    }

                    .puntuacionTotal p {
                        margin-right: 10px;
                    }

                    .puntuacionTotal .estrellitas {
                        margin-right: 10px;
                    }

                    .votaciones img {
                        padding-top: 10px;
                    }

                    .ciudad {
                        color: #debd9c;
                        font-family: 'BrittanySignature';
                        font-size: 45px;

                    }

                    .votaciones {
                        padding-block: 4rem;
                        display: flex;
                        flex-wrap: wrap;
                        gap: 70px;
                        max-width: 80%;
                        margin-inline: auto;
                        justify-content: center;
                    }

                    .votaciones div {
                        width: auto;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                    }

                    .separar {
                        padding-top: 80px;
                    }

                    .b2 {
                        /* margin-top: 120px; */
                    }

                    .puntuacion {
                        padding-top: 0px !important;
                        margin-top: 0px;
                    }

                    .compra {
                        letter-spacing: 5px;
                        font-size: 22px;

                    }

                    .titulo2 {
                        font-size: 40px !important;
                    }

                    .titulo {
                        font-size: 60px;
                    }

                    .videos video {
                        width: 360px;
                        aspect-ratio: 250/140;
                        height: 210px;
                    }

                    .interiorContainer {
                        padding-top: 22%;
                        padding-bottom: 5%;
                        width: 1347px;
                        max-width: 1604px;
                        opacity: 1;
                    }

                    .containerTotal {
                        height: 160%;
                    }

                    .flex-container {
                        height: 45% !important;

                    }

                    .ver-video-boton {
                        display: flex;
                        flex-direction: row;
                        justify-content: center;
                        margin-top: 125px;
                        z-index: 1;
                    }

                    .texto-cabecera {
                        padding-top: 10%;
                    }

                    .ver-video {
                        border: none;
                        background: transparent;
                        background-color: white;
                        color: #7a6d67;
                        /* padding: 1rem; */
                        font-size: 20px;
                        border-radius: 25px;
                        padding-left: 40px;
                        padding-right: 40px;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        font-weight: 900;
                    }

                    .video-button {
                        border: none;
                        background: transparent;
                        background-color: white;
                        color: #7a6d67;
                        /* padding: 1rem; */
                        font-size: 20px;
                        border-radius: 25px;
                        padding-left: 40px;
                        padding-right: 40px;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        font-weight: 900;
                    }

                    .texto-video-cabecera {
                        width: 90% !important;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                    }

                    .b2 .titulo:first-child {
                        font-size: 45px !important;
                    }

                    .b3 .titulo:first-child {
                        font-size: 50px !important;
                    }

                    .b3 {
                        width: 80%;
                        max-width: 1200px;
                        margin-inline: auto;
                        margin-bottom: 80px;
                    }

                    .b3 p {
                        text-align: left;
                    }

                    .b3 .separar {
                        padding-top: 30px;
                        margin-bottom: 0px;
                    }

                    .titulo-votaciones {
                        margin-left: 40px;
                    }

                    .votar {
                        cursor: pointer;
                        border: none;
                        background: transparent;
                        background-color: #e8d5b7;
                        color: #4c442f;
                        font-size: 20px;
                        border-radius: 25px;
                        padding-left: 35px;
                        padding-right: 35px;
                        padding-top: 5px;
                        padding-bottom: 5px;
                        font-weight: bold;
                        font-family: 'open-sans-extrabold';
                    }

                    .circulo p {
                        font-family: 'trade-gothic-regular';
                        color: white;
                        font-size: 30px;
                    }

                    .votaciones .circulo {
                        border: 5px solid #e8d5b7;
                        border-radius: 50%;
                        width: 130px;
                        height: 130px;
                        margin-top: 2rem;
                    }

                    #valoracion {
                        color: #cfad67;
                        padding-bottom: 20px;
                        font-size: 25px;
                        font-family: 'trade-gothic-regular';
                    }

                    .coment div {
                        display: flex;
                        height: 15px;
                        justify-content: flex-start;
                        margin-left: 15px;
                    }

                    .coment p {
                        margin-left: 15px;
                        margin-right: 15px;
                    }

                    .comentario {
                        margin-top: 10px;
                    }

                    .coment {
                        width: 32%;
                        /* background-color: #efefef; */
                        background-color: white;
                    }

                    .comentarios {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 21px;
                        margin-top: 50px;
                    }

                    .texto-cabecera .marron {
                        font-size: 20px;
                    }

                    .b4-negrita {
                        font-size: 20px;
                        font-weight: bold;
                    }

                    .b4 div:first-child {
                        margin-left: 50px;
                        margin-right: 50px;
                        margin-top: 50px;
                    }
                }

                @media (min-width:1920px) {
                    .video-button.bb1 {
                        background-color: #c8a986;
                        color: white;
                    }

                    .contenido {
                        margin-top: 4%;
                    }

                    .texto {
                        font-size: 25px;
                    }

                    .containerTotal {
                        height: 190%;
                    }

                    #votando {
                        font-family: 'trade-gothic-bold-condensed';
                        font-size: 40px;
                    }

                    form table {
                        font-size: 25px;
                    }

                    .videos video {
                        width: 480px;
                        aspect-ratio: auto 480/270;
                        height: 270px;
                    }

                    .titulo-votaciones {
                        margin-left: 60px;
                    }

                    .puntuacionTotal {
                        margin-left: 60px;
                    }

                    .b2 .titulo:first-child {
                        font-size: 55px !important;
                    }

                    .texto {
                        font-size: 29px;
                    }

                    .texto-marron {
                        font-size: 40px;
                    }

                    .interiorContainer {
                        padding-top: 24%;
                    }

                    .flex-container {
                        min-width: 484px !important;
                        height: 60% !important;
                    }

                    .texto-cabecera .marron {
                        font-size: 25px;
                    }

                    .b4-negrita {
                        font-size: 25px;
                        font-weight: bold;
                    }

                    .b4 p:last-child {
                        font-size: 18px;
                    }
                }
            </style>
            <div class="modalsito" id="modal" style="display: none;">
                <div class="contenido">
                    <video id="vid" src="https://dyc.es//assets/destilando.mp4" controls autoplay muted></video>
                    <div class="botones-video">
                        <button class="video-button hbutton bcompra">COMPRAR ENTRADA</button>
                        <button class="video-button hbutton bvota">VOTA</button>
                    </div>
                </div>

            </div>
            <div id="modal_votacion" class="modal">
                <form action="" style="display: flex;
    flex-direction: column;
    align-items: center;">
                    <p id="votando">Destilando lo Nuestro <br><span id="voto_por" style="    display: flex;
    flex-direction: column;
    align-items: center;"></span></p>
                    <p style="font-family: 'trade-gothic-regular';">¡Gracias por tu voto!</p>
                </form>
                <a href="#" rel="modal:close" hidden>Close</a>
            </div>
            <a href="#modal_votacion" rel="modal:open" id="activador"></a>
            <div class="fondo_corp"></div>
            <div class="container mainContainer">
                <?php include 'modules/common/menu.php'; ?>

                <!-- 	CONTENIDO ESPECÍFICO 	-->

                <div id="pagecontent" class="relative interiorweb anim carruselEstructura buy15dyc p-pageContent">
                    <div class="container containerTotal buy15dyc">
                        <div id="c0" class="containerCarrusel i1" data-index='1'>
                            <div class="compra-buttons container_img f1" data-index="1" data-src="assets/img/experience/cabecera.jpg">
                                <div class="ver-video-boton">
                                    <button class="ver-video hbutton">VER VÍDEO</button>
                                </div>
                                <div class="flex-container flexx">
                                    <img src="assets/img/experience/sello.png" alt="">
                                    <div class="texto-video-cabecera">
                                        <div class="texto-cabecera">
                                            <p class=" beige2">Te ofrecemos una ruta con Juan y Damián para redescubrir nuestras ciudades y estar más orgullosos del lugar en el que vivimos. <br>¿Te apuntas?</p>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- debajo cabecera -->
                <div class="interiorContainer">
                    <div class="b1">
                        <div class="inside-b1">
                            <div class="botones-cv-b1">
                                <button class="video-button bb1 hbutton bcompra" id="">COMPRA TU<br>ENTRADA</button>
                                <button class="video-button bb1 hbutton bvota" id="">VOTA POR LA<br>PRÓXIMA CIUDAD</button>
                            </div>
                            <p class="marron titulo" style="margin-bottom: 10px;"> ¿QUÉ ES DESTILANDO LO NUESTRO?</p>
                            <p class="texto">Cómo son las cosas... Uno viaja a una ciudad europea y vuelve sabiendo su historia completa, apreciando su estilo de vida y valorando todo lo bueno que tienen. Pero ¿y la ciudad en la que vives? Seguro que, por las prisas, la rutina y la sensación de que "siempre está ahí", no disfrutamos plenamente los planes, patrimonio y lugares increíbles que nuestras ciudades pueden ofrecernos.</p>
                            <p class="texto">Esta primera edición de Destilando lo nuestro es una ruta a pie diseñada por DYC y guiada por Juan Ibáñez y Damián Mollá, en la que descubrimos unos cuantos secretos escondidos a plena vista en Madrid, para acabar disfrutando de una excelente copa de whisky en la mejor compañía. Buen plan para pasar un fin de semana increíble en la capital, ¿verdad?</p>
                            <div class="videos" style="display: none !important;">
                                <video controls width="480" height="270">
                                    <source src="assets/videos/video1.mp4" type="video/mp4">
                                </video>
                                <video controls width="480" height="270">
                                    <source src="assets/videos/video1.mp4" type="video/mp4">
                                </video>
                                <video controls width="480" height="270">
                                    <source src="assets/videos/video1.mp4" type="video/mp4">
                                </video>
                            </div>
                            <p class="marron titulo titulo2">RUTAS LIMITADAS PARA EL VIERNES 1 Y EL SÁBADO 2 DE JULIO.</p>
                            <div>
                                <button class="hbutton compra">¡COMPRA TU ENTRADA!</button>
                                <script src="https://app.anyroad.com/assets/integration-v1.1.js"></script>

                                <div id="iframe_wrapper" hidden></div>

                                <script language="javascript" type="text/javascript">
                                    (function() {

                                        window.anyroad = new AnyRoad({

                                            container: '#iframe_wrapper',

                                            plugin: {
                                                id: 'dyc_destilando_lo_nuestro'
                                            }

                                        });

                                    })();
                                </script>

                                <!-- <a id="powered_by_anyroad_link" href="https://www.anyroad.com?utm_source=dyc_destilando_lo_nuestro&utm_medium=PBA&utm_campaign=PLUGIN"   style="color: #999; text-decoration: none; font-size: 14px; display:block; text-align: center; margin:10px 0 60px 0;">

                            Powered by AnyRoad

                        </a> -->
                            </div>


                        </div>
                    </div>
                    <div class="b2" style="background-color: #4c442f;">
                        <div>
                            <p class="marron titulo separar">Y DESPUÉS,<br>¿QUÉ CIUDAD TE GUSTARÍA QUE DESTILÁRAMOS JUNTOS?</p>
                            <p class="texto">Si Madrid o la fechas actuales no te vienen del todo bien, no te preocupes.<br>Muy pronto seguiremos destilando lo mejor de nuestras ciudades. <br>¡Vota aquí por la que quieres que sea la próxima ciudad y dínoslo en redes sociales!<br>Somos todo oídos.</p>
                            <p class="texto-marron">Muy pronto más Destilando lo Nuestro<br>#OrgullososDeLoQueSomos</p>

                        </div>
                        <div class="votaciones">
                            <?php include 'services/ajax/db.php';
                            $sql = "SELECT SUM(votos) as total from votos;";

                            $resultado = $con->query($sql) or die(print_r($db->errorInfo(), true));

                            $total = $resultado->fetchAll(PDO::FETCH_OBJ);

                            $sql = "SELECT * from votos;";

                            $resultado = $con->query($sql) or die(print_r($db->errorInfo(), true));

                            $votos = $resultado->fetchAll(PDO::FETCH_OBJ);

                            ?>
                            <div>
                                <button class="votar hbutton" <?php if (isset($_SESSION['votacion'])) {
                                                                    echo 'hidden';
                                                                } ?>>VOTAR</button>
                                <img src="assets/img/experience/sello3.png" alt="">
                                <span class="ciudad">Malaga</span>
                                <div class="dial-circulo">
                                    <input type="text" value="<?php echo $votos[0]->votos ?>" class="dial dial0">
                                    <label for="" class="label-votos">votos</label>
                                </div>
                            </div>
                            <div>
                                <button class="votar hbutton" <?php if (isset($_SESSION['votacion'])) {
                                                                    echo 'hidden';
                                                                } ?>>VOTAR</button>
                                <img src="assets/img/experience/sello3.png" alt="">
                                <span class="ciudad">Cadiz</span>
                                <div class="dial-circulo">
                                    <input type="text" value="<?php echo $votos[1]->votos ?>" class="dial dial1">
                                    <label for="" class="label-votos">votos</label>
                                </div>
                            </div>
                            <div>
                                <button class="votar hbutton" <?php if (isset($_SESSION['votacion'])) {
                                                                    echo 'hidden';
                                                                } ?>>VOTAR</button>
                                <img src="assets/img/experience/sello3.png" alt="">
                                <span class="ciudad">Segovia</span>
                                <div class="dial-circulo">
                                    <input type="text" value="<?php echo $votos[2]->votos ?>" class="dial dial2">
                                    <label for="" class="label-votos">votos</label>
                                </div>
                            </div>
                            <div>
                                <button class="votar hbutton" <?php if (isset($_SESSION['votacion'])) {
                                                                    echo 'hidden';
                                                                } ?>>VOTAR</button>
                                <img src="assets/img/experience/sello3.png" alt="">
                                <span class="ciudad">Zaragoza</span>
                                <div class="dial-circulo">
                                    <input type="text" value="<?php echo $votos[3]->votos ?>" class="dial dial3">
                                    <label for="" class="label-votos">votos</label>
                                </div>
                            </div>
                            <div>
                                <button class="votar hbutton" <?php if (isset($_SESSION['votacion'])) {
                                                                    echo 'hidden';
                                                                } ?>>VOTAR</button>
                                <img src="assets/img/experience/sello3.png" alt="">
                                <span class="ciudad">Valladolid</span>
                                <div class="dial-circulo">
                                    <input type="text" value="<?php echo $votos[4]->votos ?>" class="dial dial4">
                                    <label for="" class="label-votos">votos</label>
                                </div>
                            </div>
                            <div>
                                <button class="votar hbutton" <?php if (isset($_SESSION['votacion'])) {
                                                                    echo 'hidden';
                                                                } ?>>VOTAR</button>
                                <img src="assets/img/experience/sello3.png" alt="">
                                <span class="ciudad">Valencia</span>
                                <div class="dial-circulo">
                                    <input type="text" value="<?php echo $votos[5]->votos ?>" class="dial dial5">
                                    <label for="" class="label-votos">votos</label>
                                </div>
                            </div>
                            <div>
                                <button class="votar hbutton" <?php if (isset($_SESSION['votacion'])) {
                                                                    echo 'hidden';
                                                                } ?>>VOTAR</button>
                                <img src="assets/img/experience/sello3.png" alt="">
                                <span class="ciudad">Alicante</span>
                                <div class="dial-circulo">
                                    <input type="text" value="<?php echo $votos[6]->votos ?>" class="dial dial6">
                                    <label for="" class="label-votos">votos</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="b3" style="display: none;">
                        <p class="marron titulo separar titulo-votaciones">DESTILANDO LO NUESTRO</p>
                        <div class="puntuacionTotal">
                            <p class="marron titulo separar puntuacion" id="puntuacion">4,9</p>
                            <div class="estrellitas">
                                <div>
                                    <img src="assets/img/experience/star.png" alt="">
                                    <img src="assets/img/experience/star.png" alt="">
                                    <img src="assets/img/experience/star.png" alt="">
                                    <img src="assets/img/experience/star.png" alt="">
                                    <img src="assets/img/experience/star.png" alt="">
                                </div>
                                <span>157 opiniones en Google</span>
                            </div>
                            <span id="valoracion">Excelente</span>
                        </div>
                        <div class="comentarios">
                            <?php include 'services/ajax/get-comentarios.php' ?>
                            <?php foreach ($comentarios as $c) { ?>
                                <div class="coment">
                                    <p class="nombre"><b><?php echo $c->nombre . ' ' . $c->apellidos ?></b></p>
                                    <div style="display: none;">
                                        <img src="assets/img/experience/starC.png" alt="">
                                        <img src="assets/img/experience/starC.png" alt="">
                                        <img src="assets/img/experience/starC.png" alt="">
                                        <img src="assets/img/experience/starC.png" alt="">
                                        <img src="assets/img/experience/starC.png" alt="">
                                    </div>
                                    <p class="opinion"><?php echo $c->comentario ?></p>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="b4">

                    </div>


                </div>

                <!-- 	FIN CONTENIDO ESPECÍFICO 	-->

            </div>

            <script>
                document.getElementById('vid').play();
                var modal = document.getElementById('modal');
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        document.getElementById('vid').pause();
                        document.getElementById('vid').currentTime = 0;
                    }
                }
                document.getElementById('vid').pause();
                document.getElementById('vid').currentTime = 0;
            </script>
            <?php include 'modules/common/footer.php'; ?>
            <?php include 'modules/common/scripts-interior.php'; ?>
            <?php include 'modules/common/scripts-productos.php'; ?>
            <script type="text/javascript">
                nombrevideo = 'whisky/dyc-15';
            </script>
            <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <script src="js/libs/jquery.knob.min.js"></script>
            <style>
                @media (max-width:768px) {

                    #vid {
                        width: 90%;
                    }

                    .label-votos {
                        padding-top: 45px;
                        font: bold 8px Arial;
                    }

                    .b3 {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                    }


                    .puntuacionTotal {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .votaciones {
                        padding-block: 4rem;
                        display: flex;
                        flex-wrap: wrap;
                        /* gap: 30px; */

                        max-width: 80%;
                        margin-inline: auto;
                        justify-content: center;
                    }

                    .votaciones div {
                        width: auto;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        padding-bottom: 10px;
                        width: 50%;
                    }

                    .votar {
                        cursor: pointer;
                        border: none;
                        background: transparent;
                        background-color: #e8d5b7;
                        color: #4c442f;
                        font-size: 10px;
                        border-radius: 25px;
                        padding-left: 20px;
                        padding-right: 20px;
                        padding-top: 5px;
                        padding-bottom: 5px;
                        font-weight: bold;
                        font-family: 'open-sans-extrabold';
                    }

                    .votaciones img {
                        padding-top: 10px;
                        width: 60%;
                    }

                    .ciudad {
                        color: #debd9c;
                        font-family: 'BrittanySignature';
                        font-size: 25px;
                    }

                    .texto-marron {
                        font-size: 15px;
                    }

                    .separar {
                        padding-top: 20px;
                    }

                    .compra {
                        padding: 1rem;
                        font-size: 10px;
                    }

                    .flex-container img,
                    .texto-cabecera {
                        width: 80%;
                        margin-top: 10%
                    }

                    .flex-container img,
                    .texto-video-cabecera {
                        margin-right: 10%;
                    }

                    .titulo-votaciones {
                        margin-bottom: 0px;
                        font-size: 35px !important;
                    }

                    .marron.titulo {
                        font-size: 20px;
                    }


                    .texto {
                        font-size: 10px;
                    }

                    iframe {
                        width: 300px !important;
                    }

                    .flex-container {
                        margin-left: 0px !important;
                        display: flex;
                        align-items: center;
                        flex-wrap: nowrap;
                        flex-direction: column;
                        justify-content: flex-start;

                        position: relative;
                        height: 100%;
                        min-width: 158px;
                        max-width: 360px;
                        width: 50%;
                        margin-left: 20%;
                        text-shadow: 1px 1px 1px rgb(0 0 0 / 50%);
                        top: -55px;
                    }

                    .ver-video-boton {
                        margin-top: 45px;
                        display: flex;
                        flex-direction: row;
                        justify-content: center;
                    }

                    .texto-cabecera {
                        display: none;
                    }

                    .ver-video {
                        border: none;
                        background: transparent;
                        background-color: white;
                        color: #7a6d67;
                        /* padding: 1rem; */
                        font-size: 10px;
                        border-radius: 25px;
                        padding-left: 10px;
                        padding-right: 10px;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        font-weight: 900;
                    }

                    .video-button {
                        border: none;
                        background: transparent;
                        background-color: white;
                        color: #7a6d67;
                        /* padding: 1rem; */
                        font-size: 10px;
                        border-radius: 25px;
                        padding-left: 10px;
                        padding-right: 10px;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        font-weight: 900;
                    }

                }



                .flexx {
                    margin-left: 6%;
                }

                .marron.titulo.separar.puntuacion {
                    font-size: 40px;
                    margin-top: 0px;
                    margin-bottom: 0px;
                }

                .estrellitas div {
                    padding-top: 13%;
                }

                .opinion {
                    padding-bottom: 5%;
                    margin-left: 1%;
                }

                .nombre {
                    padding-top: 5%;
                }

                .coment {
                    background-color: white;
                }

                .botones-cv-b1 {
                    display: flex;
                    flex-direction: row;
                    justify-content: space-around;
                    width: 100%;
                    margin-top: 20px;
                }

                @media (min-width: 1023px) and (max-width: 1439px) {
                    #pagecontent {
                        height: 580px !important;
                    }

                    .flexx {
                        margin-left: 3%;
                    }

                    .flex-container {

                        height: auto;
                        max-width: 330px;
                        top: -90px;
                    }

                    .ver-video-boton {
                        display: flex;
                        flex-direction: row;
                        justify-content: center;
                        margin-top: 85px;
                    }

                    .flex-container>div {
                        text-align: center;
                    }

                    .ver-video {
                        border: none;
                        background: transparent;
                        background-color: white;
                        color: #7a6d67;
                        /* padding: 1rem; */
                        font-size: 15px;
                        border-radius: 25px;
                        padding-left: 30px;
                        padding-right: 30px;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        font-weight: 900;
                    }

                    .beige2 {
                        margin-top: 15px !important;
                    }

                    .titulo {
                        font-size: 30px;
                    }

                    .texto {
                        font-size: 17px;
                    }

                    .compra {
                        padding: 1rem;
                        font-size: 15px;
                    }

                    .marron.titulo.separar {
                        padding-top: 40px;
                    }

                    .votaciones img {
                        padding-top: 10px;
                    }

                    .ciudad {
                        color: #debd9c;
                        font-family: 'BrittanySignature';
                        font-size: 45px;

                    }

                    .votaciones {
                        padding-block: 4rem;
                        display: flex;
                        flex-wrap: wrap;
                        gap: 70px;
                        max-width: 80%;
                        margin-inline: auto;
                        justify-content: center;
                    }

                    .votaciones div {
                        width: auto;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                    }

                    .label-votos {
                        padding-top: 72px;
                    }

                    .votar {
                        cursor: pointer;
                        border: none;
                        background: transparent;
                        background-color: #e8d5b7;
                        color: #4c442f;
                        font-size: 20px;
                        border-radius: 25px;
                        padding-left: 35px;
                        padding-right: 35px;
                        padding-top: 5px;
                        padding-bottom: 5px;
                        font-weight: bold;
                        font-family: 'open-sans-extrabold';
                    }

                    .videos>video {
                        width: 267px;
                        aspect-ratio: auto 267 / 150;
                        height: 150px;
                    }

                    #vid {
                        height: 70vh;
                        width: auto;
                    }

                    .botones-video {
                        margin-top: 20px;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;
                    }

                    .video-button {
                        cursor: pointer;
                        border: none;
                        background: transparent;
                        background-color: white;
                        color: #7a6d67;
                        /* padding: 1rem; */
                        font-size: 20px;
                        border-radius: 25px;
                        padding-left: 20px;
                        padding-right: 20px;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        font-weight: 900;
                    }

                    .video-button.bb1 {
                        background-color: #c8a986;
                        color: white;
                    }

                    .b3 {
                        /* display: flex;
                    flex-direction: column;
                    align-items: center; */
                    }

                    .marron.titulo.separar.titulo-votaciones {
                        margin-bottom: 0px;
                    }
                }

                @media (min-width: 1280px) {
                    #vid {
                        height: auto;
                        width: 100%;
                    }

                    .contenido {
                        width: 55%;
                    }
                }
            </style>
            <script>
                $(function() {
                    if ($(window).width() <= 768) {
                        $(".dial").knob({
                            'width': 75,
                            'height': 75,
                            'min': 0,
                            'max': <?php echo $total[0]->total ?>,
                            'readOnly': true,
                            'fgColor': '#e8d5b7',
                            'bgColor': '#debd9c7a',
                            'thickness': '.1'

                        });
                    } else if ($(window).width() <= 1366) {
                        $(".dial").knob({
                            'width': 125,
                            'height': 125,
                            'min': 0,
                            'max': <?php echo $total[0]->total ?>,
                            'readOnly': true,
                            'fgColor': '#e8d5b7',
                            'bgColor': '#debd9c7a',
                            'thickness': '.1'

                        });
                    } else {
                        $(".dial").knob({
                            'min': 0,
                            'max': <?php echo $total[0]->total ?>,
                            'readOnly': true,
                            'fgColor': '#e8d5b7',
                            'bgColor': '#debd9c7a',
                            'thickness': '.1'

                        });
                    }
                });
            </script>
            <script>
                function getParams() {
                    var url_string = window.location.href;
                    var params = url_string.indexOf('?');
                    var url = new URL(url_string);
                    var c = url.searchParams.get("c");
                    if (params == -1) {
                        $('.ver-video').click()
                    }
                    console.log('PARÁMETROS:', params);
                }
                $(document).ready(function() {
                    // getParams();
                    var myTimeout = setTimeout(function() {
                        getParams()
                    }, 500);
                    $('.bcompra').click(function(e) {
                        e.preventDefault();
                        modal.style.display = "none";
                        document.getElementById('vid').pause();
                        document.getElementById('vid').currentTime = 0;
                        $("html, body").animate({
                            scrollTop: $('.compra').offset().top - 100
                        })
                        //$(window).scrollTop($('.compra').offset().top - 100);
                    });
                    $('.bvota').click(function(e) {
                        e.preventDefault();
                        modal.style.display = "none";
                        document.getElementById('vid').pause();
                        document.getElementById('vid').currentTime = 0;
                        $("html, body").animate({
                            scrollTop: $('.texto-marron').offset().top - 100
                        })
                        //$(window).scrollTop($('.texto-marron').offset().top - 100);
                    });
                    $('.ver-video').click(function(e) {
                        e.preventDefault();
                        $('.modalsito').css('display', '');
                        document.getElementById('vid').play();
                    });
                    compra();
                    $('.compra').click(function(e) {
                        e.preventDefault();
                        $(this).hide();
                        $('#iframe_wrapper').show();
                    });
                    // $.ajax({
                    //     type: "post",
                    //     url: "services/ajax/getVotos.php",
                    //     data: {},
                    //     dataType: "json",
                    //     success: function(response) {
                    //         let ciudades = $('.ciudad');
                    //         let totalvotos = 0;
                    //         for (let i = 0; i < response.length; i++) {
                    //             ciudades.eq(i).next('.circulo').children().eq(0).val( parseInt(response[i].votos) );
                    //             totalvotos = totalvotos + response[i].votos;
                    //         }
                    //         console.log(totalvotos, 'total votos');
                    //     }
                    // });
                    $('.container_img.f1').removeClass('link');
                    $('.votar').click(function(e) {
                        e.preventDefault();
                        console.log($(this).siblings().eq(1).text());
                        let ciudad = $(this).siblings().eq(1).text();
                        let cant_votos = $(this).siblings().eq(2).find('input').val();
                        $(this).siblings().eq(2).find('input').val(parseInt(cant_votos) + 1);
                        $('#voto_por').text($(this).siblings().eq(1).text());
                        $('#activador').trigger('click');
                        $.ajax({
                            type: "post",
                            url: "services/ajax/toSession.php",
                            data: {
                                ciudad: ciudad
                            },
                            dataType: "text",
                            success: function(response) {
                                $('.votar').hide();
                                // setTimeout(function(){}, 10000000);
                                //window.location.href = 'https://takeaway-dev.es/DYC/brand-experience.php';
                            }
                        });
                    });
                    let loadEdad = function() {
                        for (let i = 18; i <= 110; i++) {
                            $('#medad').append('<option value="' + i + '">' + i + '</option>');
                        }
                    }
                    loadEdad();

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
<?php }
}else{
    header('Location:https://www.dyc.es/destilandolonuestro');
}
?>