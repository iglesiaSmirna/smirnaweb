<html>
<head>
    <link rel="shortcut icon" href="{!! asset('images/favicon.ico')!!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('images/favicon.ico')!!}" type="image/x-icon">
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    {!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background: #003366;
            display: table;
            font-weight: 100;
            font-family: 'Lato';

            background-image: url('../../images/white-background.png');
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
            color: white;
        }

        .subtitle a {
            font-size: 40px;
            text-decoration: none;
            color: white;
        }

        .subtitle a:link {
            font-size: 40px;
            text-decoration: none;
            color: white;
        }

        .subtitle a:visited {
            font-size: 40px;
            text-decoration: none;
            color: white;
        }

        .subtitle a:hover {
            font-size: 40px;
            text-decoration: none;
            color: #4377DD;
        }

        .subtitle a:active {
            font-size: 40px;
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">{!! isset($eng)&&$eng ? 'Content not available' : 'Contenido no disponible' !!}</div>
        <div class="subtitle">
            <a href="{!! url('/').'?lang='.(isset($eng)&&$eng ? 'en' : 'es') !!}">
                {!! isset($eng)&&$eng ? 'Home' : 'Inicio' !!} <i class="fa fa-home" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>
</body>
</html>
