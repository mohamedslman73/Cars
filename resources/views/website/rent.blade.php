@extends('website.partials.master')

@section('title')
    Huur
@endsection
@section('content')

    <section class=" ">
        <div class="container ">
            <div class="row ">



                <div  class="col-sm-3 col-xs-12 all-bod-rent-car"><!--== start col 3 ==-->
                    <style>

                        .img-car{
                            height: 140px;
                            width: 140px;
                            border-radius: 50%;
                            @foreach($car as $a)
                            background:url('/public/uploads/{{$a->cargallery()->first()->url}}') no-repeat center;
                           /* background: url("../images/car-background.jpeg") no-repeat center;*/
                            @endforeach
                            -webkit-background-size: contain;
                            -Moz-background-size: contain;
                            -o-background-size: contain;
                            background-size: cover;
                            margin: 0 auto;
                            margin-top: 30px;
                            margin-bottom: 30px;
                        }

                    </style>
                    <div class="col-md-12 text-center"><!-- car logo -->
                        <div class="img-car">
                        </div>
                    </div><!--== end car logo ==-->
                    @foreach($car as $a)
                    <h4 class="bold"><strong></strong>{{$a->name}}</h4>

                    <p class="para-c-col3">
                       {{$a->description}}
                    </p>


                    <h4 class="bold"><strong>Oppakken</strong></h4>
                    <p class="para-c-col3">
                        {{$pickup_date}}
                    </p>

                        <h4 class="bold"><strong>Plaats</strong></h4>
                        <p class="para-c-col3">
                            {{$location}}
                        </p>

                    <h4 class="bold"><strong>terugkeer</strong></h4>
                    <p class="para-c-col3">

                        {{$return_date}}
                     </p>

                     <h4 class="bold"><strong>Huur periode</strong></h4>
                    <p class="para-c-col3">
                        {{$diff_in_days}}
                    </p>


                    <h4 class="bold"><strong>Voertuig functies</strong></h4>
                    <p class="para-c-col3">
                     {{$a->	model}},{{$a->consumption_of}},{{$a->consumption_highway}}
                    </p>

                    <h4 class="bold"><strong>Capaciteit</strong></h4>
                    <p class="para-c-col3">
                        {{$a->cylinder_capacity}}
                    </p>

                    <h4 class="bold"><strong>Minimale bestuurder sleeftijd</strong></h4>
                    <p class="para-c-col3">
                   {{$a->minimum_driver_age}}
                    </p>


                    @endforeach
                    <div class="links-bot-col">
                        <p>Verandering</p>
                        <p>Voorwaarden</p>
                        <p>Verhuur informatie</p>
                        <p>Voorwaarden</p>
                    </div>
                </div><!-- start col 3 -->


                <div class="col-sm-9 col-xs-12 all-col9-bod"><!-- == start section col 9 == -->
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

                    <form method="post" action="{{route('test.store')}}">
                      {{csrf_field()}}
                        <input type="hidden" name="location" value="{{$location}}">
                        <input type="hidden" name="pickup_date" value="{{$pickup_date}}">
                        <input type="hidden" name="pickup_time" value="{{$pickup_time}}">
                        <input type="hidden" name="return_date" value="{{$return_date}}">
                        @foreach($car as $na)
                        <input type="hidden" name="car_name" value="{{$na->name}}">
                        @endforeach
                    <div class=" box-cont-bod-r-c">
                        <h3><strong>Bestuurders detail</strong></h3>
                        <div class="col-xs-12 bosx-ins-box-r"><!--== strat first box ==-->

                            <div class=""><!-- start drivers name -->
                                <div class="col-md-12">
                                    <div class="col-xs-12">
                                        <h4>Naam van de bestuurder</h4>
                                    </div>
                                </div>
                                <div class="col-xs-12"><!-- start input -->
                                    <p class="col-xs-4">Titel / bedrijf</p>
                                    <select class="col-xs-8">
                                        <option value="Mr">Dhr</option>
                                        <option value="Mrs">Mvr</option>
                                        <option value="Company">Bedrijf</option>
                                    </select>
                                </div><!-- end input -->
                                <div class="col-xs-12"><!-- start input -->
                                    <p class="col-xs-4">Voor naam</p>
                                    <input type="text" value="{{old('first_name')}}" name="first_name" class="col-xs-8"/>
                                </div><!-- end input -->
                                <div class="col-xs-12"><!-- start input -->
                                    <p class="col-xs-4">Achter naam</p>
                                    <input type="text" value="{{old('last_name')}}" class="col-xs-8" name="last_name">
                                </div><!-- end input -->
                            </div><!-- end drivers name -->


                            <div class=""><!-- start Contact info  -->
                                <div class="col-md-12">
                                    <div class="col-xs-12">
                                        <h4>Contact gegevens</h4>
                                    </div>
                                </div>
                                <div class="col-xs-12"><!-- start input -->
                                    <div class="col-xs-4"> <p class="">Bedrijfs naam</p></div>
                                    <div class="col-xs-4 sel-op-sec-op">
                                    <input type="text" value="{{old('company_title')}}" name="company_title">
                                </div><!-- end input -->
                                <div class="col-xs-12"><!-- start input -->
                                    <p class="col-xs-4">E-mail adres</p>
                                    <input type="email" value="{{old('email')}}" placeholder="enter" name="email" class="col-xs-8"/>
                                </div><!-- end input -->
                                    <div class="col-xs-12"><!-- start input -->
                                        <p class="col-xs-4">Telefoon nummer</p>
                                        <input type="number" value="{{old('phone')}}" placeholder="Enter Phone number" name="phone" class="col-xs-8"/>
                                    </div><!-- end input -->
                            </div><!-- end contact info  -->



                            <div class="col-xs-12">
                                <div class="col-xs-12">
                                    <h4>Contact gegevens</h4>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <input type="checkbox" class="col-xs-1"><p class="col-xs-11">Ik zal 25 jaar of ouder zijn op het moment van de huur.</p>
                            </div>
                        </div><!--== end first box ==-->

                        <div class="col-md-12 min-foot-box" style="padding: 0px" >

                        </div>

                    </div><!-- end drriver detail -->

                        <div  class="col-xs-12 bosx-ins-box-r"><!--== start second box ==-->
                            <div class="col-xs-12" style="padding: 0px">
                                <div class="col-xs-6"><p>Subtotaal van het voertuig:</p></div>
                                @foreach($car as $a)
                                    <div class="col-xs-6"><p class="pull-right">{{$diff_in_days*$a->new_price}} $</p></div>

                            </div>
                            <div class="col-xs-6"><p>Belast ingen </p></div>
                            <div class="col-xs-6"><p class="pull-right">{{$diff_in_days*$a->new_price*.21}} $</p></div>

                            <div class="col-xs-6 tit-boo-n-w">
                                <h4><strong>Totaal</strong></h4>
                            </div>
                            <div class="col-xs-6 tit-boo-n-w">
                                <p class="pull-right">{{$diff_in_days*$a->new_price+$diff_in_days*$a->new_price*.21}}$</p>
                            </div>
                            @endforeach
                            <div class="col-xs-12" style="visibility:hidden"><p>Huur periode:<span>{{$diff_in_days}}day</span></p></div>
                            {{--   @foreach($car as $a)
                               <div class="col-xs-6"><p>Total in local currency</p></div>
                               <div class="col-xs-6"><p class="pull-right">$$ {{$a->new_price}}</p></div>
                               @endforeach--}}

                            <div class="col-md-12">
                                <div class="butt-bok-now text-center">
                                    <button>Boek nu</button>
                                </div>
                            </div>

                        </div><!--==end second box ==-->

                </div><!--== end col -9 ==-->
                  </form>
            </div><!-- row -->
        </div><!-- container -->
        </div>
    </section>

    @endsection
