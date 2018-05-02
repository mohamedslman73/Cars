@extends('website.partials.master')

@section('title')
    About Us
    @endsection
@section('content')
    <section>
        <div class="cover1 about-cover container">

            <div class="cover-text1">
                <div class="control-text" >
                    <h1 class="responsive-font"></h1>
                    <p class="lead lead-about">
                        More than over 20.000 vehicles available
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--=======================Start section about===============================-->
    <div class="container-media1 about-about" id="about">

        <section  class=" first-about">
            <div class="container">
                <div class="row">
                    <h2 class="about-title">About us</h2>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-us-col-3 ">
                        @foreach($about as $abouts)
                        <img class="images-about" src="{{url('public/uploads/'.$abouts->image)}}" alt="Diamond" width="70">

                           {{-- <img src="{{url('website/img/'.$sliders->img)}}" width="150px" height="100px" alt="img">--}}
                            <h4 class="margin-wa7shy" style="margin-bottom: 3%">{{$abouts->title}}</h4>
                        <p style="margin-bottom: 3%">{{$abouts->description}}</p>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>


    </div>

    @endsection