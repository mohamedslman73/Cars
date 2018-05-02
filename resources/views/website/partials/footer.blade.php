{{--{{ dd(Home::getdata()) }}--}}
<section>
    <footer>
        <div class="container">
            <div class="row footer-content">
                @foreach(Home::getdata() as $footer)
                <div class="col-md-3 col-sm-6 col-xs-12 wa7shy-footer-fix">
                    <h3 class="title-list">Toonzaal</h3>
                    <ul class="footer-list">
                        <h4>Adres</h4>
                        <li>{{$footer->address}}</li>
                        <h4>Contact</h4>
                        <li class="contact-icons"><p> <i class="fa fa-phone"></i> {{$footer->phone}}</p></li>
                        <li class="contact-icons"><p> <i  class="fa fa-envelope"></i> {{$footer->email}}</p></li>
                    </ul>
                </div>
                @endforeach
      {{--          <div class="col-md-3 col-sm-6 col-xs-12">
                    <h3 class="title-list">Workplace</h3>
                    <ul class="footer-list">
                        <h4>Address</h4>
                        <li>reedhussien 27
                            16789 Greelpark
                            route 31.</li>
                    </ul>
                    <ul class="footer-list">
                        <h4>Contact</h4>
                        <li class="contact-icons"><p> <i class="fa fa-phone"></i> +123456789</p></li>
                        <li class="contact-icons"><p> <i class="fa fa-mobile-phone"></i> +123456789</p></li>
                        <li class="contact-icons"><p> <i  class="fa fa-envelope"></i> info@gmail.com</p></li>
                    </ul>
                </div>--}}
                <div class="col-md-3 col-sm-6 col-xs-12 pull-right">
                    <h3 class="title-list">Navigatie</h3>
                    <ul class="footer-list">
                        <li><a href="{{url('/')}}">Huis</a></li>
                        <li><a href="{{url('/about')}}">Over ons</a></li>
                        <li><a href="{{url('/service')}}">Service</a></li>
                        <li><a>werkplaats</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div> <!--end row-->
        </div> <!-- end container-->
    </footer>
</section>