@extends('website.partials.master')

@section('title')
 Huis
@endsection
@section('content')
@foreach($home as $homes)
 <div class="cover " style="">
<style>
  .cover {
  background:url('/public/uploads/{{$homes->image}}') top left no-repeat;
  background-size: cover;
  display: table;
  width: 100%;
  padding: 0 20%;
  box-shadow: inset 0 0 100px #000;
  position: relative;
  }
</style>
  <div class="cover-text">
   <div class="control-text" >
    <h1 class="responsive-font">{{$homes->title}}</h1>
    <p class="font-size-320">
    {{$homes->description}}
    </p>
   </div>
  </div>
 </div>
 @endforeach

 <section class="testimonial" style="text-align: center;">
  <div class="container container-media text-center" style="margin: auto;">
   <div class="row">
    <div class="container">
     <div class="row">
      <div class="col-md-12 wrapper-wrapper center-wa7shy">
       <div class="panel panel-login">
        <div class="panel-heading">
         <div class="row">
          <a style="cursor: pointer;" class="active " id="rent-form-link">
           <div class="col-md-6 col-sm-6 col-xs-6 focus-change tabs-scrat focus-change1">
            <h4 class="title-form">
             Huur</h4>
           </div>   </a>
          <a class=" " style="cursor: pointer;" id="buy-form-link">
           <div class="col-md-6 col-sm-6 col-xs-6 tabs-scrat focus-change">
            <h4 class="title-form">
             Kopen</h4>
           </div>  </a>
         </div>
         <div class="panel-body">
          <div class="row">
           <div class="col-lg-12">
            @if (\Session::has('success'))
             <div class="col-xs-12">
              <div class="alert alert-success">
               <strong>Succes!</strong> U heeft met succes deze auto geboekt en wij nemen zo spoedig mogelijk contact met u op
              </div>
             </div>
            @endif

            <form method="get" action="{{url('filter')}}">
            <div id="rent-form" class="">

             <div class="col-md-12">
              <h4 class="buy-title">Afstand</h4>
             </div>
             <br><br><br>
  @if(count($errors)>0)
   @foreach($errors as $error)
    {{$error}}
          @endforeach
   @endif
             <div class="col-md-6 inputs-z-index" style="z-index:9999;">
              <div class="col-md-8 alert alert-info alert-dismissable"><!-- start msg info -->
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
               <p>
                "Als u een auto wilt huren, vul dan hier uw info in ..
               </p>

              </div><!-- end msg info -->
              <div class="col-md-12">
               <h4 class="pickup-title col-sm-12 col-xs-12">Ophaal plaats *</h4>
               <div id="pac-container">
                <input id="pac-input"  class="inputs-inputs" type="text" placeholder="Enter a location" name="location" required>
               </div>
               <div id="infowindow-content">
                <img src="" width="16" height="16" id="place-icon">
                <span id="place-name"  class="title"></span><br>
                <span id="place-address"></span>
               </div>
              </div>

              <div class="col-md-12">
                <h4 class="pickup-title col-sm-12 col-xs-12">Ophaaldatum *</h4>
               <input class="inputs-inputs " id="date-picker" name="pickup_date" type="date" placeholder="date" required>
              </div>
              <div class="col-md-12">
               <h4 class="pickup-title col-sm-12 col-xs-12">Ophaal tijd *</h4>
               <input class="inputs-inputs" id="time-picker" name="pickup_time" type="time" placeholder="time" required>
              </div>
              <div class="col-md-12">
               <h4 class="pickup-title col-sm-12 col-xs-12">Retour datum*</h4>
               <input class="inputs-inputs" id="datepicker" name="return_date" type="date" placeholder="date" required>
              </div>

             </div>

             <div class="col-md-6">
              <div id="map"></div>


             </div>

             <div class="col-md-12">
              <h4 class="buy-title change-padding-title">Lichaams type</h4>
             </div>
             <br>
             <div class="col-xs-12"  >

              <div class="col-md-1"></div>
{{--
             <a href="{{url('/bodytype/Hatchback')}}">--}}
              <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >

               <img src="{{url('website/images/car1.png')}}" width="150" >
               <h5 class="col-md-12 color-for-wa7shy">Hatchback</h5>
              </div>
            {{-- </a>--}}
              {{--<a href="{{url('/bodytype/Coupe')}}">--}}
              <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >
               <img src="{{url('website/images/car2.png')}}" width="150" >
               <h5 class="col-md-12 color-for-wa7shy">Coupe</h5>

              </div>
        {{--      </a>--}}
              {{--<a href="{{url('/bodytype/Suv')}}">--}}
              <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >
               <img src="{{url('website/images/car3.png')}}" width="150" >
               <h5 class="col-md-12 color-for-wa7shy">Suv</h5>

              </div>
            {{--  </a>--}}
              {{--<a href="{{url('/bodytype/Stationwagon')}}">--}}
              <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >
               <img src="{{url('website/images/car4.png')}}" width="150" >
               <h5 class="col-md-12 color-for-wa7shy">Stationwagon</h5>

              </div>
              {{--</a>--}}
            {{--  <a href="{{url('/bodytype/Sedan')}}">--}}
              <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >
               <img src="{{url('website/images/car5.png')}}" width="150" >
               <h5 class="col-md-12 color-for-wa7shy">Sedan</h5>

              </div>
          {{--    </a>--}}
              <div class="col-md-1"></div>
             </div>
             <div class="col-md-12" style="text-align: right">
              <button class="btn col-md-offset-1 search-buy-button">
               <i class="fa fa-search" aria-hidden="true"></i>
               Zoeken</button>
             </div>

             </div>
            </form>
            <form method="get" action="{{url('/filter1')}}">
             <div id="buy-form" class="hide">
              <div class="col-md-12">
               <h4 class="buy-title">Zoek informatons</h4>
              </div>
              <div class="row">
               <div class="col-md-3">
                <select class="buy-select"  name="fuel">
                 <option disabled selected> brandstof type</option>
                 <option value="petrol">benzine</option>
                  <option value="diesel">diesel</option>
                 <option value="electric">elektrisch</option>
                </select>
               </div>
               <div class="col-md-3">
                <select class="buy-select"  name="body_type">
                 <option selected disabled> Carrosserie</option>
                 <option value="Hatchback">Hatchback</option>
                 <option value="Convertable">Coupe</option>
                 <option value="Suv">Suv</option>
                 <option value="Stationwagon">Stationwagon</option>
                 <option value="Sedan">Sedan</option>
                 <option value="Van">Van</option>
                </select>
               </div>
               <div class="col-md-3">
                <select class="js-example-basic-singlo"  name="energy_label">
                 <option disabled selected> energie label</option>
                 <option value="A">A</option>
                 <option value="B">B</option>
                 <option value="C">C</option>
                  <option value="D">D</option>
                 <option value="E">E</option>
                 <option value="F">F</option>
                 <option value="G">G</option>

                </select>
               </div>
               <div class="col-md-2">
                <div class="col-xs-12 col-sm-12">
                 <h4 class="buy-title">Prijs filter(€):</h4>
                </div>
                <div class="col-xs-12 col-sm-12">
                 <section class="range-slider container">
                  <span class="output outputOne"></span>
                  <span class="output outputTwo"></span>
                  <span class="full-range"></span>
                  <span class="incl-range"></span>
                  <input name="rangeOne"  min="100" max="10000" step="100" type="range" data-show-value="false">
                  <input name="rangeTwo"  min="100" max="10000" step="100" type="range" data-show-value="false">
                 </section>
                </div>
               </div>
              </div>
              <div class="row">
               <div class="col-md-3">
                <select class="js-example-basic-singlo"  name="model">
                 <option disabled selected> model</option>
                 <option value="Drag Racing">Drag Racing</option>
                 <option value="Nascar">Nascar</option>
                 <option value="Hot rod">Hot rod</option>
                 <option value="Gasser">Gasser</option>
                 <option value="Suv">Suv</option>
                 <option value="Sport">Sport</option>
                 <option value="Nissan">Nissan</option>
                 <option value="Audi">Audi</option>
                 <option value="Acura">Acura</option>
                 <option value="Alfa Romeo">Alfa Romeo</option>
                 <option value="Aston Martin">Aston Martin</option>
                 <option value="Bentley">Bentley</option>
                 <option value="BMW">BMW</option>
                 <option value="Buggatti">Buggatti</option>
                 <option value="Buick">Buick</option>
                 <option value="Cadillac">Cadillac</option>
                 <option value="Chevrolet">Chevrolet</option>
                 <option value="Chrysler">Chrysler</option>
                 <option value="Citroen">Citroen</option>
                 <option value="Dodge">Dodge</option>
                 <option value="Fiat">Fiat</option>
                 <option value="Ferrari">Ferrari</option>
                 <option value="Ford">Ford</option>
                 <option value="Geely">Geely</option>
                 <option  value="General Motors">General Motors</option>
                 <option value="Gmc"></option>
                 <option value="Honda">Honda</option>
                 <option value="Hyundai">Hyundai</option>
                 <option value="Infinty">Infinty</option>
                 <option value="Jaguar">Jaguar</option>
                 <option value="Jeep">Jeep</option>
                 <option value="Kia">Kia</option>
                 <option value="Koenigsegg">Koenigsegg</option>
                 <option value="Lamborghini">Lamborghini</option>
                 <option value="Land Rover">Land Rover</option>
                 <option value="Lexus">Lexus</option>
                 <option value="Maserati">Maserati</option>
                 <option value="Mazda">Mazda</option>
                 <option value="Maclaren">Maclaren</option>
                 <option value="Mercedes-Benz">Mercedes-Benz</option>
                 <option value="Mini">Mini</option>
                </select>
               </div>
               <div class="col-md-3">
                <select class="js-example-basic-singlo"  name="transmission">
                 <option selected disabled> verzending</option>
                 <option value="Automatic (AT)">Automatisch (AT)</option>
                 <option value="Manual (AT)">Handleiding (AT)</option>
                 <option value="Autmated manual transmission (AM)">Geautomatiseerde handmatige verzending (AM)</option>
                 <option value="Continously Variable transmission(CVT)">Geautomatiseerde handmatige verzending (AM)</option>
                </select>
               </div>
               <div class="col-md-3">
                <select class="js-example-basic-singlo"  name="colour">
                 <option  selected disabled> Kleur</option>
                 <option value="Rood">Rood</option>
                 <option value="Groen">Groen</option>
                 <option value="Zwart">Zwart</option>
                 <option value="Geel">Geel</option>
                </select>
               </div>
              </div>
              <div class="col-md-12">
               <h4 class="buy-title change-padding-title">Lichaams type</h4>
              </div>
              <br>
              <div class="row">
               <div class="col-md-1"></div>

               {{--<a href="{{url('/bodytype/Hatchback')}}">--}}
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >

                 <img src="{{url('website/images/car1.png')}}" width="150" >
                 <h5 class="col-md-12 color-for-wa7shy">Hatchback</h5>

                </div>
               {{--</a>--}}

               {{--<a href="{{url('/bodytype/Coupe')}}">--}}
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >

                 <img src="{{url('website/images/car2.png')}}" width="150" >
                 <h5 class="col-md-12 color-for-wa7shy">Coupe</h5>

                </div>
               {{--</a>--}}

               {{--<a href="{{url('/bodytype/Suv')}}">--}}
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >

                 <img src="{{url('website/images/car3.png')}}" width="150" >
                 <h5 class="col-md-12 color-for-wa7shy">Suv</h5>

                </div>
               {{--</a>--}}

               {{--<a href="{{url('/bodytype/Stationwagon')}}">--}}
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >

                 <img src="{{url('website/images/car4.png')}}" width="150" >
                 <h5 class="col-md-12 color-for-wa7shy">Stationwagon</h5>

                </div>
               {{--</a>--}}

             {{--  <a href="{{url('/bodytype/Sedan')}}"> --}}
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >

                 <img src="{{url('website/images/car5.png')}}" width="150" >
             <h5 class="col-md-12 color-for-wa7shy">Sedan</h5>

            </div>
              {{-- </a>--}}
               <div class="col-md-1"></div>
              </div>
              <div class="col-md-12" style="text-align: right">
               <a href="{{url('/filter')}}">
                <button  class="btn col-md-offset-1 search-buy-button">
                 <i class="fa fa-search" aria-hidden="true"></i>
                 Zoeken</button></a>
              </div>
             </div>
            </form>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
@endsection
@section('js')
 <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGtrTqDMskSNmkOAU-8g1VcmF6a7j4ufI&callback=initMap&libraries=places">
 </script>
 @endsection