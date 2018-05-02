@extends('admin.layout.layout')
@section('title')
    Dashbord
@endsection

@section('header')
    <link rel="stylesheet" href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css"
          xmlns="http://www.w3.org/1999/html">
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
                Cars Table
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admins/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a class="active">Cars</a></li>
            </ol>
        </section>
        @if (\Session::has('delete'))
            <div class="col-xs-12">
                <div class="alert alert-success">
                    <strong>Success!</strong> Car delete Successfully
                </div>
            </div>
    @endif

        @if (\Session::has('success'))
            <div class="col-xs-12">
                <div class="alert alert-success">
                    <strong>Success!</strong> Car inserted Successfully
                </div>
            </div>
    @endif
    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{url('admins/cars/create')}}" class="btn btn-info">add Car</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>model</th>
                                    <th>Date</th>
                                    <th>Show</th>
                                    <th>Rent</th>
                                    <th>sold</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach ($cars as $car )
                                    <tr>
                                        {{--<td>
                                            {{$i}}
                                        </td>--}}
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->name }}</td>
                                        <td>{{ $car->model }}</td>
                                        <td>{{ $car->created_at->diffForHumans() }}</td>
                                        @if($car->show ==1)
                                        <td>
                                            <a class="btn btn-success" href="{{url('admins/showcars/'.$car->id)}}"><i class="fa fa-check-circle"></i></a>
                                        </td>
                                            @else
                                            <td>
                                                <a class="btn btn-danger" href="{{url('admins/showcars/'.$car->id)}}"><i class="fa fa-edit"></i></a>
                                            </td>
                                        @endif

                                        @if($car->rent ==1)
                                        <td>
                                            <a class="btn btn-success" href="{{url('admins/showrent/'.$car->id)}}"><i class="fa fa-edit"></i></a>
                                        </td>
                                        @else
                                            <td>
                                                <a class="btn btn-danger" href="{{url('admins/showrent/'.$car->id)}}"><i class="fa fa-edit"></i></a>
                                            </td>
                                        @endif
                                        @if($car->sold ==1)
                                        <td>
                                            <a class="btn btn-success" href="{{url('admins/showsold/'.$car->id)}}"><i  class="fa fa-check-circle"></i></a>
                                        </td>
                                            @else
                                            <td>
                                                <a class="btn btn-danger" href="{{url('admins/showsold/'.$car->id)}}"><i class="fa fa-edit"></i></a>
                                            </td>
                                        @endif
                                        <td>
                                            <a class="btn btn-primary" href="{{url('admins/cars/'.$car->id.'/edit')}}"><i class="fa fa-edit"></i></a>
                                            <form method="Post" action="{{route('cars.destroy',$car->id)}}" class="form_inline">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>

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

            <!-- DataTables -->
    {!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
            <!-- SlimScroll -->
}
            <!-- page script -->
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
            confirm('Are you sure you want to delete?');
        }
    </script>
@endsection