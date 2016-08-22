{!! Html::script('assets/js/jquery.js') !!}
{!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}

{{-- SCRIPTS PARA PAGINA PRINCIPAL --}}
@if(isset($isMain)&&$isMain)

@endif

{{-- SCRIPTS PARA PAGINA PRINCIPAL --}}
@if(isset($isCont)&&$isCont)

@endif

{{-- GOOGLE ANALITYCS --}}
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-59961295-2', 'auto');
    ga('send', 'pageview');
</script>