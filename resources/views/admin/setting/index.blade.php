@extends('admin.layout.layout')
@section('title')
    Seeting
@endsection

@section('header')
    <link rel="stylesheet" href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
@endsection

@section('content')
    <div class="content ">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Setting Tables
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admins/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a class="active">Setting</a></li>
            </ol>
        </section>
        @if (\Session::has('delete'))
            <div class="col-xs-12">
                <div class="alert alert-success">
                    <strong>Success!</strong> Setting delete Successfully
                </div>
            </div>
    @endif
 @if (\Session::has('update'))
            <div class="col-xs-12">
                <div class="alert alert-success">
                    <strong>Success!</strong> Setting Updated Successfully
                </div>
            </div>
    @endif

    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Facebook</th>
                                    <th>twitter</th>

                                    <th>Linked In</th>
                                    <th>Logo</th>
                                    <th>Controll</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach ($settings as $setting )
                                    <tr>
                                        <td>
                                            {{$i}}
                                        </td>
                                        <td>{{ $setting->facebook}}</td>
                                        <td>{{ $setting->twitter}}</td>

                                        <td>{{ $setting->linkedin}}</td>
                                        <td>

                                            <img src="/public/uploads/{{$setting->image}}" style="width: 100px;height: 100px" alt="img">
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="{{url('admins/setting/'.$setting->id.'/edit')}}"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>

                                    <?php $i++; ?>
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
 @endsection

@section('footer')
    <!-- jQuery 3 -->
    {!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
        function myFunction() {
            alert("Are you sure you want to remove this ?");
        }
    </script>
@endsection