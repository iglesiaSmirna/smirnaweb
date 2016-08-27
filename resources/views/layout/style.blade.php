{!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}
{!! Html::style('assets/bootstrap/css/bootstrap.css') !!}

{{-- ESTILOS PARA PAGINA PRINCIPAL --}}
@if(isset($isMain)&&$isMain)
{!! Html::style('assets/css/style.css') !!}
@endif

{{-- ESTILOS PARA PAGINAS DE CONTENIDO --}}
@if(isset($isCont)&&$isCont)
    {!! Html::style('assets/css/cont.css') !!}
    {!! Html::style('assets/datatable/css/dataTables.bootstrap.min.css') !!}
@endif