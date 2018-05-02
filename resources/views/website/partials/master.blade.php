<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">


<title>@yield('title')</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="{{url('website/images/logo-06.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300i" rel="stylesheet">

@yield('css')



    <!-- Bootstrap 3.3.7 -->
{!! Html::style('website/css/bootstrap.min.css') !!}
<!-- Font Awesome -->
{!! Html::style('website/css/font-awesome.min.css') !!}

    {!! Html::style('website/css/iThing.css') !!}

    {!! Html::style('website/css/jquery.datetimepicker.min.css') !!}

    {!! Html::style('website/css/main.css') !!}

    {!! Html::style('website/css/jquery-ui.min.css') !!}

    {!! Html::style('website/css/slick.css') !!}

    {!! Html::style('website/css/slick-theme.css') !!}

    {!! Html::style('website/css/spec.css') !!}



</head>
    <body>
    @include('website.partials.navbar')

    @yield('content')

    @include('website.partials.footer')

    @include('website.partials.js_scripts')
    @yield('js')
    </body>
</html>