@extends('admin.layout.layout')
@section('title')
    Setting
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
                <li><a href="/adminpanel"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/Setting">Setting</a></li>
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
                            <h3 class="box-title">Account</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @if(count($errors)>0)
                            <div class="alert alert-dismissable alert-info">
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

                        <form role="form" action="{{route('setting.update',$setting->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field () }}
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook</label>
                                    <input type="rext" class="form-control" name="facebook" id="exampleInputEmail1" value="{{$setting->facebook}}" placeholder="Enter Fcaebook url">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="exampleInputEmail1" value="{{$setting->twitter}}" placeholder="Enter Twitter url" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instegram</label>
                                    <input type="text" class="form-control" name="instegram" id="exampleInputEmail1" value="{{$setting->instegram}}" placeholder="Enter Instegram url" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Linked In</label>
                                    <input type="text" class="form-control" name="linkedin" id="exampleInputEmail1" value="{{$setting->linkedin}}" placeholder="Enter Linked In url" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Google+</label>
                                    <input type="text" class="form-control" name="google+" id="exampleInputEmail1" value="{{$setting['google+']}}" placeholder="Enter Google+ url" >
                                </div>
                                <div class="form-group">
                                    <label for="image">Select Logo Image</label>
                                    <input type="file" name="image" class="form-group" value="{{$setting->image}}">
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
@section('footer')

@endsection