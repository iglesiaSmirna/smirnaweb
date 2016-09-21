@extends('layout.master')

@section('contenido')
    @if(isset($isWeb)&&$isWeb)
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    @endif
    @if(isset($isWeb)&&$isWeb)
        <div class="row azul" id="header-section">
            <div class="col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12" style="padding-top:12px; padding-bottom: 12px;">
                {!! Html::image('images/logo_blanco.png', 'iglesia smirna', array('class' => 'img-responsive')) !!}
            </div>

            <div class="col-md-2 col-md-offset-5 col-sm-3 col-sm-offset-3 col-xs-12" style="text-align: right; padding-top:40px; padding-bottom: 10px">
                <a href="{!! url('/')!!}{!! (isset($eng)&&$eng) ? '?lang=en' : '?lang=es' !!} ">
                    <div class="parrafo"> {!! (isset($eng)&&$eng) ? 'HOME' : 'INICIO' !!} <i class="fa fa-home" aria-hidden="true"></i></div>
                </a>
            </div>
        </div>
    @endif
    {{-- TITULO E IMAGEN--}}
    <div class="row">
        @if(isset($isWeb)&&$isWeb)
            <br>
        @endif
        <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-8 col-xs-offset-2">
            {!! Html::image('images/estudio/fidelidad-servicios.jpg', 'Fidelidad', array('class' => 'img-responsive')) !!}
        </div>
        <div class="col-md-5 col-md-offset-0 col-sm-5 col-sm-offset-0 col-xs-10 col-xs-offset-1 blanco {!! (isset($isWeb)&&$isWeb) ? 'supertitulo' : 'titulo' !!}" style="text-align: center;">
            {!! (isset($eng)&&$eng) ? $articulo->tittle : $articulo->titulo !!}
        </div>
    </div>
    {{-- CONTENIDO--}}
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0 {!! (isset($isWeb)&&$isWeb) ? 'parrafo' : 'diminuto' !!} blanco" style="text-align: justify   ">
            <hr>
            @if(isset($eng)&&$eng)
                Caleb, as a Biblical figure, presented a strong  character. Moses as an example of faithful leader, Caleb was a faithful follower, in fact, his most outstanding quality is that he followed God "dutifully" in everything.  Of the twelve spies who entered Canaan, Caleb and  Joshua were the only ones who gave a positive report. Even though he saw the same things as the others, he looked with the eyes of faith, rather than the circumstances that were presented.
                <br><br>
                I. LET US BE FAITHFUL. Joshua 14; 6-9
                <br><br>
                A. Caleb's faithfulness (6-9)
                <br>
                Caleb was a man who showed great loyalty in his obedience to God. He was a man who had dutifully followed the Lord (Joshua 14 : 8, 9:14) .
                <br>
                His faithfulness and obedience not only allowed him to leave the desert, but also assured him an inheritance in the land of Canaan.
                <br>
                What does have wholly followed the Lord God of Israel?
                <br>
                Because of the devotion that Caleb had to God, the other spies had no influence on him, and you can call that feature "record" only Caleb and Joshua stood firm and strong to the other ten spies; they did not bow to the views of others.
                <br>
                In addition Caleb said the "Truth". He did not try to hide or alter their convictions, but speak "as it was in his heart" (verse 7) further Caleb did not want to boast his devotion to God, on the contrary, was an example of "humility".
                <br>
                Caleb had "courage" to stand firm on what was right, he knew that God's plan would succeed, and was dedicated to follow.
                <br>
                Why is fidelity an important aspect of our Christian life?
                <br>
                Today many believers feel pressured to compromise their faithfulness to God. We must constantly resist the temptation to conform to the world's values .
                <br>
                When a believer commits its biblical principles, they can no longer stand against evil. Caleb stood firm and did not compromise what he knew was the truth and God's plan for Israel.
                <br><br>
                B. The Promised Reward.
                <br>
                The report of the ten spies produced fear in the people. But because of the faithfulness of Caleb, Moses promised a portion of the new land. Now Caleb was ready to receive his reward. Joshua reminded the promise that Moses had made.
                <br>
                The land he had explored was going to belong to him and his children. So now he appeared to receive his reward.
                <br>
                What reward should expect the believer to be faithful to God?.
                <br>
                Many believers would argue that the "Joy is that thing that one person receives by serving God, and that is reward enough. However, most believers would agree that the ultimate reward is to be with God in his kingdom (or glory) forever, hallelujah amen. The scriptures show us that we receive reward (Matthew 5:12, 1 Corinthians 3:14, 2 Corinthians 5:10)
                <br>
                The Bible does not explain exactly what will be the reward of the believer, some believe that this reward consisted of huge mansions with golden streets, others think that these things are only a shadow of what we will experience in heaven.
                <br>
                Caleb did not allow the circumstances around him influence his purpose to serve God, actually God reward him for his loyalty.
                <br>
                Being faithful to God transcends the current circumstances. Whatever the reward we receive, each one of us should remain faithful to Him, for the love we profess, then each will receive his reward of praise to God (1 Corinthians 4:5)
                <br><br>
                II . Seek worthy goals (Joshua 14: 10-15)
                <br><br>
                A. The strength of Caleb (verse 10-15)
                <br>
                To 45 years out of Cader-barmea, where Israel had refused to enter the promised land. One of the blessings that Caleb enjoyed was that years have not weakened him, he was as strong as before (Joshua 14.11).
                <br>
                In Joshua 14: 10-12 shows us the positive attitude of Caleb, even though he was 85 years old, he was not ready to retire. "I am still as strong today as the day Moses sent me out; I’m just as vigorous to go out to battle now as I was then."
                <br><br>
                III. Let God's Will. (Joshua 15: 13-19)
                <br><br>
                A. carrying out God's plan
                <br>
                To carry out the plan of God, Caleb had to kicked out Amar´s Children, those were Giants, Caleb excluded them from his inheritance. Its interesting to Know that even though God promises us victory, He still expects us to do our part to experience this great victory.
                <br>
                If God is almighty, Why does he need us to do his will? In fact God does not "need us" to do his will, rather, he chooses us to share in his plan. For this there are several reasons, first, sometimes God elects believers instrument (1 Corinthians 1: 26-29). "But God chose the foolish things of the world to shame the wise; God chose the weak things of the world to shame the strong.  God chose the lowly things of this world and the despised things—and the things that are not—to nullify the things that are, so that no one may boast before him". Second, God created man with the ability to choose.
                <br>
                When we decide to follow, God immediately begins to work on our behalf (Philippians 2: 12-13), God uses man as an instrument because it shows that his power is working in us (2 Corinthians 4.7-10 . 12: 9-10) .
                <br>
                God purposed using Caleb to defeat the people of Canaan, but he had to trust God to do it.
                <br><br>
                B. The Blessing of God
                <br>
                Caleb shared with his family his inheritance (verse 18-19), while Caleb faithfully served the Lord was not only blessed, but all his family, and Caleb could give material blessings to his family, that means that  we can give spiritual blessings to our family too.
                <br>
                Our family members need to see our faithfulness in prayer and the study of God's word, they need to see our faithfulness in worship attendance, they also need to see our christian values as parents and children.
                <br><br>
                AUTHOR: REVEREND SOLOMON ORTIZ (+)
            @else
                Pocos personajes bíblicos muestran un carácter mas firme que Caleb. Si Moisés fue el ejemplo de líder fiel, Caleb fue el seguidor fiel, en efecto, su cualidad más sobresaliente es que siguió a Dios "cumplidamente" esto es, en todo. De los doce espías que entraron a Canaán, él y Josué fueron los únicos que dieron un informe positivo. Aunque vio las mismas cosas que los otros, miro con los ojos de la fe, mas que con las circunstancias que se le presentaron.
                <br><br>
                I. SEAMOS FIELES Josué 14:6-9
                <br><br>
                A. La fidelidad de Caleb (6-9)
                <br>
                Caleb fue un hombre que demostró una gran fidelidad en su obediencia a Dios. Era un hombre que había seguido cumplidamente a Jehová su Dios (Josué 14:8, 9,14).
                <br>
                Su fidelidad y obediencia no solo le permitieron salir del desierto, sino que también le aseguraron una herencia en la tierra de Canaán.
                <br>
                ¿Qué significa haber seguido cumplidamente a Jehová Dios de Israel?
                <br>
                Debido a la devoción que Caleb le tenia a Dios, los demás espías no ejercieron influencia en el, a esa característica le podemos llamar "CONSTANCIA" solo Caleb y Josué se mantuvieron firmes y fuertes a los otros diez espías; no se inclinaron a las opiniones de los otros.
                <br>
                Además Caleb dijo la "Verdad". No trató de esconder o alterar sus convicciones, sino que hablo "como lo sentía en su corazón" (versículo 7) además Caleb no deseaba hacer alarde de su devoción a Dios, al contrario, fue un ejemplo de "Humildad".
                <br>
                Caleb tuvo "Valor" para mantenerse firme en lo que estaba bien, él sabia que el plan de Dios triunfaría, y estaba dedicado a seguirlo.
                <br>
                ¿Por qué es la fidelidad un aspecto importante de nuestra vida cristiana?
                <br>
                Hoy en día muchos creyentes se sienten presionados a comprometer su fidelidad a Dios. Hay que resistir constantemente a la tentación de conformarse a los valores del mundo.
                Cuando un creyente compromete sus principios bíblicos, ya no puede estar firme contra los males de la sociedad. Caleb se mantuvo firme y no comprometió lo que sabía que era la verdad y el plan de Dios para Israel.
                <br><br>
                B. La Recompensa Prometida.<br>
                El informe de los diez espías produjo temor en el pueblo. Pero debido a la fidelidad de Caleb, Moisés le prometió una porción de la nueva tierra. Ahora Caleb estaba listo para recibir su recompensa. Le hizo recordar a Josué la promesa que le había hecho Moisés.
                <br>
                La tierra que había explorado le iba a pertenecer a él y a sus hijos. De modo que ahora se presentó para recibir su recompensa.
                <br>
                ¿Qué recompensa debe esperar el creyente por ser fiel a Dios?.
                <br>
                Muchos creyentes podrían argumentar que el "Gozo" que uno recibe por servir a Dios es recompensa suficiente. Sin embargo, la mayoría de los creyentes estaría de acuerdo que la máxima recompensa es estar con Dios en su reino (o gloria) para siempre, aleluya amen. Las escrituras nos muestran que recibimos recompensa (Mateo 5:12, 1ª Corintios 3:14, 2ª Corintios 5:10)
                <br>
                La Biblia no explica exactamente cual será la recompensa del creyente, algunos creen que esa recompensa consistía en enormes mansiones con calles de oro, otros piensan que estas cosas son solo una sombra de lo que experimentaremos en el cielo.
                <br>
                Como Caleb no permitió que las circunstancias que le rodeaban influyeran en su propósito de servir a Dios, Él lo recompenso por su fidelidad.
                <br>
                Ser fiel a Dios trasciende las circunstancias actuales. Sea cual sea la recompensa que recibamos al regreso de Cristo, cada uno debe proponerse en su corazón mantenerse fiel a Él por el amor que le profesamos entonces cada uno recibirá su recompensa de alabanza a Dios (1ª Corintios 4:5)
                <br><br>
                II. Busquemos metas dignas (Josué 14:10-15)
                <br><br>
                A. La fuerza de Caleb (versículo 10-15)
                <br>
                Hacia 45 años que había salido de Cader-barmea, donde Israel se había negado a entrar en la tierra prometida. Una de las bendiciones que Caleb disfrutaba era que los años no lo habían debilitado y estaba tan fuerte como antes (Josué 14.11).
                <br>
                En Josué 14:10-12 se nos muestra la actitud positiva de Caleb aunque tenia 85 años, aun no estaba listo para jubilarse. "Cual era mi fuerza entonces, tal es ahora mi fuerza para la guerra y para salir y entrar.
                <br><br>
                III. Hagamos la Voluntad de Dios. (Josué 15:13-19)
                <br><br>
                A. Llevado a cabo el plan de Dios
                <br>
                Para llevar a cabo el plan de Dios, Caleb tuvo que echar a los hijos de Amar que eran Gigantes los expulsó de su heredad. Es interesante observar que auque Dios nos promete la victoria, todavía espera que hagamos nuestra parte para que experimentemos esta gran victoria.
                <br>
                Si Dios es todo poderoso ¿Por qué nos necesita a nosotros para hacer su voluntad? De hecho Dios no nos "necesita" para hacer su voluntad, más bien, nos elije para que participemos de su plan. Para esto existen varias razones, en primer lugar a veces, Dios elige a los creyentes, por instrumentos (1ª Corintios 1:26-29). En segundo lugar, Dios creo al hombre con la capacidad de elegir.
                <br>
                Cuando decidimos seguirlo a Él comienza inmediatamente a obrar a nuestro favor (Filipenses 2:12-13), Dios usa al hombre como un instrumento porque esto demuestra que su poder actúa en nosotros (2ª Corintios 4.7-10. 12:9-10).
                <br>
                Dios se propuso usar a Caleb para derrotar a los habitantes de Canaán, pero esté tuvo que confiar en Dios para hacerlo.
                <br><br>
                B. La Bendición de Dios
                <br>
                Caleb compartió con su familia su herencia (versículo 18-19), mientras Caleb servia fielmente al señor no solo el era bendecido, sino también toda su familia, y así como Caleb pudo darle bendiciones materiales su familia, también nosotros podemos darle bendiciones espirituales a la nuestra.
                <br>
                Los miembros de nuestra familia necesitan ver nuestra fidelidad en la oración y en el estudio de la palabra de Dios, necesitan ver nuestra fidelidad en la asistencia a los cultos. También necesitan ver valores cristianos en nosotros como padres e hijos, amen.
                <br><br>
                AUTOR: REVERENDO SALOMÓN ORTIZ (+)

            @endif
        </div>
    </div>

    {{-- VISITAS Y FECHA DE ULTIMA--}}
    @if(isset($isWeb)&&$isWeb)
        <div class="row">


        </div>
    @endif

    {{-- DESCARGA Y COMPARTIR--}}
    @if(isset($isWeb)&&$isWeb)
        <div class="row" id="compartir">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <hr>
                <div class="col-md-6 col-sm-12 col-xs-12 diminuto blanco" style="text-align: left;">
                    <br>
                    @if(isset($eng)&&$eng)
                        <i class="fa fa-line-chart" aria-hidden="true"></i> Visits: {!! $articulo->visitas !!}&nbsp;&nbsp;&nbsp; <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Last visit: {!! $articulo->fecha_visita !!}
                    @else
                        <i class="fa fa-line-chart" aria-hidden="true"></i> Visitas: {!! $articulo->visitas !!}&nbsp;&nbsp;&nbsp; <i class="fa fa-calendar-check-o" aria-hidden="true"></i> &Uacute;ltima visita: {!! $articulo->fecha_visita !!}
                    @endif
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6" style="text-align: right;">
                    <br>
                    <div class="fb-share-button" data-href="http://www.iglesiasmirna.org/estudio/2016/fidelidad-servicio" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.iglesiasmirna.org%2Festudio%2F2016%2Ffidelidad-servicio&amp;src=sdkpreparse">{!! (isset($eng)&&$eng) ? 'Share' : 'Compartir' !!} <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6" style="text-align: right; padding-top: 3px;">
                    <br>
                    <a href="https://twitter.com/share" class="twitter-share-button"> Tweet <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i> </a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12" style="text-align: right;" id="compartir-pdf">
                    <br>
                    <a href="{!! url('download/'.$seccion.'/'.$yy.'/'.$vista.'?lang='.(isset($eng)&&$eng ? 'en' : 'es')) !!}" class="btn btn-danger btn-sm">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;
                        {!! (isset($eng)&&$eng) ? 'Download ('.$articulo->descargas.')' : 'Descargar ('.$articulo->descargas.')' !!}

                    </a>
                </div>
            </div>

        </div>
    @endif

    {{-- LISTA DE OTROS ARTICULOS--}}
    @if(isset($isWeb)&&$isWeb)
        @if(isset($query)&&count($query)>1)
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <hr>
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