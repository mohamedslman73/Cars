@extends('admin.layout.layout')
@section('title')
    Edit Blog
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
            <li><a href="ladminpanel"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/Blogs">Blog</a></li>
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
            <strong>success</strong> data inseret successfully
        </div>
    </div>
    @endif
        @if (\Session::has('update'))
    <div class="col-xs-12">
        <div class="alert alert-success">
            <strong>success</strong>    data update successfully
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
                        <h3 class="box-title">Blog</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('Blogs.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field () }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="name" class="form-control" name="name" value="{{$blog->name}}" id="exampleInputEmail1" placeholder="Blog name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">member team</label>
                                <select required type="text" class="form-control" name="team_member" id="exampleInputEmail1">
                                    <?php
                                    $team=\App\Team::all();
                                    ?>
                                    @foreach($team as $teams)
                                        <option>
                                            {{ $teams->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$blog->title}}"  id="exampleInputEmail1" placeholder="Title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">description</label>
                                <textarea class="editble-txt" rows="8"  name="description" required> {{$blog->descreption}} </textarea>
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