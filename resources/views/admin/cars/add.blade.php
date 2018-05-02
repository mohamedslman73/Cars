@extends('admin.layout.layout')
@section('title')
    Dashbord
@endsection
@section('css')

@endsection
@section('header')

@endsection

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                General Form Elements
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admins/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{url('admins/cars')}}">Cars</a></li>
                <li class="active">Add</li>
            </ol>
        </section>

        @if (\Session::has('warning'))
            <div class="col-xs-12">
                <div class="alert alert-warning">
                    <strong> {{ session()->get('warning') }}</strong>
                </div>
            </div>
        @endif
        @if (\Session::has('pass'))
            <div class="col-xs-12">
                <div class="alert alert-warning">
                    <strong>warning!</strong> please put the same pass
                </div>
            </div>
        @endif
        @if (\Session::has('success'))
            <div class="col-xs-12">
                <div class="alert alert-success">
                    <strong>success</strong> data inseret successfully
                </div>
            </div>
    @endif
    <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cars</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                    {{--    @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif--}}


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

                        <form role="form" action="{{url('admins/cars/')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field () }}
                            <div class="box-body">
{{--                                <div class="form-group">
                                    <label for="exampleInputEmail1">privilage</label>
                                    <select class="form-control" name="privalege" id="exampleInputEmail1">
                                        <option value="admin">Admin</option>
                                        <option value="users">user</option>
                                    </select>
                                </div>--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="name" class="form-control" value="{{old('name')}}" name="name" id="exampleInputEmail1" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Selling Price</label>
                                    <input type="text" class="form-control" value="{{old('price')}}" name="price" id="exampleInputEmail1" placeholder="Enter selling price €">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Model</label>

                                    <select class="form-control" name="model" id="exampleInputEmail1"  value="{{old('model')}}">
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
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control" name="description" value="{{old('description')}}"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Body Type</label>
                                    <select class="form-control" name="body_type" id="exampleInputEmail1" value="{{old('body_type')}}">
                                        <option value="Hatchback">Hatchback</option>
                                        <option value="Coupe">Coupe</option>
                                        <option value="Suv">Suv</option>
                                        <option value="Stationwagon">Stationwagon</option>
                                        <option value="Sedan">Sedan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">construction_year</label>
                                    <input type="date" class="form-control" name="construction_year" value="{{old('construction_year')}}" id="exampleInputEmail1" placeholder="Enter construction_year">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">colour</label>
                                <select class="form-control" name="colour" id="exampleInputEmail1" value="{{old('colour')}}">
                                    <option value="Rood">Rood</option>
                                    <option value="Zwart">Zwart</option>
                                    <option value="Groen">Groen</option>
                                    <option value="Geel">Geel</option>
                                    <option value="bruin">bruin</option>
                                    <option value="LeightYellow">LeightYellow</option>
                                    <option value="oranje">oranje</option>
                                    <option value="Pruim">Pruim</option>
                                    <option value="grijs">grijs</option>
                                    <option value="roze">roze</option>
                                    <option value="Purper">Purper</option>
                                    <option value="roos">roos</option>
                                    <option value="zilver">zilver</option>
                                    <option value="plasma paars">plasma paars</option>
                                    <option value="wolkwit">wolkwit</option>
                                    <option value="donder grijs">donder grijs</option>
                                    <option value="kiwi groen">kiwi groen</option>
                                    <option value="saffierblauw">saffierblauw</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">mileage</label>
                                    <input type="text" class="form-control" name="mileage" id="exampleInputEmail1" placeholder="Enter Colour" value="{{old('mileage')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">transmission</label>

                                <select name="transmission" class="form-control" id="exampleInputEmail1" value="{{old('transmission')}}">
                                    <option value="Automatisch (AT)">Automatisch (AT)</option>
                                    <option value="Handleiding (AT)">Handleiding (AT)</option>
                                    <option value="Geautomatiseerde handmatige verzending (AM)">Geautomatiseerde handmatige verzending (AM)</option>
                                    <option value="Continu Variabele transmissie (CVT)">Continu Variabele transmissie (CVT)</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label>fuel</label>

                                 <select class="form-control" name="fuel" id="exampleInputEmail1" value="{{old('fuel')}}">
                                     <option value="benzine">benzine</option>
                                     <option value="Diesel">diesel</option>
                                     <option value="elektrisch">elektrisch</option>
                                     <option value="hybride">hybride</option>
                                 </select>
                                </div>
                                <div class="form-group">
                                    <label>weight</label>
                                    <input type="text" class="form-control" name="weight" value="{{old('weight')}}" id="exampleInputEmail1" placeholder="Enter weight  /kg">
                                </div>
                                <div class="form-group">
                                    <label>	decoration</label>
                                    <input type="text" class="form-control" name="decoration" value="{{old('decoration')}}" id="exampleInputEmail1" placeholder="Enter decoration">
                                </div>

                                <div class="form-group">
                                    <label>	cylinder_capacity</label>
                                    <input type="text" class="form-control" name="cylinder_capacity" value="{{old('cylinder_capacity')}}" id="exampleInputEmail1" placeholder="Enter cylinder_capacity cc">
                                </div>
                                <div class="form-group">
                                    <label>c02_emission</label>
                                    <input type="text" class="form-control" name="c02_emission" value="{{old('c02_emission')}}" id="exampleInputEmail1" placeholder="Enter c02_emission g/km">
                                </div>
                                <div class="form-group">
                                    <label>consumption average</label>
                                    <input type="text" class="form-control" name="consumption_of" value="{{old('consumption_of')}}" id="exampleInputEmail1" placeholder="Enter consumption_of l/100 km">
                                <div class="form-group">
                                    <label>consumption_city</label>
                                    <input type="text" class="form-control" name="consumption_city" value="{{old('consumption_city')}}" id="exampleInputEmail1" placeholder="Enter consumption_city l/100 km">
                                </div>
                                <div class="form-group">
                                    <label>consumption_highway</label>
                                    <input type="text" class="form-control" name="consumption_highway" value="{{old('consumption_highway')}}" id="exampleInputEmail1" placeholder="Enter consumption_highway l/100 km">
                                </div>
                                <div class="form-group">
                                    <label>energy_label</label>
                                  <select class="form-control" name="energy_label" value="{{old('energy_label')}}">
                                     <option value="A">A</option>
                                     <option value="B">B</option>
                                     <option value="C">C</option>
                                     <option value="D">D</option>
                                     <option value="E">E</option>
                                     <option value="F">F</option>
                                     <option value="G">G</option>

                                 </select>
                                </div>
                                <div class="form-group">
                                    <label>vat_margin</label>
                                    <input type="text" class="form-control" name="vat_margin" value="{{old('vat_margin')}}" id="exampleInputEmail1" placeholder="Enter vat_margin">
                                </div>
                                <div class="form-group">
                                    <label>Rent Price</label>
                                    <input type="text" class="form-control" name="new_price" value="{{old('new_price')}}" id="exampleInputEmail1" placeholder="Enter Rent Price €">
                                </div>
                                <div class="form-group">
                                    <label>	minimum driver age</label>
                                    <input type="text" class="form-control" name="minimum_driver_age" value="{{old('minimum_driver_age')}}" id="exampleInputEmail1" placeholder="Enter minimum_driver_age">
                                </div>

                                    <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" name="images[]" value="{{old('images[]')}}" id="exampleInputFile" multiple>
                                </div>


                           <!-- select 2 -->


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Accessories</label>
                                    <select class="form-control" name="access[]" value="{{old('access[]')}}" id="sel_acss" multiple>
                                   <option value="Aas">Aas</option>
                                   <option value="achterkant uitzicht camera">achterkant uitzicht camera</option>
                                       <option value="Alarm klasse 1 (startonderbreker)">Alarm klasse 1 (startonderbreker)</option>
                                   <option value="Audio installatie met CD speler">Audio installatie met CD speler</option>
                                   <option value="bruikbaar stuur">bruikbaar stuur</option>
                                   <option value="Airbag bestuurder">Airbag bestuurder</option>
                                   <option value="Binnen buiten. auto. verduistering">Binnen buiten. auto. verduistering</option>
                                   <option value="Buitenspiegels elektrisch verstelbaar">Buitenspiegels elektrisch verstelbaar</option>
                                   <option value="Centrale deurvergrendeling met afstandsbediening">Centrale deurvergrendeling met afstandsbediening</option>
                                   <option value="EBD">EBD</option>
                                   <option value="Elektrische ramen voor en achter">Elektrische ramen voor en achter</option>
                                   <option value="Hoofdairbag (s) achter">Hoofdairbag (s) achter</option>
                                   <option value="Lederen versnellingspook">Lederen versnellingspook</option>
                                   <option value="Multifunctioneel wiel">Multifunctioneel wiel</option>
                                   <option value="Navigatiefabriek"> Navigatiefabriek</option>
                                       <option value="Parkeersensor voor en achter">Parkeersensor voor en achter</option>
                                   <option value="Parkeersensor voor en achter">Parkeersensor voor en achter</option>
                                   <option value="radio cd-speler">radio cd-speler</option>
                                   <option value="Sportbesturing">Sportbesturing</option>
                                   <option value="Stuurbekrachtiging snelheid afhankelijk">Stuurbekrachtiging snelheid afhankelijk</option>
                                   <option value="Vermoeidheidsherkenning">Vermoeidheidsherkenning</option>
                                   <option value="Zij airbag (s) voor">Zij airbag (s) voor</option>
                                   <option value="Buikspieren">Buikspieren</option>
                                   <option value="Airconditioning (automatisch)">Airconditioning (automatisch)</option>
                                   <option value="Armsteun voor">Armsteun voor</option>
                                        <option value="Bandenspanningscontrolesysteem">Bandenspanningscontrolesysteem</option>
                                        <option value="Bekleding Alcantara">Bekleding Alcantara</option>
                                        <option value="Bestuurdersstoel in hoogte verstelbaar">Bestuurdersstoel in hoogte verstelbaar</option>
                                        <option value="Buitenspiegels elektrisch opvouwbaar">Buitenspiegels elektrisch opvouwbaar</option>
                                        <option value="Bumpers in carrosseriekleur">Bumpers in carrosseriekleur</option>
                                        <option value="Derde remlicht">Derde remlicht</option>
                                        <option value="Elektrische ramen achter">Elektrische ramen achter</option>
                                        <option value="Esp">Esp</option>
                                        <option value="Hoofdairbag (s) voor">Hoofdairbag (s) voor</option>
                                        <option value="Lederen stuur">Lederen stuur</option>
                                        <option value="LED verlichting">LED verlichting</option>
                                        <option value="Multimedia voorbereiding">Multimedia voorbereiding</option>
                                        <option value="Navigatiesysteem volledige kaart">Navigatiesysteem volledige kaart</option>
                                        <option value="Passagiers airbag">Passagiers airbag</option>
                                        <option value="Regen sensor">Regen sensor</option>
                                        <option value="Start / stop systeem">Start / stop systeem</option>
                                        <option value="Stuur verstelbaar">Stuur verstelbaar</option>
                                        <option value="Voorstoelen verwarmd">Voorstoelen verwarmd</option>
                                        <option value="Achterstoelen neerklapbaar in delen">Achterstoelen neerklapbaar in delen</option>
                                        <option value="Airconditioning met elektronische bediening">Airconditioning met elektronische bediening</option>
                                        <option value="Asr">Asr</option>
                                        <option value="Bas">Bas</option>
                                        <option value="Bekledingsleer">Bekledingsleer</option>
                                        <option value="Bi-xenonkoplampen (+ koplampreiniging)">Bi-xenonkoplampen (+ koplampreiniging)</option>
                                        <option value="Buitenspiegels elektrisch verstelbaar en verwarmbaar">Buitenspiegels elektrisch verstelbaar en verwarmbaar</option>
                                        <option value="Centrale deurvergrendeling">Centrale deurvergrendeling</option>
                                        <option value="Dimlichten automatisch dimmen">Dimlichten automatisch dimmen</option>
                                        <option value="Elektrische ramen voor">Elektrische ramen voor</option>
                                        <option value="Hill Hold-functie">Hill Hold-functie/option>
                                        <option value="Knie-airbag (s)">Knie-airbag (s)</option>
                                        <option value="Leren stuur">Leren stuur</option>
                                        <option value="Lendensteunen (verstelbaar)">Lendensteunen (verstelbaar)</option>
                                        <option value="Multimediasysteem">Multimediasysteem</option>
                                        <option value="Parkeerhulp">Parkeerhulp</option>
                                        <option value="Passagierszadel in hoogte verstelbaar">Passagierszadel in hoogte verstelbaar</option>
                                        <option value="Sportstoelen">Sportstoelen</option>
                                        <option value="Stuurbekrachtiging">Stuurbekrachtiging</option>
                                        <option value="Multifunctioneel stuurwiel">Multifunctioneel stuurwiel</option>
                                        <option value="Hittebestendig glas">Hittebestendig glas</option>
                                        <option value="Zelf-dimmende binnenspiegel">Zelf-dimmende binnenspiegel</option>
                                        <option value="S line buitenkant">S line buitenkant</option>
                                       <option value="Radio-cd / mp3-speler">Radio-cd / mp3-speler</option>
                                       <option value="Parkeersensoren">Parkeersensoren</option>
                                       <option value="Mistlampen voor">Mistlampen voor</option>
                                       <option value="Bekleding in leder / alcantara">Bekleding in leder / alcantara</option>
                                       <option value="Cruise control">Cruise control</option>
                                       <option value="Binnenspiegel automatisch dimmend">Binnenspiegel automatisch dimmend</option>
                                       <option value="Aluminium binnenafwerking">Aluminium binnenafwerking</option>
                                       <option value="Parkeersensor achteraan">Parkeersensor achteraan</option>
                                       <option value="Lichtmetalen velgen 18">Lichtmetalen velgen 18 </option>
                                       <option value="Bang & olufsen">Bang & olufsen</option>
                                       <option value="Achterste armleuning">Achterste armleuning</option>
                                       <option value="Alarm klasse 1 (startonderbreker)">Alarm klasse 1 (startonderbreker)</option>
                                       <option value="Elektrisch verstelbare voorstoel (en)">Elektrisch verstelbare voorstoel (en)</option>
                                       <option value="Elektrische inklapbare spiegels">Elektrische inklapbare spiegels</option>
                                       <option value="Dakrails">Dakrails</option>
                                       <option value="Buitenspiegels zijn verwarmbaar">Buitenspiegels zijn verwarmbaar</option>
                                       <option value="18 inch sportvelgen">18 inch sportvelgen</option>
                                       <option value="Airco">Airco</option>
                                       <option value="Antislipschema">Antislipschema</option>
                                       <option value="Audiobediening op het stuurwiel">Audiobediening op het stuurwiel</option>
                                       <option value="Xenon-verlichting">Xenon-verlichting</option>
                                       <option value="gereduceerd">gereduceerd</option>
                                       <option value="Schuif- / kanteldak">Schuif- / kanteldak</option>
                                       <option value="Automatische dimmende binnenspiegel">Automatische dimmende binnenspiegel</option>
                         {{--              <option value="Open roof">Open roof</option>
                                       <option value="Board computer">Board computer</option>
                                       <option value="Tinted glass">Tinted glass</option>
                                       <option value="Anti blocking system">Anti blocking system</option>
                                       <option value="Towbar detachable">Towbar detachable</option>
                                       <option value="Particulate filter">Particulate filter</option>
                                       <option value="Airbag driver and passenger">Airbag driver and passenger</option>
                                       <option value="DVD player">DVD player</option>
                                       <option value="Electronic differential block">Electronic differential block</option>
                                       <option value="Leather / fabric upholstery">Leather / fabric upholstery</option>
                                       <option value="Alloy wheels 19 ">Alloy wheels 19 </option>
                                       <option value="Airbag (s) head for">Airbag (s) head for</option>
                                       <option value="Air conditioning separately behind">Air conditioning separately behind</option>
                                       <option value="Car phone preparation">Car phone preparation</option>
                                       <option value="Electronic stability program">Electronic stability program</option>
                                       <option value="Headlights adaptive">Headlights adaptive</option>
                                       <option value="Windscreen washers heatable">Windscreen washers heatable</option>
                                       <option value="Led daytime running lights">Led daytime running lights</option>
                                       <option value="Airbag (s) side front">Airbag (s) side front</option>
                                       <option value="Car phone preparation with bluetooth">Car phone preparation with bluetooth</option>
                                       <option value="Audio navigation full map + hard disk">Audio navigation full map + hard disk</option>
                                       <option value="Alarm class 3">Alarm class 3</option>
                                       <option value="M aerodynamics">M aerodynamics</option>
                                       <option value="Headrests active">Headrests active</option>
                                       <option value="Electric glass panorama roof">Electric glass panorama roof</option>
                                       <option value="Chrome parts exterior">Chrome parts exterior</option>--}}
                                    </select>
                                </div>


                                <!--<div class="form-group">
                                   <label for="exampleInputFile">File input</label>
                                   <input type="file" name="image" id="exampleInputFile">

                                   <p class="help-block">Example block-level help text here.</p>
                                 </div>-->
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>

                    </div>

                </div>
                <!-- /.row -->
            </div>
        </section>

        <!-- /.content -->
    </div> @endsection

@section('footer')

    <script>

        $('#sel_acss').select2({
            placeholder:'choose accessories',
            tags:true
        });
    </script>

@endsection