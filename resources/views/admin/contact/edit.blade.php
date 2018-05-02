@extends('admin.layout.layout')
@section('title')
    Dashbord
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
                <li><a href="/accounts">Contact Us</a></li>
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
                        <form role="form" action="{{route('contact.update',$contact->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field () }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">privilage</label>

                                        @else
                                        <select class="form-control" name="privalege" id="exampleInputEmail1">
                                            <option value="admin">Admin</option>
                                            <option value="users" selected>user</option>
                                        </select>
                                        @endif

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="name" class="form-control" value="{{ $account->name }}" name="name" id="exampleInputEmail1" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" value="{{ $account->email }}" name="email" id="exampleInputEmail1" placeholder="Enter email">
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
@section('footer')

@endsection