@extends('website.partials.master')

@section('title')
    Neem contact met ons op
@endsection
@section('content')

    <iframe class="map-contact"

            frameborder="0"
            src="https://www.google.com/maps/embed/v1/place?q=mc%20car%20royal&key=AIzaSyDGtrTqDMskSNmkOAU-8g1VcmF6a7j4ufI"
            allowfullscreen>
    </iframe>

    <!--=======================Start section Contact===============================-->
    <section class="contact-background">
        <div class="container contact-container">
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
            <form method="post" action="{{route('contact.store')}}">
                {{csrf_field()}}
                <div class="row">

                    <div class="col-md-12 buy-title2"><h3>Contact</h3></div>
                    <div class="col-md-12">
                        <h5 class="p-style">Vul onderstaand formulier in om contact met ons op te nemen.</h5>
                    </div>
                    <div class="col-md-12">
                        <h5 class="p-style margin-style">Concerns</h5>
                        <p class="white-color">
                            @foreach($contact as $s)
                                {{$s->name}}
                            @endforeach</p>
                    </div>
                    <div class="col-md-12 white-color">
                        <input type="text" name="name" placeholder="naam" class="input-style">
                        <input type="email" name="email" placeholder="E-mail" class="input-style">
                        <input type="number" name="phone" placeholder="Telefoon nummer" class="input-style">
                        <input type="text" name="message" placeholder="Bericht" class="input-style">
                        <input type="hidden" name="car_name" value=" @foreach($contact as $s)
                            {{$s->name}}
                        @endforeach">
                    </div>
                    <div class="col-md-12" style="text-align: right">
                        <button class="btn col-md-offset-1 search-buy-button send-button">
                            Verzenden <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </section>

@endsection