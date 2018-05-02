<div class="user-panel" style="background: #1a2226;">
    <div class="pull-left image">
        <img src="{{url('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
    </div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="{{url('admins/home')}}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        </ul>
    </li>
    <li class=" treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="{{url('admins/accounts/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="{{url('admins/accounts')}}"><i class="fa fa-circle-o"></i> view</a></li>
        </ul>
    </li>

    <li class=" treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Cars</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="{{url('admins/cars/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="{{url('admins/cars')}}"><i class="fa fa-circle-o"></i> view</a></li>
        </ul>
    </li>

    <li class=" treeview">
        <a href="#">
            <i class="fa fa-sliders"></i> <span>About Content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admins/aboutcontent/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="{{url('admins/aboutcontent')}}"><i class="fa fa-circle-o"></i> view</a></li>

        </ul>
    </li>

{{--    <li class=" treeview">
        <a href="#">
            <i class="fa fa-product-hunt"></i> <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('product/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="{{url('product')}}"><i class="fa fa-circle-o"></i> view</a></li>
            <li><a href="{{url('category/create')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
            <li><a href="{{url('category')}}"><i class="fa fa-circle-o"></i> All Category</a></li>

        </ul>
    </li>--}}




{{--    </li>
    <li class=" treeview">
        <a href="#">
            <i class="fa fa-align-justify"></i> <span>Jobs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('Jobs/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="{{url('Jobs')}}"><i class="fa fa-circle-o"></i> view</a></li>

        </ul>
    </li>--}}
{{--    <li class=" treeview">
        <a href="#">
            <i class="fa fa-question-circle"></i> <span>Question</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('Question/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="{{url('Question')}}"><i class="fa fa-circle-o"></i> view</a></li>

        </ul>
    </li>--}}
{{--    <li class=" treeview">
        <a href="#">
            <i class="fa fa-th"></i> <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('Services/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="{{url('Services')}}"><i class="fa fa-circle-o"></i> view</a></li>

        </ul>
    </li>--}}


    <li class=" treeview">
        <a href="#">
            <i class="fa fa fa-book"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admins/setting/create')}}"><i class="fa fa-circle-o"></i> add</a></li>
            <li><a href="{{url('admins/setting')}}"><i class="fa fa-circle-o"></i> view</a></li>

        </ul>
    </li>

    <li class=" treeview">
        <a href="#">
            <i class="fa fa fa-book"></i> <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admins/services/create')}}"><i class="fa fa-circle-o"></i> add</a></li>
            <li><a href="{{url('admins/services')}}"><i class="fa fa-circle-o"></i> view</a></li>

        </ul>
    </li>

    <li class=" treeview">
        <a href="#">
            <i class="fa fa fa-files-o"></i> <span>Home Content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admins/homecontent/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="{{url('admins/homecontent')}}"><i class="fa fa-circle-o"></i> view</a></li>

        </ul>
    </li>


    <li class=" treeview">
        <a href="#">
            <i class="fa fa fa-files-o"></i> <span>Rent Info</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admins/rentinfo')}}"><i class="fa fa-circle-o"></i> view</a></li>

        </ul>
    </li>

    <li class=" treeview">
        <a href="{{url('admins/footercontent')}}">
            <i class="fa fa-envelope"></i> <span>Footer Content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

            <li><a href="{{url('admins/footercontent/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="{{url('admins/footercontent')}}"><i class="fa fa-circle-o"></i>view</a></li>
        </ul>
    </li>

    <li class=" treeview">
        <a href="#">
            <i class="fa fa-envelope"></i> <span>Buy Info</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admins/contact-us')}}"><i class="fa fa-circle-o"></i>Buy Info</a></li>

        </ul>
    </li>


</ul>








