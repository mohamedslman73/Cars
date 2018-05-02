@extends('admin.layout.layout')
@section('title')
    Add Product
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
            <li><a href="/adminpanel"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/product">Product</a></li>
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

    @if (\Session::has('success'))
    <div class="col-xs-12">
        <div class="alert alert-success">
            <strong>success</strong> data inseret successfully
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
                        <h3 class="box-title">About</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('product')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field () }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">title</label>
                                <input required type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">categore</label>
                                <select required type="text" class="form-control" name="categore" id="exampleInputEmail1">
                                    <?php
                                    $categore=\App\category::all();
                                    ?>
                                    @foreach($categore as $categores)
                                        <option>
                                            {{ $categores->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">description</label>
                                <textarea class="editble-txt" rows="8"  name="description" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" name="image[]" multiple id="exampleInputFile" enctype="multipart/form-data">
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