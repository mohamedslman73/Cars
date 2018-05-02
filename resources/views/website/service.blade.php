@extends('website.partials.master')

@section('title')
    service
    @endsection
@section('content')

   {{-- {{dd(Home::getdata())}}--}}
    <section>
        <div class="cover1 about-cover container">

            <div class="cover-text1">
                <div class="control-text1" >
                    <h1 class="responsive-font"></h1>
                    <p class="lead lead-about">
                        More than over 20.000 vehicles available
                    </p>
                </div>
            </div>
        </div> <!--end container-->
    </section>
    <!--=======================Start section about===============================-->
    <div class="container-media1 about-about " id="about">
        {{--<section  class=" first-about container-media1 about-about border1">--}}
            {{--<div class="container ">--}}
                {{--<div class="row ">--}}
                    {{--<div class="text-center col-md-12 padding-fix" >--}}
                        {{--<h2 class="about-title col-md-12 titles-1 padding-fix">Service</h2>--}}
                    {{--</div>--}}
                    {{--@foreach($services as $service)--}}
                    {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-us-col-3 padding-fix">--}}
                        {{--<div class="col-md-2 padding-fix">--}}
                            {{--<i class="{{$service->icon}}" aria-hidden="true"></i>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-10 padding-fix">--}}

                            {{--<h4 class="col-md-12 subtitles-title padding-fix font-size-correct1">{{$service->title}}</h4>--}}
                            {{--<p class="col-md-12 subtitles-title padding-fix">{{$service->description}}</p>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div> <!--end row-->--}}
            {{--</div> <!--end container-->--}}
        {{--</section>--}}
        <div class="container-media1 about-about " id="about">
            <section  class=" first-about container-media1 about-about border1">
                <div class="container ">
                    <div class="row ">
                        <div class="text-center col-md-12 padding-fix" >
                            <h2 class="about-title col-md-12 titles-1 padding-fix">Service</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-us-col-3 padding-fix">
                            <div class="col-md-2 padding-fix">
                                <i class="fa fa-pencil-square-o font-awesome-style" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-10 padding-fix">
                                <h4 class="col-md-12 subtitles-title padding-fix font-size-correct1">Conditions</h4>
                                <p class="col-md-12 subtitles-title padding-fix">For almost 10 years we have been a trusted address in westfriesland.
                                    We generally trade young used cars, including ex-lease cars.
                                    For almost 10 years we have been a trusted address in westfriesland.
                                    We generally trade young used cars, including ex-lease cars.For almost 10 years we have been a trusted address in westfriesland.
                                    We generally trade young used cars, including ex-lease cars.</p>
                                <p class="col-md-12 subtitles-title padding-fix">For almost 10 years we have been a trusted address in westfriesland.
                                    We generally trade young used cars, including ex-lease cars.
                                    For almost 10 years we have been a trusted address in westfriesland.
                                    We generally trade young used cars, including ex-lease cars.
                            </div>
                        </div>
                    </div> <!--end row-->
                </div> <!--end container-->
            </section>
            <section  class=" second-about border1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-us-col-3 padding-fix">
                            <div class="col-md-2 padding-fix">

                        <span class="fa-stack font-awesome-style1 ">
                          <i class="fa fa-circle-thin fa-stack-2x"></i>
                          <i class="fa fa-check fa-stack-1x"></i>
                        </span>

                            </div>
                            <div class="col-md-10 padding-fix">
                                <h4 class="col-md-12 subtitles-title padding-fix font-size-correct1">Test drive</h4>
                                <p class="col-md-12 subtitles-title padding-fix">A test drive is possible, but we want to be the first to have a personal meeting
                                    in which all aspects are discussed with you.</p>
                                <p class="col-md-12 subtitles-title padding-fix">Given the risks during a test drive, we ask you for a little understanding of the following rules:</p>
                                <ol class="subtitles-title col-md-12 padding-fix">
                                    <li>Your driving license is scanned and checked.</li>
                                    <li>This is stored in our administration.</li>
                                    <li>A test drive form is filled in and signed.</li>
                                    <li>We are obliged to drive with you in the relevant vehicle.</li>
                                </ol>
                            </div>
                        </div>
                    </div> <!--end row-->
                </div> <!--end container-->
            </section>
            <section  class=" first-about border1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-us-col-3 padding-fix">
                            <div class="col-md-2 col-xs-12 padding-fix">
                                <i class="fa fa-wrench font-awesome-style wa7shy1" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-10 padding-fix">
                                <h4 class="col-md-12 subtitles-title padding-fix font-size-correct1 ">Warranty packages</h4>
                                <p class="col-md-12 subtitles-title1 padding-fix">MC Auto royal offers you the possibility to make a choice from one of the two guarantee packages described below</p>
                                <div class="col-md-6 padding-fix">
                                    <div class="col-md-12 warranty-background padding-fix first-warranty">
                                        <div class="col-md-8 subtitles-title wa7shy-padding padding-fix font-size-correct"><p>Warranty packages</p></div>
                                        <div class="col-md-4 wa7shy-background padding-fix"><p>From $ <span>395</span>.</p></div>
                                        <div class="col-md-12 subtitles-title wa7shy-padding1 padding-fix"><p>MC Auto royal offers you the possibility to make a choice
                                                from one of the two guarantee packages described below</p></div>
                                    </div>
                                </div>
                                <div class="col-md-6 padding-fix">
                                    <div class="col-md-12 warranty-background padding-fix">
                                        <div class="col-md-8 subtitles-title wa7shy-padding padding-fix font-size-correct"><p>Warranty packages</p></div>
                                        <div class="col-md-4 wa7shy-background padding-fix"><p>From $ <span>395</span>.</p></div>
                                        <div class="col-md-12 subtitles-title wa7shy-padding1 padding-fix"><p>MC Auto royal offers you the possibility to make a choice
                                                from one of the two guarantee packages described below</p></div>
                                    </div>
                                </div>
                                <div class="col-md-12 subtitles-title padding-fix" >
                                    <p class="subtitles-title">For both packages, if the maintenance is carried out within 3 months or 5000 kilometers before purchase,
                                        no maintenance for delivery takes place.</p>
                                    <p class="subtitles-title">Replacement transport does not apply to both packages.</p>
                                    <p class="subtitles-title">All warranty work is carried out in our workshop in Grootebroek, unless expressly agreed otherwise in writing.</p>
                                    <p class="subtitles-title">Supplementary provisions:</p>
                                    <p class="subtitles-title">4 cylinder engines above 140 hp: 3 months <i class="fa fa-eur" aria-hidden="true"></i>
                                        <span>695</span>, - and 6 months <i class="fa fa-eur" aria-hidden="true"></i>
                                        <span>1.295</span>.</p>
                                    <p class="subtitles-title">6 cylinder engines above 140 hp: 3 months <i class="fa fa-eur" aria-hidden="true"></i>
                                        <span>695</span>, - and 6 months <i class="fa fa-eur" aria-hidden="true"></i>
                                        <span>1.495</span>.</p>
                                    <p class="subtitles-title">8 cylinder engines above 140 hp: 3 months <i class="fa fa-eur" aria-hidden="true"></i>
                                        <span>995</span>, - and 6 months <i class="fa fa-eur" aria-hidden="true"></i>
                                        <span>1.995</span>.</p>
                                    <p class="subtitles-title">All amounts including VAT.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!--end row-->
                </div> <!--end container-->
            </section>
            <section class="second-about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-us-col-3 padding-fix">
                            <h5 class="col-md-12 padding-fix">Some of the used vehicles we offer are still within the manufacturer's warranty.
                                The rules of the manufacturer guarantee apply.</h5>
                        </div>
                    </div> <!--end row-->
                </div> <!--end container-->
            </section>
            <!--</div>-->





@endsection