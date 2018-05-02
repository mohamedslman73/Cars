<?php

namespace App\Http\Controllers\front;

use App\Car;
use App\HomeContent;
use App\Rentinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    // search function
   public function index(Request $request)
    {
        \request()->session()->put('last',\request()->fullUrl());
        $latest = Car::orderBy('created_at','desc')->take(4)->get();
        $model = Car::get(['model']);
        $models = request()->model;
        $rang1 = request()->rangeOne;
        $rang2 = request()->rangeTwo;
        $fuel = request()->fuel;
        $body_type = request()->body_type;
        $energy_label = request()->energy_label;
        $transmission = request()->transmission;
        $colour = request()->colour;
        if ($models == null and $rang1 == null and $rang2==null and $transmission== null
            and $energy_label ==null and $fuel==null and $body_type== null  and $colour == null) {

                $cars = Car::paginate(6);

        }
        else {

            $cars = Car::where(function ($query) use ($models,$rang1,$rang2,$fuel,$transmission,$energy_label,$body_type,$colour) {
                    $query->where('model', 'LIKE', "$models")
                        ->orWhere('fuel', 'LIKE', "$fuel")
                        ->orWhere('energy_label', 'LIKE', "$energy_label")
                        ->orWhere('transmission', 'LIKE', "$transmission")
                        ->orWhere('body_type', 'LIKE', "$body_type")
                        ->orWhere('colour','LIKE',"$colour")
                        ->whereBetween('price',[$rang1,$rang2]);
                })->paginate(6);


        }
            $request->session()->put('location',$request->location);
            $request->session()->put('pickup_date',$request->pickup_date);
            $request->session()->put('pickup_time',$request->pickup_time);
            $request->session()->put('return_date',$request->return_date);
            return view('website.filter',['cars'=>$cars,'model'=>$model,'latest'=>$latest])->with($request->location);

    }

    public function filterindex()
    {
        \request()->session()->put('lasturl',\request()->fullUrl());

        $latest = Car::orderBy('created_at','desc')->take(4)->get();
        $models = request()->model;
        $rang1 = request()->rangeOne;
        $rang2 = request()->rangeTwo;
        $fuel = request()->fuel;
        $body_type = request()->body_type;
        $energy_label = request()->energy_label;
        $transmission = request()->transmission;
        $colour = request()->colour;
        if ($models == null and  $transmission== null
            and $energy_label ==null and $fuel==null and $body_type== null and $colour ==null) {

                $car = Car::paginate(6);

        }
        else {

            $car = Car::where(function ($query) use ($models,$rang1,$rang2,$fuel,$transmission,$energy_label,$body_type,$colour) {
                $query->where('model', 'LIKE', "$models")
                    ->orWhere('fuel', 'LIKE', "$fuel")
                    ->orWhere('energy_label', 'LIKE', "$energy_label")
                    ->orWhere('transmission', 'LIKE', "$transmission")
                    ->orWhere('body_type', 'LIKE', "$body_type")
                    ->orWhere('colour', 'LIKE', "$colour")
                    ->whereBetween('price',[$rang1,$rang2]);
            })->paginate(6);

        }
        return view('website.filter1',['car'=>$car,'latest'=>$latest]);

    }



    public function getmodel($model)
    {
        $carmodel = Car::where('model',$model);

        return view('website.filter');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

  public function searchRent()
  {
      $location = request()->location;
      $date = request()->pickup_date;
      $time = request()->pickup_time;
      $return_date = request()->return_date;

      return view('website.filter');
  }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $lasturl= \request()->session()->get('lasturl');
        $last= \request()->session()->get('last');
      $car=Car::find($id);

        return view('website.specifications',['car'=>$car,'lasturl'=>$lasturl,'last'=>$last]);
    }

    public function showmodel($model)
    {
        //

        $car=Car::where('model',$model)->get();
        return view('website.model',['car'=>$car]);
    }

    public function rentcar($id,Request $request)
    {
       $car = Car::where('id',$id)->get();

       $location= $request->session()->get('location');
       $pickup_date= $request->session()->get('pickup_date');
       $pickup_time= $request->session()->get('pickup_time');
       $return_date= $request->session()->get('return_date');

        $from = \Carbon\Carbon::createFromFormat('Y-m-d',$pickup_date);
         $to  = \Carbon\Carbon::createFromFormat('Y-m-d', $return_date);

        $diff_in_days = $to->diffInDays($from);




       return view('website.rent',['car'=>$car,'location'=>$location,'pickup_date'=>$pickup_date,
           'pickup_time'=>$pickup_time,'return_date'=>$return_date,'diff_in_days'=>$diff_in_days]);
    }
    public function getindex(Request $request)
    {
      $home = HomeContent::get(['title','description','image']);
        return view('website.index',compact('home'));
    }

    public function getCarBody($body)
    {
       $bodys = Car::where('body_type',$body)->paginate(6);
       return view('website.bodytype',['bodys'=>$bodys]);
    }


    /*
     * this is a static function we can use it in all views in this project
     */
    public static function getdata()
    {
        return Car::all();

    }

}