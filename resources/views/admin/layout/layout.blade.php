<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Royal Cars| @yield('title') </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="{{url('website/images/logo-06.png')}}">
@yield('css')

    <!--SELECT 2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <!-- Bootstrap 3.3.7 -->
    {!! Html::style('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('admin/bower_components/font-awesome/css/font-awesome.min.css') !!}
    <!-- Ionicons -->
    {!! Html::style('admin/bower_components/Ionicons/css/ionicons.min.css') !!}
    <!-- Theme style -->
    {!! Html::style('admin/dist/css/AdminLTE.min.css') !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('admin/dist/css/skins/_all-skins.min.css') !!}
    <!-- Morris chart -->
    {!! Html::style('admin/bower_components/morris.js/morris.css') !!}
    <!-- jvectormap -->
    {!! Html::style('admin/bower_components/jvectormap/jquery-jvectormap.css') !!}
    <!-- Date Picker -->
    {!! Html::style('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}
    <!-- Daterange picker -->
    {!! Html::style('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}
    <!-- bootstrap wysihtml5 - text editor -->
    {!! Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}


    <!-- style css  -->
    {!! Html::style('admin/dist/css/style.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
            <img src="{{url('admin/dist/img/logo-06.png') }}" style="width: 245px;height:50px;margin-left:-30px; background: #222d32" class="user-image" alt="User Image">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>7D</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>easy</b>Cars</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" style="background: #222d32">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->


                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('admin/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{url('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                                <p>
                                    {{ Auth::user()->name }}
                                    <small>Member since Nov. 2017</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="{{ route('logout1') }}" class="btn btn-default btn-flat">
                                        Sign out
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            @include('admin.layout.navbar')
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')

    </div>
</div>
<!-- ./wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css"></script>
<!-- jQuery 3 -->
{!! Html::script('admin/bower_components/jquery/dist/jquery.min.js') !!}
<!-- jQuery UI 1.11.4 -->


{!! Html::script('admin/bower_components/jquery-ui/jquery-ui.min.js') !!}
<!--SELECT 2-->


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
{!! Html::script('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
        <!-- Morris.js charts -->
{!! Html::script('admin/bower_components/raphael/raphael.min.js') !!}
{!! Html::script('admin/bower_components/morris.js/morris.min.js') !!}

        <!-- Sparkline -->
{!! Html::script('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}
        <!-- jvectormap -->
{!! Html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
        <!-- jQuery Knob Chart -->
{!! Html::script('admin/bower_components/jquery-knob/dist/jquery.knob.min.js"') !!}
        <!-- daterangepicker -->
{!! Html::script('admin/bower_components/moment/min/moment.min.js') !!}
{!! Html::script('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}
        <!-- datepicker -->
{!! Html::script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
        <!-- Bootstrap WYSIHTML5 -->
{!! Html::script('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}
        <!-- Slimscroll -->
{!! Html::script('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}

        <!-- FastClick -->
{!! Html::script('admin/bower_components/fastclick/lib/fastclick.js') !!}
        <!-- AdminLTE App -->
{!! Html::script('admin/dist/js/adminlte.min.js') !!}

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

{!! Html::script('admin/dist/js/pages/dashboard.js') !!}
        <!-- AdminLTE for demo purposes -->
{!! Html::script('admin/dist/js/demo.js') !!}

<!--SELECT 2-->
<script src="https://code.jquery.com/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
    function myFunction() {
        alert("Are you sure you want to remove this ?");
    }
</script>
@yield('footer')
</body>
</html>
