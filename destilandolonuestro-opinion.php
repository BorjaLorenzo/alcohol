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
    $titulo = 'DYC Brand Experience | Whisky DYC';
    $metaDescription = 'Brand Experience: Una ruta soprendente para redescubrir tu ciudad.';
    $metaKeywords = 'dyc brand experience, whisky brand experience, dyc experience, whisky dyc brand experience';
    include 'modules/common/header.php';
    ?>
    <link rel="stylesheet" type="text/css" href="css/libs/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/libs/slick/slick-theme.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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

        .mt10 {
            margin-top: 10px;
        }

        .bg {
            background-image: none !important;
        }

        .texto-cabecera {
            font-family: 'trade-gothic-bold-condensed';
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .form {
            /* margin-top: 30px; */
            padding-top: 30px;
            /* padding-bottom: 30px; */
            width: 35%;
            display: flex;
            flex-direction: column;
        }

        .form2 {
            width: 70%;
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-align: left !important;
        }

        .form p {
            font-family: 'trade-gothic-regular';
        }

        .form div {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .form label {
            align-self: flex-start;
            font-size: 17px;
        }

        .form input {
            width: 100%;
            margin-top: 10px;
            height: 35px;
        }

        .form select {
            width: 100%;
            height: 40px;
        }

        input {
            border: solid 1px #dac291;
            padding-left: 10px;
        }

        select {
            border: solid 1px #dac291;
        }

        .b1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        textarea {
            resize: none;
            border: solid 1px #dac291;
            width: 100%;
            padding: 10px;
        }

        .checkbox {
            align-self: flex-start;
        }

        .check {
            flex-direction: row;
            margin-top: 20px
        }

        .compra {
            border: none;
            background: transparent;
            background-color: #c8a986;
            color: white;
            padding: 1rem;
            font-size: 30px;
            border-radius: 50px;
            font-family: 'open-sans-extrabold';
            cursor: pointer;
        }

        .mensaje-final {
            color: #dac291;
            font-family: 'trade-gothic-bold-condensed';
            font-size: 30px;
        }
    </style>
    <style>
        @media (max-width:768px) {
            .form {
                width: 100%;
                display: flex;
                align-items: center;
            }

            .form div {
                width: 90%;
            }

            .flex-container {
                margin-left: 0% !important;
                display: flex;
                flex-direction: column;
                align-items: center;
                flex-wrap: nowrap;
            }

            .flex-container img {
                width: 50%;
            }

            .texto-video-cabecera {
                display: flex;
                text-align: center;
                padding-left: 5%;
                padding-right: 5%;
            }
        }

        @media (min-width:1440px) {
            .compra {
                letter-spacing: 5px;
                font-size: 22px;
            }

            #pagecontent {
                height: 925px !important;
            }

            .container_img.horizontal {
                display: flex !important;
                flex-direction: column;
                align-items: center;
            }

            .flex-container {
                height: 70% !important;
                width: 80% !important;
                align-items: center;
                max-width: 1400px !important;
            }

            .flex-container img {
                /* height: 50%; */
                width: 30%;
            }

            .texto-cabecera {
                font-size: 40px !important;
                text-align: center;
                margin-top: 20px !important;
            }
        }

        @media (min-width:1920px) {}
    </style>
    <div class="fondo_corp"></div>
    <div class="container mainContainer">
        <?php include 'modules/common/menu.php'; ?>

        <!-- 	CONTENIDO ESPECÍFICO 	-->

        <div id="pagecontent" class="relative interiorweb anim carruselEstructura buy15dyc p-pageContent">
            <div class="container containerTotal buy15dyc">
                <div id="c0" class="containerCarrusel i1" data-index='1'>
                    <div class="compra-buttons container_img f1" data-index="1" data-src="assets/img/experience/sorteo.jpg">

                        <div class="flex-container flexx">
                            <img src="assets/img/experience/SELLO_2.png" alt="">
                            <div class="texto-video-cabecera">
                                <div>
                                    <p class="texto-cabecera">Déjanos tus datos y te mantendremos informado sobre todas las novedades de Destilando lo Nuestro y de las próximas ediciones de la experiencia. ¿Quién sabe? Quizás la próxima ruta sea en tu ciudad . . .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- debajo cabecera -->
        <div class="interiorContainer">
            <div class="b1" style="background-color: #ececec;">
                <form action="" method="post">
                    <div class="form">
                        <div>
                            <label>Nombre </label>
                            <input type="text" name="nombre" id="nombre">
                        </div>
                        <div>
                            <p hidden class="error-nombre" style="color: red;">El campo Nombre no puede estar vacio</p>
                        </div>
                        <div>
                            <label>Apellidos </label>
                            <input type="text" name="apellidos" id="apellidos">
                        </div>
                        <div>
                            <p hidden class="error-apellidos" style="color: red;">El campo Apellidos no puede estar vacio</p>
                        </div>
                        <div>
                            <label>e-mail </label>
                            <input type="text" name="email" id="email">
                        </div>
                        <div>
                            <p hidden class="error-email" style="color: red;">El campo e-mail no puede estar vacio</p>
                        </div>
                        <div>
                            <label>Fecha de nacimiento </label>
                            <input type="date" name="fecha" id="fecha" onkeydown="return false;">
                        </div>
                        <div>
                            <p hidden class="error-fecha" style="color: red;">Introduce una fecha válida</p>
                            <p hidden class="error-fecha-edad" style="color: red;">Tienes que ser mayor de edad</p>
                        </div>
                        <div>
                            <label>País </label>
                            <select name="pais" id="pais" onkeydown="return false;" class="mt10">

                            </select>
                        </div>
                        <div>
                            <label>Código Postal</label>
                            <input type="text" name="cp" id="cp">
                        </div>
                        <div>
                            <p hidden class="error-cp" style="color: red;">El campo Código Postal no puede estar vacio</p>
                        </div>
                        <div>
                            <label>Comentario</label>
                            <!-- <input type="text" name="comentario" id="comentario"> -->
                            <textarea name="comentario" id="comentario" cols="15" rows="5" class="mt10"></textarea>
                        </div>
                        <div>
                            <p hidden class="error-comentario" style="color: red;">Deja un comentario para conocer tu experiencia</p>
                        </div>
                    </div>
                    <div class="form2">
                        <div class="check">
                            <input type="checkbox" name="politica" id="politica" class="checkbox">
                            <label> Consiento el tratamiento de mis datos de carácter personal en los términos que figuran en la política de privacidad.</label>
                        </div>
                        <div>
                            <p hidden class="error-politica" style="color: red;">Por favor acepta el tratamiento de datos para continuar</p>
                        </div>
                        <div class="check">
                            <input type="checkbox" name="comunicaciones" id="comunicaciones" class="checkbox">
                            <label> Consiento el envío de comunicaciones comerciales sobre los productos y servicios del Grupo Beam Suntory así como el tratamiento automatizado para poder optimizar y personalizar dichas ofertas.</label>
                        </div>
                    </div>
                    <div>
                        <button class="compra">ENVIAR</button>
                        <p class="mensaje-final" id="mensajee" hidden>¡Gracias! Seguiremos informando . . .</p>
                    </div>
                </form>
            </div>
        </div>

        <!-- 	FIN CONTENIDO ESPECÍFICO 	-->
        <div id="modal_votacion" class="modal">
            <form action="" style="display: flex;
    flex-direction: column;
    align-items: center;">
                <p id="votando">Destilando lo Nuestro <br><span id="voto_por" style="    display: flex;
    flex-direction: column;
    align-items: center;"></span></p>
                <p style="font-family: 'trade-gothic-regular';" id="textomodal">¡Gracias por tu asistencia a la destilería!</p>
            </form>
            <a href="#" rel="modal:close" hidden>Close</a>
        </div>
        <a href="#modal_votacion" rel="modal:open" id="activador"></a>
    </div>
    <?php include 'modules/common/footer.php'; ?>
    <?php include 'modules/common/scripts-interior.php'; ?>
    <?php include 'modules/common/scripts-productos.php'; ?>
    <script type="text/javascript">
        nombrevideo = 'whisky/dyc-15';
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <style>
        @media (max-width:768px) {
            .compra-buttons {
                display: flex !important;
                flex-direction: column;
                align-items: center;
            }

            .compra {
                font-size: 15px;
            }

            .b1 {
                margin-top: 0px;
            }
        }

        .flexx {
            margin-left: 0px;
        }
    </style>
    <script>
        jQuery(document).ready(function($) {
            compra();
            $('.container_img.f1').removeClass('link')
            $('.compra').click(function(e) {
                e.preventDefault();
                let interruptor = false;
                let nombre = $('#nombre').val();
                if (nombre == '') {
                    $('.error-nombre').show();
                    interruptor = true;
                } else {
                    $('.error-nombre').hide();
                }
                let apellidos = $('#apellidos').val();
                if (apellidos == '') {
                    $('.error-apellidos').show();
                    interruptor = true;
                } else {
                    $('.error-apellidos').hide();
                }
                let email = $('#email').val();
                if (email == '') {
                    $('.error-email').show();
                    interruptor = true;
                } else {
                    $('.error-email').hide();
                }
                let fecha = $('#fecha').val();
                if (fecha == '') {
                    $('.error-fecha').show();
                    interruptor = true;
                } else {
                    if (calcularEdad($('#fecha').val()) < 18) {
                        $('.error-fecha').hide();
                        $('.error-fecha-edad').show();
                        interruptor = true;
                    } else {
                        $('.error-fecha').hide();
                        $('.error-fecha-edad').hide();
                    }

                }

                let pais = $('#pais option:selected').val();
                let cp = $('#cp').val();
                if (cp == '') {
                    $('.error-cp').show();
                    interruptor = true;
                } else {
                    $('.error-cp').hide();
                }
                let comentario = $('#comentario').val();
                if (comentario == '') {
                    $('.error-comentario').show();
                    interruptor = true;
                } else {
                    $('.error-comentario').hide();
                }
                let tratamiento = $('#politica').prop('checked');
                if (tratamiento == false) {
                    $('.error-politica').show();
                    interruptor = true;
                } else {
                    $('.error-politica').hide();
                }
                let envio = $('#comunicaciones').prop('checked');
                console.log(interruptor);
                if (!interruptor) {
                    $.ajax({
                        type: "post",
                        url: "services/ajax/check-email.php",
                        data: {
                            email: email
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response[0].encontrado != 0) {
                                //mensaje de email ya registrado
                                $('#textomodal').text('Ese e-mail ya esta registrado.');
                                $('#activador').trigger('click');
                            } else {
                                $.ajax({
                                    type: "post",
                                    url: "services/ajax/insert-registro.php",
                                    data: {
                                        nombre: nombre,
                                        apellidos: apellidos,
                                        email: email,
                                        fecha: fecha,
                                        pais: pais,
                                        cp: cp,
                                        comentario: comentario,
                                        politica: tratamiento,
                                        comunicaciones: envio
                                    },
                                    dataType: "text",
                                    success: function(response) {
                                        console.log(response);
                                        $('.compra').hide();
                                        $('#textomodal').text('¡Gracias por tu asistencia a la destilería!');
                                        $('#activador').trigger('click');
                                        setTimeout(function() {
                                            window.location.href = 'destilandolonuestro';
                                        }, 3000);
                                    }
                                });
                            }

                        }
                    });
                }
            });
            $.getJSON("paises.json", function(json) {
                var paises = json;
                for (let i = 0; i < paises.countries.length; i++) {
                    // console.log(paises);
                    $('#pais').append('<option value="' + paises.countries[i].name_es + '">' + paises.countries[i].name_es + '</option>');
                }
            });
        });

        function compra() {
            $('.compra').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });

        }

        function calcularEdad(fecha_nacimiento) {
            var hoy = new Date();
            var cumpleanos = new Date(fecha_nacimiento);
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();
            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }
            return edad;
        }
    </script>
</body>

</html>