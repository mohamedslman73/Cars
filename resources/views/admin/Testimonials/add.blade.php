@extends('admin.layout.layout')
@section('title')
    Testimonials
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
                General Form Elements
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/adminpanel"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/Testimonials">Account</a></li>
                <li class="active">Add</li>
            </ol>
        </section>

        @if (\Session::has('warning'))
            <div class="col-xs-12">
                <div class="alert alert-warning">
                    <strong> {{ session()->get('warning') }}</strong>
                </div>
            </div>
        @endif
        @if (\Session::has('pass'))
            <div class="col-xs-12">
                <div class="alert alert-warning">
                    <strong>warning!</strong> please put the same pass
                </div>
            </div>
        @endif
        @if (\Session::has('success'))
            <div class="col-xs-12">
                <div class="alert alert-success">
                    <strong>success</strong> data inseret successfully
                </div>
            </div>
        @endif
        @if (\Session::has('update'))
            <div class="col-xs-12">
                <div class="alert alert-success">
                    <strong>success</strong>  data Update successfully
                </div>
            </div>
        @endif
    <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Testimonials</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{url('Testimonials')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field () }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="name" class="form-control" name="name" id="exampleInputEmail1" placeholder=" name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jobs</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Jobs">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Opinion</label>
                                    <textarea class="editble-txt" rows="8"  name="description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" name="image[]" multiple id="exampleInputFile" enctype="multipart/form-data">
                                </div>
                                <!--<div class="form-group">
                                   <label for="exampleInputFile">File input</label>
                                   <input type="file" name="image" id="exampleInputFile">

                                   <p class="help-block">Example block-level help text here.</p>
                                 </div>-->
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->
            </div>
        </section>

        <!-- /.content -->
    </div> @endsection

@section('footer')

@endsection