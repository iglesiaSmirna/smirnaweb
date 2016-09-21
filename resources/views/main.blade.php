@extends('layout.master')

@section('contenido')
    {{-- BARRA DE IDIOMAS --}}
    <div id="change-language">
        &nbsp;
        <a href="{!!  url(($eng) ? '/?lang=es': '/?lang=en') !!}">{!! ($eng) ? 'Spanish' : '&nbsp;&nbsp;Ingl&eacute;s&nbsp;&nbsp;' !!}</a>
        &nbsp;|&nbsp; <i class="fa fa-globe fa-lg" aria-hidden="true"></i> &nbsp;
    </div>

    <div class="row" id="web-header">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            {!! Html::image('images/logo_blanco.png', 'iglesia smirna', array('class' => 'img-responsive')) !!}
        </div>
    </div>

    {{-- ENCABEZADO --}}
    <div class="row" id="menu-header">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <a href="#index-vision">
                {!! Html::image('images/new_icon01.png', 'vision', array('class' => 'img-responsive')) !!}
                <p>{!!($eng) ? 'View' : 'Visi&oacute;n'!!}</p>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <a href="#index-articulos">
                {!! Html::image('images/new_icon02.png', 'articulos', array('class' => 'img-responsive')) !!}
                <p>{!!($eng) ? 'Articles' : 'Art&iacute;culos'!!}</p>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <a href="#contacto">
                {!! Html::image('images/new_icon03.png', 'contacto', array('class' => 'img-responsive')) !!}
                <p>{!!($eng) ? 'Contact' : 'Contacto'!!}</p>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <a href="#">
                {!! Html::image('images/new_icon04.png', 'sesion', array('class' => 'img-responsive')) !!}
                <p>{!! ($eng) ? 'Log in' : 'Iniciar Sesi&oacute;n' !!}</p>
            </a>
        </div>
    </div>

    {{-- VISION Y MISION --}}
    <div class="row" style="background: white;">
        <br>
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <div class="titulo">Asamblea de Dios Smirna</div>
            <div class="subtitulo">
                @if(isset($eng)&&$eng)
                    4a. Av. 1-02 Zona 1. Chimaltenango, Guatemala.
                @else
                    4a. Av. 1-02 Zona 1. Chimaltenango, Guatemala.
                @endif
            </div>
            <br>
            <hr>
        </div>
        <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1" id="index-vision">
            <br>
            @if(isset($eng)&&$eng)
                <div class="subtitulo">Our vision</div>
                <div class="parrafo">Reach and develop people through the gospel message to expand God´s Kingdom.</div>
                <br><br>
            @else
                <div class="subtitulo">Nuestra visi&oacute;n</div>
                <div class="parrafo">Alcanzar y desarrollar personas por medio del mensaje del evangelio para ensanchar el Reino de Dios.</div>
                <br><br>
            @endif
        </div>
        <div class="col-md-5 col-sm-5 col-xs-10 col-xs-offset-1">
            <br>
            @if(isset($eng)&&$eng)
                <div class="subtitulo">Mission</div>
                <div class="parrafo">Our mission is described in a five-step process:</div>
                <br><br>
            @else
                <div class="subtitulo">Misi&oacute;n</div>
                <div class="parrafo">Nuestra misi&oacuten se describe en un proceso de cinco pasos:</div>
                <br><br>
            @endif
        </div>
    </div>
    {{-- CARRUSEL MISION --}}
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
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
                        @if(isset($eng)&&$eng)
                            {!! Html::image('images/carrousel01.jpg', 'Alcanzar') !!}
                        @else
                            {!! Html::image('images/carrusel01.jpg', 'Alcanzar') !!}
                        @endif

                    </div>
                    <div class="item">
                        @if(isset($eng)&&$eng)
                            {!! Html::image('images/carrousel02.jpg', 'Consolidar') !!}
                        @else
                            {!! Html::image('images/carrusel02.jpg', 'Consolidar') !!}
                        @endif

                    </div>
                    <div class="item">
                        @if(isset($eng)&&$eng)
                            {!! Html::image('images/carrousel03.jpg', 'Discipular') !!}
                        @else
                            {!! Html::image('images/carrusel03.jpg', 'Discipular') !!}
                        @endif

                    </div>
                    <div class="item">
                        @if(isset($eng)&&$eng)
                            {!! Html::image('images/carrousel04.jpg', 'Desarrollar') !!}
                        @else
                            {!! Html::image('images/carrusel04.jpg', 'Desarrollar') !!}
                        @endif

                    </div>
                    <div class="item">
                        @if(isset($eng)&&$eng)
                            {!! Html::image('images/carrousel05.jpg', 'Enviar') !!}
                        @else
                            {!! Html::image('images/carrusel05.jpg', 'Enviar') !!}
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- VERSICULO DEL MES --}}
    <div class="row" style="background: white;">
        <br>
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
            <br>
            @if(isset($eng)&&$eng)
                <div class="titulo">
                    <i class="fa fa-book" aria-hidden="true"></i> {!! isset($eng)&&$eng ? 'Verse of the week' : 'Vers&iacute;culo del Mes' !!}

                </div>
                <div class="subtitulo">
                    <br>
                    But the Lord is faithful, who shall stablish you, and keep you from evil.
                    <br>
                    2 Thessalonians 3.3 KJV
                </div>
            @else
                <div class="titulo">
                    <i class="fa fa-book" aria-hidden="true"></i> Vers&iacute;culo del Mes
                </div>
                <div class="subtitulo">
                    <br>
                    Pero el Señor Jesucristo les dará una firme confianza y los protegerá del mal, porque él siempre cumple lo que dice.
                    <br>
                    II Tesalonisences 3.3 TLA
                </div>
            @endif
        </div>
    </div>

    {{-- HORARIO DE SERVICIOS --}}
    <div class="row" style="background-color: white;">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
            <br><hr><br>
            <div class="titulo">
                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                {!! (isset($eng)&&$eng) ? 'Service Times' : 'Horario de Servicios' !!}
            </div>
        </div>
    </div>

    <div class="row" style="background-color: white">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <br><br>
                <div class="col-md-2 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-3">
                    {!! Html::image('images/icon_horario1.png', 'Escuela Dominical', array('class' => 'img-responsive')) !!}
                </div>
                <div class="col-md-8 col-sm-7 col-xs-9">
                    @if(isset($eng)&&$eng)
                        <div class="subtitulo">Sunday school</div>
                        <div class="parrafo">Sunday 9:00 am</div>
                    @else
                        <div class="subtitulo">Escuela Dominical</div>
                        <div class="parrafo">Domingo 9:00 am</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <br><br>
                <div class="col-md-2 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3">
                    {!! Html::image('images/icon_horario5.png', 'Oracion', array('class' => 'img-responsive')) !!}
                </div>
                <div class="col-md-8 col-sm-7 col-xs-9">
                    @if(isset($eng)&&$eng)
                        <div class="subtitulo">Prayer Service</div>
                        <div class="parrafo">Tuesday 7:30 pm</div>
                    @else
                        <div class="subtitulo">Servicio de Oraci&oacute;n</div>
                        <div class="parrafo">Martes 7:30 pm</div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="row" style="background-color: white">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <br><br>
                <div class="col-md-2 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-3">
                    {!! Html::image('images/icon_horario3.png', 'concilio misionero femenil', array('class' => 'img-responsive')) !!}
                </div>
                <div class="col-md-8 col-sm-7 col-xs-9">
                    @if(isset($eng)&&$eng)
                        <div class="subtitulo">Women's Council</div>
                        <div class="parrafo">Wednesday 3:00 pm</div>
                    @else
                        <div class="subtitulo">Concilio Femenil</div>
                        <div class="parrafo">Mi&eacute;rcoles 3:00 pm</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <br><br>
                <div class="col-md-2 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3">
                    {!! Html::image('images/icon_horario2.png', 'Fraternidad de Varones', array('class' => 'img-responsive')) !!}
                </div>
                <div class="col-md-8 col-sm-7 col-xs-9">
                    @if(isset($eng)&&$eng)
                        <div class="subtitulo">Fraternity Boys</div>
                        <div class="parrafo">Wednesday 7:30 pm</div>
                    @else
                        <div class="subtitulo">Fraternidad de Varones</div>
                        <div class="parrafo">Mi&eacute;rcoles 7:30 pm</div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="row" style="background-color: white">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <br><br>
                <div class="col-md-2 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-3">
                    {!! Html::image('images/icon_horario4.png', 'Sociedad de Jovenes', array('class' => 'img-responsive')) !!}
                </div>
                <div class="col-md-8 col-sm-7 col-xs-9">
                    @if(isset($eng)&&$eng)
                        <div class="subtitulo">Youth Society</div>
                        <div class="parrafo">Saturday 7:30 pm</div>
                    @else
                        <div class="subtitulo">Sociedad de J&oacute;venes</div>
                        <div class="parrafo">S&aacute;bado 7:30 pm</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <br><br>
                <div class="col-md-2 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3">
                    {!! Html::image('images/icon_horario6.png', 'Servicio Regular', array('class' => 'img-responsive')) !!}
                </div>
                <div class="col-md-8 col-sm-7 col-xs-9">
                    @if(isset($eng)&&$eng)
                        <div class="subtitulo">Regular service</div>
                        <div class="parrafo">Sunday 4:30 pm</div>
                    @else
                        <div class="subtitulo">Servicio Regular</div>
                        <div class="parrafo">Domingo 4:30 pm</div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="row" style="background-color: white;"><br><br></div>

    {{-- ARTICULOS --}}
    <div class="row" style="background-color: #DADB25" id="index-articulos">
        <div class="col-md-10 col-md-offset-1 col-md-10 col-xs-offset-1 col-xs-10 col-xs-offset-1">
            <p class="titulo" style="color: #003366; padding-top: 10px;">{!! (isset($eng)&&$eng) ? 'ARTICLES' : 'ARTICULOS'  !!} </p>
        </div>
    </div>
    <div class="row" style="color:white;">

        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12 col-xs-offset-0">
            <div class="row">
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="parrafo" style="color:white;">{!! isset($eng)&&$eng ? 'Studies' : 'Estudios' !!}</div>
                    {!! Html::image('images/estudio/fidelidad-servicios.jpg', 'Estudios', array('class' => 'img-responsive')) !!}
                    @if((isset($eng)&&$eng))
                        <div class="diminuto" style="color:white; text-align: justify;">
                            <br>
                            FAITHFUL SERVICE
                            <br><br>
                            Caleb, as a Biblical figure, presented a strong character. Moses as an example of faithful leader, Caleb was a faithful follower, in fact, his most outstanding quality is that he followed God "dutifully" in everything.
                        </div>
                    @else
                        <div class="diminuto" style="color:white; text-align: justify;">
                            <br>
                            FIDELIDAD EN EL SERVICIO
                            <br>
                            Pocos personajes bíblicos muestran un carácter mas firme que Caleb. Si Moisés fue el ejemplo de líder fiel, Caleb fue el seguidor fiel, en efecto, su cualidad más sobresaliente es que siguió a Dios “cumplidamente” esto es, en todo.
                        </div>
                    @endif
                    <br>
                    {!! Html::link(url('/estudio/2016/fidelidad-servicio?lang='.((isset($eng)&&$eng)?'en':'es')), isset($eng)&&$eng ? 'SEE MORE' : 'VER MAS', array('class'=>'btn btn-success btn-sm col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6')) !!}
                    <br><br>
                </div>
            </div>
        </div>

    </div>

    {{-- FRASES DE LIDERAZGO --}}
    <div class="row blanco">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
            <hr>
            <div class="titulo">{!! isset($eng)&&$eng ? 'QUOTATION OF LEADERSHIP' : 'FRASE DE LIDERAZGO' !!}</div>
            <div id="carousel-frases" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-frases" data-slide-to="0" class="active" style="border-color: #003366;"></li>
                    <li data-target="#carousel-frases" data-slide-to="1" style="border-color: #003366;"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active" style="text-align: center;">
                        <br>
                        <div class="div-frase">
                        @if(isset($eng)&&$eng)
                            <div class="subtitulo">Leadership is a decision you make, not a place where you sit.</div>
                            <div class="parrafo">John C. Maxwell</div>
                        @else
                            <div class="subtitulo">El liderazgo es una decisión que usted toma, no un lugar donde usted se sienta.</div>
                            <div class="parrafo">John C. Maxwell</div>
                        @endif
                        </div>
                    </div>
                    <div class="item" style="text-align: center;">
                        <br>
                        <div class="div-frase">
                        @if(isset($eng)&&$eng)
                            <div class="subtitulo">The true measure of leadership is influence.</div>
                            <div class="parrafo">John C. Maxwell</div>
                        @else
                            <div class="subtitulo">La verdadera medida de liderazgo es la Influencia</div>
                            <div class="parrafo">John C. Maxwell</div>
                        @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- BARRA COLORES --}}
    <div class="row" style="background-color: white;">
        <br><br>
        <div class="col-md-4 col-sm-4 col-xs-4 arco-iris celeste"></div>
        <div class="col-md-2 col-sm-2 col-xs-2 arco-iris naranja"></div>
        <div class="col-md-2 col-sm-2 col-xs-2 arco-iris verde"></div>
        <div class="col-md-2 col-sm-2 col-xs-2 arco-iris amarillo"></div>
        <div class="col-md-2 col-sm-2 col-xs-2 arco-iris rosado"></div>
    </div>

    {{-- FOOTER --}}
    <div class="row redes-footer" id="contacto">
        <div class="col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <br><p style="color: #4377DD; font-weight: bold">{!! (isset($eng)&&$eng) ? 'SOCIAL' : 'REDES SOCIALES' !!}</p><br>
            <div class="row redes-footer">
                <a href="http://twitter.com/SmirnaGuatemala" target="_blank">
                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
                        {!! Html::image('images/icon_twitter.png', 'twitter', array('class' => 'img-responsive', 'style'=>'max-height: 35px; right: 0; position: absolute;')) !!}
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9" style="padding-top: 12px;">
                        Twitter
                    </div>
                </a>
            </div>
            <hr>
            <div class="row redes-footer">
                <a href="http://www.facebook.com/Smirna.Guatemala" target="_blank">
                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
                        {!! Html::image('images/icon_facebook.png', 'facebook', array('class' => 'img-responsive', 'style'=>'max-height: 35px; right: 0; position: absolute;')) !!}
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9" style="padding-top: 12px;">
                        Facebook
                    </div>
                </a>
            </div>
            <hr>
            <div class="row redes-footer">
                <a href="http://instagram.com/SmirnaGuatemala" target="_blank">
                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
                        {!! Html::image('images/icon_instagram.png', 'instagram', array('class' => 'img-responsive', 'style'=>'max-height: 35px; right: 0; position: absolute;')) !!}
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9" style="padding-top: 12px;">
                        Instagram
                    </div>
                </a>
            </div>
            <hr>
            <div class="row redes-footer">
                <a href="#contacto" class="link-contacto">
                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
                        {!! Html::image('images/icon_oracion.png', 'oracion', array('class' => 'img-responsive', 'style'=>'max-height: 35px; right: 0; position: absolute;')) !!}
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9" style="padding-top: 12px;">
                        {!! isset($eng)&&$eng ? 'Prayer' : 'Oraci&oacute;n' !!}
                    </div>
                </a>
            </div>
            <br>
        </div>
        <div class="col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <br><p style="color: #4377DD; font-weight: bold">{!! (isset($eng)&&$eng) ? 'CONTACTO' : 'CONTACTO' !!}</p><br>
            <div>
                <p>
                    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp;info@iglesiasmirna.org
                    <br><br>
                    <i class="fa fa-phone-square" aria-hidden="true"></i> &nbsp;&nbsp;+502 7839 2282
                    <br><br>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;4a. Av. 1-02 Zona 1.
                    <br>Chimaltenango, Guatemala.
                </p>
            </div>
            <br>
        </div>
        <div class="col-md-3 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 redes-footer">
            <br><p style="color: #4377DD; font-weight: bold">{!! (isset($eng)&&$eng) ? 'MENU' : 'MEN&Uacute; PRINCIPAL' !!}</p><br>
            <div class="row">
                <div class="col-md-12 col-sm-3 col-xs-12" style="margin-bottom: 25px;">
                    <a href="#index-vision">
                        {!!($eng) ? 'VISION' : 'VISI&Oacute;N'!!}
                     </a>
                </div>
                <div class="col-md-12 col-sm-3 col-xs-12" style="margin-bottom: 25px;">
                    <a href="#index-articulos">
                        {!!($eng) ? 'ARTICLES' : 'ART&Iacute;CULOS'!!}
                     </a>
                </div>
                <div class="col-md-12 col-sm-6 col-xs-12" style="margin-bottom: 25px;">
                    <a href="">
                        {!! ($eng) ? 'LOG IN' : 'INICIAR SESI&Oacute;N' !!}
                    </a>
                </div>
            </div>
         </div>
    </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="mimodal">
        <div class="modal-dialog modal-lg">
            <form id="form_mail">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title parrafo">
                            <i class="fa fa-pencil-square" aria-hidden="true"></i> Peticiones de Oraci&oacute;n
                        </h4>
                    </div>

                    <div class="modal-body">
                        <div class="body-temp"></div>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><h5><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</h5></button>
                        <button type="submit" class="btn btn-primary"><h5><i class="fa fa-envelope" aria-hidden="true"></i> Enviar</h5></button>
                    </div>
                </div><!-- /.modal-content -->
                <input type="hidden" id="token" name="_token" value="{!! csrf_token() !!}">
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });

        $('a').click(function(){
            var mihref = $(this).attr('href');
            $('html, body').animate({ scrollTop : $( mihref ).offset().top }, 'slow');
        });

        navegador = "{!! $navegador !!}";
        $(document).ready(function(){
            if(window.Touch) {
                if (navegador=='SAFARI')
                {
                    $('#change-language').hide();
                }
            }
        });

        $(document).on('click','.link-contacto',function(){
            $("#form_mail").trigger('reset');
            $('.body-cont').show();
            $('.body-temp').hide();
            btn = boton_peticion();
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
                url:'set/peticion',
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
                        $('.body-temp').html('<br><br><i class="fa fa-exclamation-circle fa-4x"></i><h3>Hubo un problema al enviar el mensaje. '+response);
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
    </script>
@stop