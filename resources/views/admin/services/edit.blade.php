@extends('admin.layout.layout')
@section('title')
    Edit Services
@endsection

@section('header')

@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            General Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('admins/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('admins/services')}}">Services</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>

    @if (\Session::has('warning'))
    <div class="col-xs-12">
        <div class="alert alert-warning">
            <strong> {{ session()->get('warning') }}</strong>
        </div>
    </div>
    @endif

    @if (\Session::has('success'))
    <div class="col-xs-12">
        <div class="alert alert-success">
            <strong>success</strong> data Update successfully
        </div>
    </div>
    @endif
    @if (\Session::has('no'))
    <div class="col-xs-12">
        <div class="alert alert-success">
            <strong>no </strong> 
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
                        <h3 class="box-title">Services</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('services.update',$service->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field () }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" value="{{$service->title}}" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter title">
                            </div> <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input  type="text" value="{{$service->description}}" class="form-control" name="description" id="exampleInputEmail1" placeholder="Enter Desctiption">
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection
<script src="{{ url('project/resources/assets/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
//this script is only for this page
tinymce.init({
    selector: '.editble-txt',
    directionality: 'ltr',
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
    menubar: false,
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    },

});
</script>