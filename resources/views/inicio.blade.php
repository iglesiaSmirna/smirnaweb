<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="language" content="en"/>

    <link rel="shortcut icon" href="images/myicon.ico" type="image/x-icon">
    <link rel="icon" href="images/myicon.ico" type="image/x-icon">

    {!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('assets/bootstrap/css/bootstrap.css') !!}
    {!! Html::style('assets/css/style.css') !!}

    {!! Html::script('assets/js/jquery.js') !!}
    {!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}

</head>
<body>
<div class="container">
    <div class="row" id="web-header">
        <div class="col-md-6 col-md-offset-3">
            <img src="images/logo_blanco.png" alt="iglesia smirna" class="img-responsive">
        </div>
    </div>

    <div class="row" id="menu-header">
        <div class="col-md-3">
            <a href="#index-vision">
                <img src="images/new_icon01.png" alt="vision" class="img-responsive">
                @if($eng)
                    <br><p>Vision</p>
                @else
                    <br><p>Visi&oacute;n</p>
                @endif
            </a>

        </div>
        <div class="col-md-3">
            <a href="../news">
                <img src="images/new_icon02.png" alt="noticias" class="img-responsive">
                @if($eng)
                    <br><p>News</p>
                @else
                    <br><p>Noticias</p>
                @endif
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <img src="images/new_icon03.png" alt="devocionales" class="img-responsive">
                @if($eng)
                    <br><p>Devotionals</p>
                @else
                    <br><p>Devocionales</p>
                @endif
            </a>
        </div>
        <div class="col-md-3">
            <a class="link-contacto">
                <img src="images/new_icon04.png" alt="oracion" class="img-responsive">
                @if($eng)
                    <br><p>Prayer</p>
                @else
                    <br><p>Oraci&oacute;n</p>
                @endif
            </a>
        </div>
    </div>
    <br><br>
    <div class="row" style="background: white;">
        <br><br>
        <div class="col-md-10 col-md-offset-1 text-default">
            <div class="titulo">Asamblea de Dios Smirna</div>
            <div class="subtitulo">1a. Calle 4a Avenida esquina zona 1 Chimaltenango, Guatemala</div>
            <br>
            <hr>
        </div>
        <div class="col-md-5 col-md-offset-1" id="index-vision">
            <div class="subtitulo">Nuestra visi&oacute;n</div>
            <div class="parrafo">Alcanzar y desarrollar personas por medio del mensaje del evangelio para ensanchar el Reino de Dios.</div>
        </div>
        <div class="col-md-5">
            <div class="subtitulo">Misi&oacute;n</div>
            <div class="parrafo">Nuestra misi&oacuten se describe en un proceso de cinco pasos:</div>
            <br><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/carrousel01.png" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="images/carrousel02.png" alt="Flower">
                    </div>
                    <div class="item">
                        <img src="images/carrousel03.png" alt="dafad">
                    </div>
                    <div class="item">
                        <img src="images/carrousel04.png" alt="dafad">
                    </div>
                    <div class="item">
                        <img src="images/carrousel05.png" alt="dafad">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row" style="background: white;">
        <div class="col-md-10 col-md-offset-1 text-default">
            <br><br>
            <div class="titulo">
                <i class="fa fa-book" aria-hidden="true"></i> Vers&iacute;culo del Mes
            </div>
            <div class="parrafo">
                Si todo su cuerpo est&aacute; iluminado, y no hay en &eacute;l ninguna parte oscura, entonces la vida de ustedes alumbrar&aacute; en todos lados, como cuando una l&aacute;mpara los ilumina con su luz.
                <br>
                San Lucas 11.36 TLA
            </div>
            <br><br>
        </div>

    </div>
    <!-- HORARIO DE SERVICIOS -->
    <div class="row" style="background: white;">
        <hr><br>
        <div class="col-md-offset-1 titulo">
            <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Horario de Servicios
        </div>
    </div>

    <div class="row" style="background: white;">
        <br><br>
        <div class="col-md-1 col-md-offset-2">
            <img src="images/icon_horario1.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-3">
            <div class="subtitulo">Escuela Dominical</div>
            <div class="parrafo">Domingo 9:00 am</div>
        </div>

        <div class="col-md-1 col-md-offset-1">
            <img src="images/icon_horario5.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-3">
            <div class="subtitulo">Servicio de Oraci&oacute;n</div>
            <div class="parrafo">Martes 7:30 pm</div>
        </div>
    </div>

    <div class="row" style="background: white;">
        <br><br>
        <div class="col-md-1 col-md-offset-2">
            <img src="images/icon_horario3.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-3">
            <div class="subtitulo">Concilio Femenil</div>
            <div class="parrafo">Mi&eacute;rcoles 3:00 pm</div>
        </div>

        <div class="col-md-1 col-md-offset-1">
            <img src="images/icon_horario2.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-3">
            <div class="subtitulo">Fraternidad de Varones</div>
            <div class="parrafo">Mi&eacute;rcoles 7:30 pm</div>
        </div>
    </div>

    <div class="row" style="background: white;">
        <br><br>
        <div class="col-md-1 col-md-offset-2">
            <img src="images/icon_horario4.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-3">
            <div class="subtitulo">Sociedad de J&oacute;venes</div>
            <div class="parrafo">S&aacute;bado 7:30 pm</div>
        </div>

        <div class="col-md-1 col-md-offset-1">
            <img src="images/icon_horario6.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-3">
            <div class="subtitulo">Servicio Regular</div>
            <div class="parrafo">Domingo 4:30 pm</div>
            <br><br><br>
        </div>

    </div>

    <div class="row azul">
        <div class="col-md-12">
            <div class="parrafo azul"><br>Noticias<br></div><hr><br><br>
        </div>
    </div>
    <div class="row azul">
        <div class="col-md-6 col-md-offset-1 azul parrafo">
            <div class="subtitulo azul">Siguiendo los pasos del Maestro</div>
            Un grupo hermoso, que siguió los pasos del maestro, los que dieron un salto de fe, los llamados y escogido los valientes en Cristo, quienes decidieron despojarse de ellos mismos, quienes están dispuestos a caminar la milla extra, y quienes anhelan servir en la tierra y en la eternidad a nuestro Dios.
            <br><br>
            <a href="news/#nw_1">Ver mas...</a>
        </div>
        <div class="col-md-4">
            <img src="images/news/20160410/bautizo05.jpg" alt="news-bautizo" class="img-responsive">
        </div>
    </div>
    <div class="row azul">
        <br><br><br>
        <div class="col-md-4 col-md-offset-1">
            <img src="images/news/20160424/01.png" alt="news-congreso" class="img-responsive">
        </div>
        <div class="col-md-6 azul parrafo">
            <div class="subtitulo azul">Lo que no viste del Congreso</div>
            Muchas veces disfrutamos de un tiempo especial con Dios a través de un congreso, un concierto o un servicio regular en nuestra iglesia, es com&uacute;n pasar por alto a todas las personas que se esfuerzan por desarrollar estas actividades y es comprensible ya que mucho de ese trabajo se desarrolla previo a cada evento.
            <br><br>
            <a href="news/#nw_2">Ver mas...</a>
        </div>
    </div>

    <!-- BARRA COLORES -->
    <div class="row">
        <br><br><br>
        <div class="col-md-4 arco-iris celeste"></div>
        <div class="col-md-2 arco-iris naranja"></div>
        <div class="col-md-2 arco-iris verde"></div>
        <div class="col-md-2 arco-iris amarillo"></div>
        <div class="col-md-2 arco-iris rosado"></div>
    </div>
    <!-- FOOTER -->
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <br><br>
            <div class="diminuto" style="color: white;">
                &reg; Asamblea de Dios Smirna. 2016<br>
                Todos los Derechos Reservados
            </div>
            <br><br>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <br><br>
            <div class="row">
                <div class="col-md-2 col-md-offset-6 diminuto">
                    <a href="#index-vision" style="color: white;">Visi&oacute;n</a>
                </div>
                <div class="col-md-2 diminuto">
                    <a href="news" style="color: white;">Noticias</a>
                </div>
                <div class="col-md-2 diminuto">
                    <a href="#" style="color: white;">Devocionales</a>
                </div>
            </div>
            <br><br><br>
            <div class="row" id="icon-footer">
                <div class="col-md-2 col-md-offset-4">
                    <a href="#" class="smedia">
                        <img src="images/icon_redes1.png" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="smedia">
                        <img src="images/icon_redes2.png" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="smedia">
                        <img src="images/icon_redes3.png" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="link-contacto">
                        <img src="images/icon_redes4.png" alt="" class="img-responsive">
                    </a>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div> <!-- container -->
</body>
<!-- MODAL -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="mimodal">
    <div class="modal-dialog modal-lg">
        <form id="form_mail">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title parrafo">
                    </h4>
                </div>

                <div class="modal-body">
                    <div class="body-cont">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="parrafo" style="text-align: justify;">Nuestra confianza est&aacute; en Dios y creemos que &Eacute;l responder&aacute; a nuestras peticiones. Estamos interesados en ti y en tus necesidades. Env&iacute;a tu petici&oacute;n y junto a un equipo de oraci&oacute;n estaremos intercediendo por ella.</div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-group">
                                    <label for="emai">Correo</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Cuenta de correo electr&oacute;nico" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="telefono">Tel&eacute;fono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese n&uacute;mero telef&oacute;nico">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <label for="peticion">Petici&oacute;n</label>
                                    <textarea class="form-control" rows="5" id="peticion" name="peticion" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body-temp">
                    </div>
                </div>

                <div class="modal-footer">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</html>

<script type="text/javascript">
    var estado=0;

    $(document).ready(function(){
        var x = $( window ).width();
        var y = $( window ).height();

        $('.carousel').carousel();
    });

    $(window).resize(function(){
        var x = $( window ).width();
        var y = $( window ).height();
    });

    $('a').click(function(){
        var mihref = $(this).attr('href');
        $('html, body').animate({ scrollTop : $( mihref ).offset().top }, 'slow');
    });

    $(document).on('click','.smedia',function(){
        $('.body-cont').hide();
        $('.modal-title').html('');
        $('.body-temp').show().html('<img src="images/social_icons.png" alt="" class="img-responsive">');
        $('.modal-footer').html('');
        $('#mimodal').modal('show');
    });

    $(document).on('click','.link-contacto',function(){
        $("#form_mail").trigger('reset');
        $('.body-temp').hide();
        $('.body-cont').show();
        btn = boton_peticion();
        $('.modal-title').html('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Peticiones de Oraci&oacute;n');
        $('.modal-footer').html(btn);
        $('#mimodal').modal({
            show: true,
            backdrop: false
        });
    });

    $('#form_mail').submit(function(e){
        e.preventDefault();

        $.ajax({
            type:'POST',
            url:'../php/contacto.php',
            data: $("#form_mail").serialize(),
            beforeSend: function() {
                $('.body-cont').hide();
                $('.body-temp').show().html('<br><br><i class="fa fa-spinner fa-spin fa-4x"></i><br><h3>Estamos procesando su solicitud...</h3><br>');
            }, error: function() {
                $('.body-temp').html('<br><br><i class="fa fa-exclamation-circle fa-4x"></i><h3>Error de conexi&oacute;n. No se pudo enviar el mensaje.');
                $('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal"><h5><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</h5></button>');
            }, success: function(response) {
                if (response=='ok') {
                    $('.body-temp').html('<br><br><i class="fa fa-check-circle fa-4x"></i><h3>El mensaje fue enviado con &eacute;xito');
                    $('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal"><h5><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</h5></button>');
                } else {
                    $('.body-temp').html('<br><br><i class="fa fa-exclamation-circle fa-4x"></i><h3>Hubo un problema al enviar el mensaje.');
                    $('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal"><h5><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</h5></button>');
                }
            }
        }); // Fin del ajax
    });

    function boton_peticion()
    {
        html = '';

        html = html + '<button type="button" class="btn btn-default" data-dismiss="modal">';
        html = html + '<h5><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</h5></button>';
        html = html + '<button type="submit" class="btn btn-primary">'
        html = html + '<h5><i class="fa fa-envelope" aria-hidden="true"></i> Enviar</h5></button>'
        return html;
    }

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-59961295-2', 'auto');
    ga('send', 'pageview');

</script>