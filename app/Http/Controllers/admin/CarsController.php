<?php

namespace App\Http\Controllers\admin;
use App\Car;
use App\CarGalleryImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.view', compact('cars'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cars.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
            'price'=>'required',
            'model'=>'required',
            'description'=>'required',
            'construction_year'=>'required',
            'minimum_driver_age'=>'required|numeric',
            'new_price'=>'required',
            'vat_margin'=>'required',
            'weight'=>'required',
            'decoration'=>'required',
            'cylinder_capacity'=>'required',
            'c02_emission'=>'required',
            'consumption_of'=>'required',
            'consumption_highway'=>'required',
            'mileage'=>'required',
            'images'=>'required',
        ]);
        $car =new Car();
        $car->name =$request->name;
        $car->price = $request->price;
        $car->model = $request->model;
        $car->description = $request->description;
        $car->body_type = $request->body_type;
        $car->construction_year = $request->construction_year;
        $car->colour = $request->colour;
        $car->mileage = $request->mileage;
        $car->transmission = $request->transmission;
        $car->fuel = $request->fuel;
        $car->weight = $request->weight;
        $car->decoration = $request->decoration;
        $car->cylinder_capacity = $request->cylinder_capacity;
        $car->c02_emission = $request->c02_emission;
        $car->consumption_of = $request->consumption_of;
        $car->consumption_city = $request->consumption_city;
        $car->consumption_highway = $request->consumption_highway;
        $car->energy_label = $request->energy_label;
        $car->vat_margin = $request->vat_margin;
        $car->new_price = $request->new_price;
        $car->minimum_driver_age = $request->minimum_driver_age;

        $car->save();
//dd($request->all());
        if(count($request->images) != 0){
            foreach ($request->images as $image) {
                $car->cargallery()->create(['url' => $image->store('gallery'),'car_id'=>$car->id]); }
        }

         if(count($request->access) != 0){
            foreach ($request->access as $accessory) {
                $car->accessories()->create(['accessory_name'=>$accessory,'car_id'=>$car->id]); }
        }


       // $car->cargallery()->save();
        return redirect('admins/cars')->with('success', 'data inseret successfully');

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car=Car::find($id);
        return view('admin.cars.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
           
            'minimum_driver_age'=>'numeric',
        ]);
        
        $car=Car::find($id);
       $car->name =$request->name;
       $car->price = $request->price;
       $car->model = $request->model;
       $car->description = $request->description;
       $car->body_type = $request->body_type;
       $car->construction_year = $request->construction_year;
       $car->colour = $request->colour;
       $car->mileage = $request->mileage;
       $car->transmission = $request->transmission;
       $car->fuel = $request->fuel;
       $car->weight = $request->weight;
       $car->decoration = $request->decoration;

       $car->cylinder_capacity = $request->cylinder_capacity;
       $car->c02_emission = $request->c02_emission;
       $car->consumption_of = $request->consumption_of;
       $car->consumption_city = $request->consumption_city;
       $car->consumption_highway = $request->consumption_highway;
       $car->energy_label = $request->energy_label;
       $car->vat_margin = $request->vat_margin;
       $car->new_price = $request->new_price;
       $car->minimum_driver_age = $request->minimum_driver_age;

        if($request->hasFile('images')){
            $car->cargallery()->delete();
            foreach ($request->images as $image) {
                $car->cargallery()->create(['url' => $image->store('gallery'),'car_id'=>$car->id]); }
        }
       $car->save();

        return redirect('admins/cars')->with('update', 'data updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $car=Car::find($id);
        $car->destroy($id);
        return redirect('admins/cars')->with('delete', 'Account deleted successfully');
    }

    public function showcar($id)
    {

        $car=Car::find($id);
      // dd($car->show);
        if($car->show ==0)
        {
            $car->show=1;
            $car->save();
        }else{
            $car->show=0;
            $car->save();
        }
       // return redirect('/cars');
        return back();
    }


    public function showrent($id)
    {
        $car=Car::find($id);
        if($car->rent ==0)
        {
            $car->rent=1;
            $car->save();
        }else{
            $car->rent=0;
            $car->save();
        }
       // return redirect('/cars');
        return back();
    }

    public function showsold($id)
    {
        $car=Car::find($id);
        if($car->sold ==0) {
            $car->sold=1;
            $car->save();
        }else{
            $car->sold=0;
            $car->save();
        }
        //return redirect('/cars');
        return back();
    }



}
