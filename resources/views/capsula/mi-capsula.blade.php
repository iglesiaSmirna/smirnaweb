@extends('layout.master')

@section('contenido')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    @if(isset($isWeb)&&$isWeb)
        <div class="row azul" id="header-section">
            <div class="col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-5" style="padding-top:12px; padding-bottom: 12px;">
                {!! Html::image('images/logo_blanco.png', 'iglesia smirna', array('class' => 'img-responsive')) !!}
            </div>

            <div class="col-md-2 col-md-offset-5 col-sm-3 col-sm-offset-3 col-xs-5 col-xs-offset-2" style="text-align: right; padding-top:40px; padding-bottom: 10px">
                <a href="{!! url('/'.(isset($eng)&&$eng)?'?lang=en':'?lang=es') !!}">
                    <div class="parrafo"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> {!! (isset($eng)&&$eng) ? 'HOME' : 'INICIO' !!}</div>
                </a>
            </div>
        </div>
    @endif
    {{-- TITULO E IMAGEN--}}
    <div class="row">
        <br>
        <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12 blanco supertitulo" style="text-align: center;">
            {!! (isset($eng)&&$eng) ? $articulo->tittle : $articulo->titulo !!}
        </div>
        <div class="col-md-5 col-sm-5 col-xs-8 col-xs-offset-2">
            {!! Html::image('images/devocional/main.jpg', 'Alcanzar', array('class' => 'img-responsive')) !!}
        </div>
    </div>
    {{-- CONTENIDO--}}
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 parrafo blanco">
            <hr>
            @if(isset($eng)&&$eng)
                Contenido en inglés...
            @else
                Contenido en español...
            @endif
        </div>
    </div>

    {{-- DESCARGA Y COMPARTIR--}}
    @if(isset($isWeb)&&$isWeb)
        <div class="row" id="compartir">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <hr>
                <div class="col-md-2 col-sm-4 col-xs-12" style="text-align: right;">
                    <br>
                    <div class="fb-share-button" data-href="http://www.iglesiasmirna.org" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.iglesiasmirna.org%2F&amp;src=sdkpreparse"> {!! (isset($eng)&&$eng) ? 'Share' : 'Compartir' !!} <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12" style="text-align: right;">
                    <br>
                    <a href="https://twitter.com/share" class="twitter-share-button"> Tweet <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i> </a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
                <div class="col-md-4 col-md-offset-4 col-sm-4 col-xs-12" style="text-align: right;"  id="compartir-pdf">
                    <br>
                    <a href="{!! url('download/'.$seccion.'/'.$yy.'/'.$vista.'?lang='.(isset($eng)&&$eng ? 'en' : 'es')) !!}">
                        {!! (isset($eng)&&$eng) ? 'Download ('.$articulo->descargas.')' : 'Descargar ('.$articulo->descargas.')' !!}
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </div>
    @endif

    {{-- LISTA DE OTROS ARTICULOS--}}
    @if(isset($isWeb)&&$isWeb)
        @if(isset($query)&&count($query)>1)
            <hr>
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <table class="table table-striped" id="tabla-articulos">
                    <thead>
                    <tr>
                        <th>
                            <h3 class="subtitulo blanco">{!! (isset($eng)&&$eng) ? 'Others articles' : 'Otros articulos' !!}</h3>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($query as $item)
                        @if($item->vista!=$vista)
                            <tr>
                                <td class="parrafo">
                                    <a href="{!! url('/'.$seccion.'/'.$item->yy.'/'.$item->vista) !!}?lang={!! (isset($eng)&&$eng) ? 'en' : 'es' !!}">
                                        {!! (isset($eng)&&$eng) ? $item->tittle : $item->titulo !!}
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @endif

    {{-- BARRA COLORES --}}
    @if(isset($isWeb)&&$isWeb)
        <div class="row" style="background-color: white;">
            <br><br>
            <div class="col-md-4 col-sm-4 col-xs-4 arco-iris celeste"></div>
            <div class="col-md-2 col-sm-2 col-xs-2 arco-iris naranja"></div>
            <div class="col-md-2 col-sm-2 col-xs-2 arco-iris verde"></div>
            <div class="col-md-2 col-sm-2 col-xs-2 arco-iris amarillo"></div>
            <div class="col-md-2 col-sm-2 col-xs-2 arco-iris rosado"></div>
        </div>
    @endif


@stop

@section('js')
    <script>
        $(document).ready(function(){

            $('#tabla-articulos').DataTable({
                ordering: false,
                info: false,
                stateSave: true,
                "language": {
                    "decimal": "",
                    "emptyTable": "{!! (isset($eng)&&$eng) ? 'No data available in table' : 'No hay información disponible' !!}",
                    "info": "{!! (isset($eng)&&$eng) ? 'Showing _START_ to _END_ of _TOTAL_' : 'Mostrando _START_ de _END_ de _TOTAL_' !!}",
                    "infoEmpty": "{!! (isset($eng)&&$eng) ? 'Showing 0 to 0 of 0 entries' : 'Mostrando 0 de 0 de 0 artículos' !!}",
                    "infoFiltered": "{!! (isset($eng)&&$eng) ? '(filtered from _MAX_ total entries)' : '(filtrado de _MAX_ registros totales)' !!}",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "{!! (isset($eng)&&$eng) ? 'Show _MENU_' : 'Mostrar _MENU_' !!}",
                    "loadingRecords": "{!! (isset($eng)&&$eng) ? 'Loading...' : 'Cargando...' !!}",
                    "processing": "{!! (isset($eng)&&$eng) ? 'Processing...' : 'Procesando...' !!}",
                    "search": "{!! (isset($eng)&&$eng) ? 'Search' : 'Buscar' !!}:",
                    "zeroRecords": "{!! (isset($eng)&&$eng) ? 'No matching records found' : 'No se encontraron coincidencias' !!}",
                    "paginate": {
                        "first": "{!! (isset($eng)&&$eng) ? 'First' : 'Primero  ' !!}",
                        "last": "{!! (isset($eng)&&$eng) ? 'Last' : 'Último' !!}",
                        "next": "{!! (isset($eng)&&$eng) ? 'Next' : 'Siguiente' !!}",
                        "previous": "{!! (isset($eng)&&$eng) ? 'Previous' : 'Anterior' !!}"
                    }
                }
            });

        });

        $('a').click(function(){
            var mihref = $(this).attr('href');
            $('html, body').animate({ scrollTop : $( mihref ).offset().top }, 'slow');
        });
    </script>
@stop