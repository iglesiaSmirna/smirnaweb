<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="language" content="en"/>

    <link rel="shortcut icon" href="{!! asset('images/favicon.ico')!!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('images/favicon.ico')!!}" type="image/x-icon">

    <title>
        Iglesia Smirna | {!! (isset($eng)&&$eng) ? $pagTitle : $tituloPag !!}
    </title>

@section('css')
@include('layout.style')

@show
</head>
<body>
    <div class="container">
        @section('contenido')
        @show

        {{-- footer --}}
    @if(isset($isWeb)&&$isWeb)
        <div class="row" style="background-color: #002244;">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <br><br>
                <div class="diminuto" style="color: white;">
                    &reg; Asamblea de Dios Smirna. 2016 &nbsp;&nbsp;|&nbsp;&nbsp;
                    {!! (isset($eng)&&$eng) ? 'All rights reserved' : 'Todos los Derechos Reservados'!!}
                </div>
                <br><br>
            </div>
        </div>
    @else
        <div class="row" style="background-color: white;">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <hr>
                <h3 class="{!! (isset($isWeb)&&$isWeb) ? 'parrafo' : 'diminuto' !!}" style="color: #003366; text-align: center;">www.iglesiaSmirna.org</h3>
            </div>
        </div>
    @endif
    </div>
</body>
</html>
@include('layout.script')
@section('js')
@show
