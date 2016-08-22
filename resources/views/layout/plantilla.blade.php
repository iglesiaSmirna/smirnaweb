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
                    <div class="parrafo"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> INICIO</div>
                </a>
            </div>
        </div>
    @endif
    {{-- TITULO E IMAGEN--}}
    <div class="row">
        <br>
        <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12 blanco supertitulo" style="text-align: center;">

            {!! (isset($eng)&&$eng) ? $tittle : $titulo  !!}
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12">
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
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                <br><br>
                Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.
                <br><br>
                Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede.
                <br><br>
                Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis
            @endif
        </div>
    </div>
    @if(isset($isWeb)&&$isWeb)
        <div class="row" id="compartir">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <hr>
                <div class="col-md-2 col-sm-4 col-xs-12" style="text-align: right;">
                    <br>
                    <div class="fb-share-button" data-href="http://www.iglesiasmirna.org" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.iglesiasmirna.org%2F&amp;src=sdkpreparse">Compartir <i class="fa fa-facebook-official" aria-hidden="true"></i></a></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12" style="text-align: right;">
                    <br>
                    <div class="fb-share-button" data-href="http://www.iglesiasmirna.org" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.iglesiasmirna.org%2F&amp;src=sdkpreparse">Compartir <i class="fa fa-twitter-square" aria-hidden="true"></i></a></div>
                </div>
                <div class="col-md-2 col-md-offset-6 col-sm-4 col-xs-12" style="text-align: right;"  id="compartir-pdf">
                    <br>
                    <a href="">
                        Descargar <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </div>
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

        });

        $('a').click(function(){
            var mihref = $(this).attr('href');
            $('html, body').animate({ scrollTop : $( mihref ).offset().top }, 'slow');
        });
    </script>
@stop