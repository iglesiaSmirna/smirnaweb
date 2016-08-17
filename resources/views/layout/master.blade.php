
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="language" content="en"/>

    <link rel="shortcut icon" href="images/myicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="{!! asset('images/favicon.ico')!!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('images/favicon.ico')!!}" type="image/x-icon">

    <title>
        {!! (isset($eng)&&$eng) ? $pagTitle : $tituloPag !!}
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
        <div class="row" style="background-color: #002244;">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-2">
                <br><br>
                <div class="diminuto" style="color: white;">
                    &reg; Asamblea de Dios Smirna. 2016 &nbsp;&nbsp;|&nbsp;&nbsp;
                    {!! (isset($eng)&&$eng) ? 'All Right Reserved' : 'Todos los Derechos Reservados'!!}
                </div>
                <br><br>
            </div>
        </div>
    </div>
</body>
@include('layout.script')
@section('js')
@show