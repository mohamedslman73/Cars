@extends('website.partials.master')

@section('title')
    Filter
@endsection
@section('content')



    <section class="main-home">
        <div class="screen-home-a">
            <div class="screen-home-sec">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12 screen-info-home container-fluid"><!-- screen para graph -->
                            <h2>Meer dan 20.000 beschikbare voertuigen</h2>
                        </div><!-- end screen para graph -->


                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- screen-home-a -->
        </div><!-- screen-home-a -->
    </section>




    <!-- ======================= strat section filter by  ================= -->
    <section class="filter-by">
        <div class="container">
            <div class="row">
                <form method="get">
                <div class="box-filter-by ">


                    <div class="col-md-3 text-center"><!-- col 3 -->
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
                                <option value="Hoda">Hoda</option>
                                <option value="Hyundai">Hyundai</option>
                                <option value="Infinti">Infinti</option>
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
                        <br>
                        <br>
                        <select class="js-example-basic-singlo"  name="transmission">
                            <option selected disabled> verzending</option>
                            <option value="Automatisch (AT)">Automatisch (AT)</option>
                            <option value="Handleiding (AT)">Handleiding (AT)</option>
                            <option value="Geautomatiseerde handmatige verzending (AM)">Geautomatiseerde handmatige verzending (AM)</option>
                            <option value="Continu Variabele transmissie (CVT)">Continu Variabele transmissie (CVT)</option>
                        </select>
                        <br>
                        <br>
                    </div><!--end col 3 -->


                    <div class="col-md-3 text-center"><!-- col 3 -->
                        <select class="js-example-basic-singlo"  name="fuel">
                            <option  selected disabled> brandstoftype</option>
                            <option value="benzine">benzine</option>
                            <option value="diesel">diesel</option>
                            <option value="elektrisch">elektrisch</option>

                        </select>
                        <br>
                        <br>
                        <select class="js-example-basic-singlo"  name="body_type">
                            <option selected disabled> Carrosserie</option>
                                <option value="Hatchback">Hatchback</option>
                                <option value="Convertable">Coupe</option>
                                <option value="Suv">Suv</option>
                                <option value="Stationwagon">Stationwagon</option>
                                <option value="Sedan">Sedan</option>
                                <option value="Van">Van</option>
                            </select>
                        <br>
                        <br>
                    </div><!--end col 3 -->



                    <div class="col-md-3 text-center"><!-- col 3 -->
                        <select class="js-example-basic-singlo"  name="energy_label">
                            <option selected disabled> energielabel</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>

                        </select>
                        <br>
                        <br>
                        <select class="js-example-basic-singlo"  name="colour">
                            <option  selected disabled> Kleur</option>
                            <option value="Rood">Rood</option>
                            <option value="Groen">Groen</option>
                            <option value="Zwart">Zwart</option>
                            <option value="Geel">Geel</option>
                        </select>
                        <br>
                        <br>
                    </div><!--end col 3 -->

                    <div class="col-md-3 box-sub-ran-pr text-center" ><!-- start col3 -->


                        <div class="col-xs-12 col-sm-12">
                            <section class="range-slider container">
                                <span class="output outputOne"></span>
                                <span class="output outputTwo"></span>
                                <span class="full-range"></span>
                                <span class="incl-range"></span>
                                <input name="rangeOne" min="0" max="5000000" step="1" type="range" data-show-value="true">
                                <input name="rangeTwo" min="0" max="5000000" step="1" type="range" data-show-value="true">
                            </section>
                        </div>



                        <div  class="col-xs-12">

                            <button class="btn col-md-offset-1 search-buy-button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Zoeken
                            </button>

                        </div>


                    </div><!-- end col3 -->




                </div><!--end box filter by -->


        </form>

            </div><!-- row -->
        </div><!-- section -->
    </section>



    <!-- ========= section box filterd ============ -->


    <section class="all-sec-tabs-cars">

        <div class="container">


            <div class="row">
                <div class="tab">
                 {{--   @foreach($model as $models)
                    <a href="/mod/{{$models->model}}"> <button class="tablinks">{{$models->model}}</button></a>
                      @endforeach--}}
                    <a href="{{url('mod/BMW')}}" style="text-decoration: none;"><button class="tablinks">BMW</button></a>
                    <a href="{{url('mod/Drag Racing')}}" style="text-decoration: none;"><button class="tablinks">Drag Racing</button></a>
                    <a href="{{url('mod/Hot rod')}}" style="text-decoration: none;"><button class="tablinks">Hot rod</button></a>
                    <a href="{{url('mod/Suv')}}" style="text-decoration: none;"><button class="tablinks">Suv</button></a>
                    <a href="{{url('mod/Nissan')}}" style="text-decoration: none;"><button class="tablinks">Nissan</button></a>
                    <a href="{{url('mod/Audi')}}" style="text-decoration: none;"><button class="tablinks">Audi</button></a>
                    <a href="{{url('mod/Bentley')}}" style="text-decoration: none;"><button class="tablinks">Bentley</button></a>
                    <a href="{{url('mod/Jeep')}}" style="text-decoration: none;"><button class="tablinks">Jeep</button></a>
                    <a href="{{url('mod/Kia')}}" style="text-decoration: none;"><button class="tablinks">Kia</button></a>
                    <a href="{{url('mod/Mazda')}}" style="text-decoration: none;"><button class="tablinks">Mazda</button></a>
                    <a href="{{url('mod/Chevrolet')}}" style="text-decoration: none;"><button class="tablinks">Chevrolet</button></a>
                    <a href="{{url('mod/Cadillac')}}" style="text-decoration: none;"><button class="tablinks">Cadillac</button></a>
                </div>


                <div id="London" class="tabcontent col-md-12"><!-- ==start bod one tab ====== -->
                  <div class="col-lg-12" style="min-height: 563px">
                    @foreach($cars as $car)
{{--                          {{$car->cargallery()->first()->url}}--}}
                    <div class="col-sm-4 box-car-co "><!-- box car -->
                        <div class="col-md-12 all-one-car-info">
                          <a href="#"><div class="col-md-12 bic-cor-car"
                                           style="background:url('/public/uploads/{{$car->cargallery()->first()->url}}');
                                                   -webkit-background-size: contain;
                                                   -Moz-background-size: contain;
                                                   -o-background-size: contain;
                                                   background-size: cover;
                                                   height: 120px;
                                                   width: 100%;
                                                   ">
                              </div>
                          </a>
                            <div class="col-md-12 text-center head-cor-info">
                                <div class="height-height">
                                    <a href="{{url('specifications/'.$car->id)}}" style="text-decoration: none"><h2>{{$car->name}}</h2></a>
                                   <a href="/specifications/{{ $car->id }}"><p>{{$car->model}}</p></a>
                                </div>
                            </div>
                            <div class="col-md-12 info-o-cars">
                                <div class="col-md-4 but-info-car text-center"><p>{{$car->construction_year}}</p></div>
                                <div class="col-md-4 but-info-car text-center"><p>{{$car->consumption_of}} KM</p></div>
                                <div class="col-md-4 but-info-car but-price-in-ca text-center"> <p>{{$car->price}}$</p></div>
                            </div>
                        </div>
                    </div><!-- box car -->
                    @endforeach
                </div><!-- ==end bod one tab ====== -->
                <div class="col-xs-12 text-center">

                     <div class="">{{ $cars->appends(request()->query())->links()}}</div>
                </div>  
                </div>


          {{--      <div id="Paris" class="tabcontent">
                    <h3>Paris</h3>
                    <p>Paris is the capital of France.</p>
                </div>--}}


            </div>

        </div>

    </section>
    <!-- ============ start section latest cars ======== -->
    <section class="latest-cars">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 head-of-resc">
                    <p>
                        Laatste auto's in Showroom
                    </p>
                </div>

                <div class="">
                    <div class="all-lat-cars"><!-- start div latest cars -->
                        <?php $i = 1; ?>
                        @foreach($latest as $lat)

                            <div class="col-sm-3 box-car{{$i}}"><!-- star box img slide -->
                                <div class="col-md-12 screen-info-home-recent-c text-center">
                                    <p>{{$lat->name}}</p>
                                </div>
                            </div><!-- end img slide -->
                            <?php  ++$i;?>
                        @endforeach
                        {{--   <div class="col-sm-3 box-car2"><!-- start box img slide -->
                               <div class="col-md-12 screen-info-home-recent-c text-center">
                                   <p>Alfa Romew</p>
                               </div>--}}
                        {{-- </div><!-- end img slide -->
                         <div class="col-sm-3 box-car3"><!-- start box img slide -->
                             <div class="col-md-12 screen-info-home-recent-c text-center">
                                 <p>Alfa Romew</p>
                             </div>
                         </div><!-- end img slide -->--}}
                        {{--<div class="col-sm-3 box-car4"><!-- start box img sl ide -->
                            <div class="col-md-12 screen-info-home-recent-c text-center">
                                <p>Alfa Romew</p>
                            </div>
                        </div><!-- end img slide -->--}}

                    </div><!-- end div latest cars -->
                </div>

            </div><!-- row -->
        </div><!-- container -->
    </section>


@section('js')

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    @endsection
@endsection