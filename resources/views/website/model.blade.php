@extends('website.partials.master')
@section('title')
    Model Search
    @endsection
@section('content')
    <section class="main-home">
        <div class="screen-home-a">
            <div class="screen-home-sec">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12 screen-info-home container-fluid"><!-- screen para graph -->
                            <h2>More Over 20,000 Vehicle Available</h2>
                        </div><!-- end screen para graph -->


                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- screen-home-a -->
        </div><!-- screen-home-a -->
    </section>


{{--    @foreach($car as $aa)

    @endforeach

    @foreach(@App\Car::where('model',$aa->model)->get() as $asd)
        {{$asd->model}}<br>
        {{$asd->name}}<br>
    @endforeach

   @foreach($asd->accessories as $access)
        {{$access->accessory_name}} <br>
        @endforeach--}}





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


                 @foreach($car as $cars)
                    <div class="col-sm-4 box-car-co "><!-- box car -->
                        <div class="col-md-12 all-one-car-info">
                            <div class="col-md-12 bic-cor-car"
                                             style="background:url('/public/uploads/{{$cars->cargallery()->first()->url}}');
                                                     -webkit-background-size: contain;
                                                     -Moz-background-size: contain;
                                                     -o-background-size: contain;
                                                     background-size: cover;
                                                     height: 120px;
                                                     width: 100%;
                                                     ">
                                </div>
                            <div class="col-md-12 text-center head-cor-info">
                                <div>
                                    <h2>{{$cars->model}}</h2>
                                    <p><a href="/specifications/{{$cars->id}}"><p>{{$cars->name}}</p></a></p>
                                </div>
                            </div>
                            <div class="col-md-12 info-o-cars">
                                <div class="col-md-4 but-info-car text-center"><p>{{$cars->construction_year}}</p></div>
                                <div class="col-md-4 but-info-car text-center"><p>{{$cars->c02_emission}} KM</p></div>
                                <div class="col-md-4 but-info-car text-center"> <p>${{$cars->price}}</p></div>
                            </div>
                        </div>
                    </div><!-- box car -->

@endforeach
                </div><!-- ==end bod one tab ====== -->


            </div>
        </div>
    </section>


@endsection