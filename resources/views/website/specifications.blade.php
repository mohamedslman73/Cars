@extends('website.partials.master')

@section('title')
    Bestek
    @endsection

@section('content')



    <!--================ start section car overview ================-->

    <section class="car-overview">
        <div class="container car-container">
            <div class="row">
                <div class="col-md-12 overview-background">
                    <div class="col-md-6 first-section">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h4 class="pull-left car-model">{{$car->name}}</h4>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h4 class="pull-right car-price">$ <span>{{$car->price}}</span></h4>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h4 class="pull-left car-model">{{$car->model}}</h4>
                        </div>

                        <div class="col-md-12">
                            <p>
                                <i class="p-style">{{$car->description}}</i>
                            </p>
                        </div> <!--end description div col-12-->
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <!--<div class="col-md-12">-->
                            <h5 class="p-style">Bouwjaar</h5>
                            <!--</div>-->
                            <!--<div class="col-md-12">-->
                            <h4 class="car-model">{{$car->construction_year}}</h4>
                            <!--</div>-->
                            <!--<div class="col-md-12">-->
                            <h5 class="p-style">transmissie</h5>
                            <!--</div>-->
                            <!--<div class="col-md-12">-->
                            <h4 class="car-model">{{$car->transmission}}</h4>
                            <h5 class="p-style">Lichaamstype</h5>
                            <!--</div>-->
                            <!--<div class="col-md-12">-->
                            <h4 class="car-model">{{$car->body_type}}</h4>
                            <!--</div>-->
                            <!--<div class="col-md-12">-->

                            <!--</div>-->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <!--<div class="col-md-12">-->
                            <h5 class="p-style">{{$car->mileage}}</h5>
                            <!--</div>-->
                            <!--<div class="col-md-12">-->
                            <h4 class="car-model">1.362 km</h4>
                            <!--</div>-->
                            <!--<div class="col-md-12">-->
                            <h5 class="p-style">Brandstof</h5>
                            <!--</div>-->
                            <!--<div class="col-md-12">-->
                            <h4 class="car-model">{{$car->fuel}}</h4>
                            <!--</div>-->
                            <h5 class="p-style">Decoratie</h5>
                            <!--</div>-->
                            <!--<div class="col-md-12">-->
                            <h4 class="car-model">{{$car->decoration}}</h4>

                        </div>

                    </div> <!--End col-6 whole description-->

                    <div class="col-md-6 col-sm-12 col-xs-12 slider-for-style">

                        <div class="slider-for">
                            @foreach(@App\CarGalleryImage::where('car_id',$car->id)->get() as $aaa)

                            <div><img class="slider-for-size" src="/public/uploads/{{$aaa->url}}" > </div>

                                @endforeach
                        </div>
                    </div> <!--Gallery div-->
                </div> <!--end overview-background-->
                 {{-- {{dd($last)}}--}}
                {{--{{dd(url()->previous())}}--}}
                @if(url()->previous() == url('filter1') or url()->previous() == $lasturl or url()->previous() == url('filter')
                or url()->previous() == url('filter?page=2') /*or url()->previous() == $last*/ )
                <div class="col-md-6 col-sm-12 col-xs-12 contact-rent-section">
                    <div class="col-md-12 contact-car tabs-scrat1 focus-change12">
                        <a href="{{url('/contact-us/'.$car->id)}}">
                            <div class="col-md-12">
                                <h5 class="car-model font-size-contactrent">Koop nu<span class="fa fa-angle-right pull-right car-model"></span></h5>
                            </div></a>
                    </div>
                   {{-- <a href="{{url('/rent/'.$car->id)}}">--}}
                        <div class="col-md-12 rent-car tabs-scrat1">
                            <div class="col-md-12">
                                <h5 class="car-model font-size-contactrent" style="visibility: hidden;">Huur deze auto<span class="fa fa-angle-right pull-right car-model"></span></h5>
                            </div>
                        </div>{{--</a>--}}
                </div>
                    @else
                    <div class="col-md-6 col-sm-12 col-xs-12 contact-rent-section">
                        <div class="col-md-12 contact-car tabs-scrat1 focus-change12">
                            <a href="{{url('/contact-us/'.$car->id)}}">
                                <div class="col-md-12">
                                    <h5 class="car-model font-size-contactrent">Koop nu<span class="fa fa-angle-right pull-right car-model"></span></h5>
                                </div></a>
                        </div>
                         <a href="{{url('/rent/'.$car->id)}}">
                        <div class="col-md-12 rent-car tabs-scrat1">
                            <div class="col-md-12">
                                <h5 class="car-model font-size-contactrent">Huur deze auto<span class="fa fa-angle-right pull-right car-model"></span></h5>
                            </div>
                        </div></a>
                    </div>

                @endif

                <div class="slider-nav col-md-6 col-sm-12 col-xs-12 slider-nav-style">

                    @foreach(@App\CarGalleryImage::where('car_id',$car->id)->get() as $aaa)

                        <div>
                            <img src="/public/uploads/{{$aaa->url}}" width="160" height="112">
                        </div>

                    @endforeach
                </div>



            </div> <!-- end row-->
        </div>   <!-- end container-->
    </section>



    <!-- ===============start section specifications=================-->

    <section class="spec">
        <div class="container container-spec">
            <div class="row">
                <div class="col-md-12">
                    <h2>bestek</h2>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 h5-style ">
                    <div class="col-md-offset-1  h5-style ">
                        <div class="col-md-12">
                            <h5>Decoratie</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>{{$car->decoration}}</h4>
                        </div>
                        <div class="col-md-12">
                            <h5>Gewicht (leeg)</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>{{$car->weight}} kg</h4>
                        </div>
                        <div class="col-md-12">
                            <h5>Verbruik snelweg</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>{{$car->consumption_highway}} km</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 h5-style ">
                    <div class="col-md-12 h5-style">
                        <div class="col-md-12">
                            <h5>Kleur</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>{{$car->colour}}</h4>
                        </div>
                        <div class="col-md-12">
                            <h5>CO2-uitstoot</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>{{$car->c02_emission}} gm/kg</h4>
                        </div>
                        <div class="col-md-12">
                            <h5>Energie label</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>
                                <span class="fa-stack">
                              <i class="fa fa-tag fa-stack-2x inside-stack-wa7shy"></i>
                              <i class=" fa-stack-1x inside-label">{{$car->energy_label}}</i>
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 h5-style ">
                    <div class="col-md-12 h5-style">
                        <div class="col-md-12">
                            <h5>Type verf</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>-</h4>
                        </div>
                        <div class="col-md-12">
                            <h5>Gewicht (leeg)</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>{{$car->weight}} kg</h4>
                        </div>
                        <div class="col-md-12">
                            <h5>VAT margin</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>{{$car->vat_margin}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 h5-style ">
                    <div class="col-md-12 h5-style">
                        <div class="col-md-12">
                            <h5>Cilinder capaciteit</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>{{$car->cylinder_capacity}} CC</h4>
                        </div>
                        <div class="col-md-12">
                            <h5>Gewicht (leeg)</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>{{$car->weight}} kg</h4>
                        </div>
                        <div class="col-md-12">
                            <h5>Nieuwe prijs</h5>
                        </div>
                        <div class="col-md-12">
                            <h4>$ <span>{{$car->new_price}}</span></h4>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===============start section options and accessories=============-->

    <section class="options-acce">
        <div class="container container-options">
            <div class="row">
                <div class="col-md-12">
                    <h2>Optie & accessoires</h2>
                </div>
                @foreach(@App\Accessory::where('car_id',$car->id)->get() as $accessory)



                <div class="col-md-4  col-sm-6 col-xs-12">
                    <ul class="list-style-fix">
                        <li class="padding-text"><i class="fa fa-circle circle-font-size" aria-hidden="true"></i> {{$accessory->accessory_name}}</li>

                    </ul>
                </div>

                @endforeach
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>ontkenning</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <p>alles is in het werk gesteld om de informatie op deze website zo accuraat en actueel mogelijk weer te geven. Fouten kunnen echter nooit worden uitgesloten. vertrouw daarom niet op deze informatie. maar controleer de items die van invloed kunnen zijn op uw beslissing wanneer u koopt</p>
                </div>
            </div> <!--end row-->
        </div> <!--end container-->
    </section>

 @endsection