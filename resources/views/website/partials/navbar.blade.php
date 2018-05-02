<section class="nav-r-c navbar-wa7shy">
    <div class="container">
        <div class="row">
           @foreach(Setting::settingData() as $data)
            <div class="col-xs-6 div-logo"><!-- start logo -->
                {{--<img src="{{url('website/images/logo-06.png')}}">--}}
              <a href="{{url('/')}}"><img class="width-fix-wa7shy" src="/public/uploads/{{$data->image}}"></a>
            </div><!-- end logo -->
          @endforeach
            <div class="col-xs-6 icon-nav hidden-sm hidden-xs"><!-- nav icon -->
                <p class="pull-right col-md-3"><img class="width-fix-wa7shy1" id="trigger-slider" class="pull-right" src="{{url('website/images/royal-logo-09.png')}}"></p>
                <ul class="col-md-9 pull-right navbar-list">
                    <div class="row col-md-12 pull-right" id="slide-left" >
                        <li class="col-md-12" >
                        <span class="nav-slide-wa7shy"><a href="{{url('/service')}}">Service</a></span>
                        <span class="nav-slide-wa7shy"><a href="{{url('/about')}}">Over Ons</a></span>
                        <span class="nav-slide-wa7shy"><a href="{{url('/')}}">Kopen</a></span>
                        <span class="nav-slide-wa7shy"><a href="{{url('/')}}">Huur</a></span>
                        <span class="nav-slide-wa7shy"><a href="{{url('/filter')}}">Aanbiedingen</a></span>
                        </li>
                    </div>
                </ul>
            </div><!-- nav icon -->
               <div class="dropdown col-xs-6 hidden-lg hidden-md icon-nav">
                   <p class="dropdown-toggle" data-toggle="dropdown">
                       <img id="trigger-slider1" class="pull-right" src="{{url('website/images/royal-logo-09.png')}}"></p>
                   <ul class="dropdown-menu pull-right background-color-wa7shy">
                       <li class="color-gold-wa7shy"><a href="{{url('/service')}}">Service</a></li>
                       <li class="color-gold-wa7shy"><a href="{{url('/about')}}">Over Ons</a></li>
                       <li class="color-gold-wa7shy"><a href="{{url('/')}}">Kopen</a></li>
                       <li class="color-gold-wa7shy"><a href="{{url('/')}}">Huur</a></li>
                       <li class="color-gold-wa7shy"><a href="{{url('/filter')}}">Aanbiedingen</a></li>
                   </ul>
               </div>
<div class="clear-fix"></div>
        </div><!-- row -->
    </div><!-- container -->
</section>