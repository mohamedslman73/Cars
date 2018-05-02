<?php

namespace App\Http\Controllers\admin;

use App\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Services_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $services = Services::all();
        return view('admin.services.view', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $this->validate($request,[
           'title'=>'required',
           'description'=>'required',
           'icon'=>'required',
        ]);
        $service=new Services();
        $service->title=$request->title;
        $service->description = $request->input('description');
        $service->icon = $request->input('icon');
        $service->save();
        return redirect('admins/services')->with('success', 'data insereted successfully');
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
        $service=Services::find($id);
        return view('admin.services.edit',compact('service'));
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
       // dd($request->all());
        $service = Services::find($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return redirect('admins/services')->with('update','data updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Services::find($id);
        $service->destroy($id);
        return redirect('admins/services')->with('delete', 'Services deleted successfully');
    }
}
