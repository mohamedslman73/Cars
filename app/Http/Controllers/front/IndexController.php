<?php

namespace App\Http\Controllers\front;
use App\Rentinfo;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function notfound()
    {
        return view('website.errors.pagenotfound');
    }

    public function index()
    {
        //
    }


    public static function settingData()
    {
        return Setting::all();
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


    public function rentInfo(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[
            'pickup_date'=>'required',
            'pickup_time'=>'required',
            'return_date'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);

        $rentinfo = new Rentinfo;

        $rentinfo->location = $request->location;
        $rentinfo->pickup_date=$request->pickup_date;
        $rentinfo->pickup_time = $request->pickup_time;
        $rentinfo->return_date = $request->return_date;
        $rentinfo->first_name = $request->first_name;
        $rentinfo->last_name = $request->last_name;
        $rentinfo->car_name = $request->car_name;
        $rentinfo->company_title = $request->company_title;
        $rentinfo->email = $request->email;
        $rentinfo->phone = $request->phone;

        $rentinfo->save();
        return redirect('/')->with('success','You successfully Book this car and we will contact you as soos as  ');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
