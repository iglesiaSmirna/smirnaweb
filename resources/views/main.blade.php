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
                <p>{!!($eng) ? 'Vision' : 'Visi&oacute;n'!!}</p>
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
                    Dirección en Inglés
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
                <div class="parrafo">Visión en inglés...</div>
                <br>
            @else
                <div class="subtitulo">Nuestra visi&oacute;n</div>
                <div class="parrafo">Alcanzar y desarrollar personas por medio del mensaje del evangelio para ensanchar el Reino de Dios.</div>
                <br>
            @endif
        </div>
        <div class="col-md-5 col-sm-5 col-xs-10 col-xs-offset-1">
            <br>
            @if(isset($eng)&&$eng)
                <div class="subtitulo">Mision</div>
                <div class="parrafo">Misión en inglés...</div>
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
                            {!! Html::image('images/eng_carrs01.png', 'Alcanzar') !!}
                        @else
                            {!! Html::image('images/carrousel01.png', 'Alcanzar') !!}
                        @endif

                    </div>
                    <div class="item">
                        @if(isset($eng)&&$eng)
                            {!! Html::image('images/eng_carrs02.png', 'Consolidar') !!}
                        @else
                            {!! Html::image('images/carrousel02.png', 'Consolidar') !!}
                        @endif

                    </div>
                    <div class="item">
                        @if(isset($eng)&&$eng)
                            {!! Html::image('images/eng_carrs03.png', 'Discipular') !!}
                        @else
                            {!! Html::image('images/carrousel03.png', 'Discipular') !!}
                        @endif

                    </div>
                    <div class="item">
                        @if(isset($eng)&&$eng)
                            {!! Html::image('images/eng_carrs04.png', 'Desarrollar') !!}
                        @else
                            {!! Html::image('images/carrousel04.png', 'Desarrollar') !!}
                        @endif

                    </div>
                    <div class="item">
                        @if(isset($eng)&&$eng)
                            {!! Html::image('images/eng_carrs05.png', 'Enviar') !!}
                        @else
                            {!! Html::image('images/carrousel05.png', 'Enviar') !!}
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
                    <i class="fa fa-book" aria-hidden="true"></i> Titulo inglés
                </div>
                <div class="parrafo">
                    Versículo en inglés
                    <br>
                    Texto en inglés
                </div>
            @else
                <div class="titulo">
                    <i class="fa fa-book" aria-hidden="true"></i> Vers&iacute;culo del Mes
                </div>
                <div class="parrafo">
                    <br>
                    Si todo su cuerpo est&aacute; iluminado, y no hay en &eacute;l ninguna parte oscura, entonces la vida de ustedes alumbrar&aacute; en todos lados, como cuando una l&aacute;mpara los ilumina con su luz.
                    <br>
                    San Lucas 11.36 TLA
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
                        <div class="subtitulo">Título Inglés</div>
                        <div class="parrafo">Hora Inglés</div>
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
                        <div class="subtitulo">Título Inglés</div>
                        <div class="parrafo">Hora Inglés</div>
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
                        <div class="subtitulo">Título Inglés</div>
                        <div class="parrafo">Hora Inglés</div>
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
                        <div class="subtitulo">Título Inglés</div>
                        <div class="parrafo">Hora Inglés</div>
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
                        <div class="subtitulo">Título Inglés</div>
                        <div class="parrafo">Hora Inglés</div>
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
                        <div class="subtitulo">Título Inglés</div>
                        <div class="parrafo">Hora Inglés</div>
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
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row">
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    {!! Html::image('images/devocional/main.jpg', 'Devocional', array('class' => 'img-responsive')) !!}
                    <br>
                    @if((isset($eng)&&$eng))
                        <div class="parrafo" style="color:white;">Título Inglés</div>
                        <div class="diminuto" style="color:white; text-align: justify;">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                            <br><br>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.
                        </div>
                    @else
                        <div class="parrafo" style="color:white;">Devocional</div>
                        <div class="diminuto" style="color:white; text-align: justify;">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                            <br><br>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.
                        </div>
                    @endif
                    <br>
                    {!! Html::link(url('/devocional/2016/mi-devocional?lang='.((isset($eng)&&$eng)?'en':'es')), 'VER MAS', array('class'=>'btn btn-success btn-sm col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6')) !!}
                    <br><br>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row">
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    {!! Html::image('images/devocional/main.jpg', 'Devocional', array('class' => 'img-responsive')) !!}
                    <br>
                    @if((isset($eng)&&$eng))
                        <div class="parrafo" style="color:white;">Título Inglés</div>
                        <div class="diminuto" style="color:white; text-align: justify;">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                            <br><br>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.
                        </div>
                    @else
                        <div class="parrafo" style="color:white;">Estudios</div>
                        <div class="diminuto" style="color:white; text-align: justify;">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                            <br><br>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.
                        </div>
                    @endif
                    <br>
                    {!! Html::link(url('/estudio/2016/mi-estudio?lang='.((isset($eng)&&$eng)?'en':'es')), 'VER MAS', array('class'=>'btn btn-success btn-sm col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6')) !!}
                    <br><br>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row">
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    {!! Html::image('images/devocional/main.jpg', 'Devocional', array('class' => 'img-responsive')) !!}
                    <br>
                    @if((isset($eng)&&$eng))
                        <div class="parrafo" style="color:white;">Título Inglés</div>
                        <div class="diminuto" style="color:white; text-align: justify;">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                            <br><br>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.
                        </div>
                    @else
                        <div class="parrafo" style="color:white;">C&aacute;psulas</div>
                        <div class="diminuto" style="color:white; text-align: justify;">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                            <br><br>
                            Dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.
                        </div>
                    @endif
                    <br>
                    {!! Html::link(url('/capsula/2016/mi-capsula?lang='.((isset($eng)&&$eng)?'en':'es')), 'VER MAS', array('class'=>'btn btn-success btn-sm col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6')) !!}
                    <br><br>
                </div>
            </div>
        </div>
    </div>

    {{-- FRASES DE LIDERAZGO --}}
    <div class="row" style="background-color: #c4fff3">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
            <hr>
            <div class="titulo">FRASE DE LIDERAZGO</div>
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
                            <div class="subtitulo">El liderazgo es una decisión que usted toma, no un lugar donde usted se sienta.</div>
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
                            <div class="subtitulo">La verdadera medida de liderazgo es la Influencia</div>
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
    <div class="row" style="background-color: #c4fff3;">
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
                <a href="http://twitter.com" target="_blank">
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
                <a href="http://www.facebook.com" target="_blank">
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
                <a href="http://instagram.com" target="_blank">
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
                <a href="">
                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
                        {!! Html::image('images/icon_oracion.png', 'oracion', array('class' => 'img-responsive', 'style'=>'max-height: 35px; right: 0; position: absolute;')) !!}
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9" style="padding-top: 12px;">
                        Oraci&oacute;n
                    </div>
                </a>
            </div>
            <br>
        </div>
        <div class="col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <br><p style="color: #4377DD; font-weight: bold">{!! (isset($eng)&&$eng) ? 'CONTACT' : 'CONTACTO' !!}</p><br>
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

    </div>
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
    </script>
@stop