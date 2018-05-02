@extends('admin.layout.layout')
@section('title')
    Dashbord
@endsection
@section('css')

@endsection
@section('header')

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
                <li><a href="{{url('admins/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{url('admins/homecontent')}}">Home Content</a></li>
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
    <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Home Content</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @if(count($errors)>0)
                            <div class="alert alert-dismissable alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif

                        <form role="form" action="{{url('admins/homecontent')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field () }}
                            <div class="box-body">


                                <div class="form-group">
                                    <label> Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter the title for this section">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Page Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>


                                <div class="form-group">
                                    <label> Select image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
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