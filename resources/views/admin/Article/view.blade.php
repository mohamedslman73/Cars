@extends('admin.layout.layout')
@section('title')
    All Article
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
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Team Tables
        </h1>
        <ol class="breadcrumb">
            <li><a href="/adminpanel"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Article</a></li>
        </ol>
    </section>
    @if (\Session::has('delete'))
    <div class="col-xs-12">
        <div class="alert alert-success">
            <strong>Success!</strong> Member team  delete Successfully
        </div>
    </div>
    @endif
    @if (\Session::has('success'))
    <div class="col-xs-12">
        <div class="alert alert-success">
            <strong>Success!</strong>Article Add  Successfully
        </div>
    </div>
    @endif
    @if ( session()->has('message') )
    <div class="alert alert-warning">{{ session()->get('message') }}</div>
    @endif

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <a href="{{url('/Article/create')}}" class="btn btn-info">add Article</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>title</th>
                                    <th>descreption</th>
                                    <th>images</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($article as $op )
                                <tr>
                                    <td>
                                        {{$i}}
                                    </td>
                                    <td>{{ $op->title }}</td>
                                    <td>{{ $op->descreption }}</td>
                                    <td>
                                        <img src="{{url('website/img/article/'.$op->image)}}" width="150px" height="100px" alt="img">
                                    </td>
                                    <td>
                                        <a href="{{route('Article.edit',$op->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <form method="Post" action="{{route('Article.destroy',$op->id)}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button onclick="myFunction()" class="btn btn-danger text-capitalize">x</button></a>
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
    <!-- jQuery 3 -->
    <script src="admin/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="admin/bower_components/fastclick/lib/fastclick.js"></script>
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
        alert("Are you sure you want to remove this ?");
    }
</script>

    @endsection