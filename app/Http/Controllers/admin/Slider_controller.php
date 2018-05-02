<?php

namespace App\Http\Controllers\admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Slider_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $slider=Slider::all();
        return view('admin.sliders.view',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sliders=new Slider();
        $sliders->title=$request->input('title');
        $pro = $request->input('description');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $sliders->descreption=$product_descreption_val;

        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img');
                $file->move($path, $imgname);
                $sliders->img = $imgname;
            }
        }
        $sliders->save();
        return redirect('/sliders')->with('success', 'data inseret successfully');
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
        $sliders=Slider::find($id);
        return view('admin.sliders.edit', compact('sliders'));

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
        $sliders=Slider::find($id);
        $sliders->title=$request->input('title');
        $pro = $request->input('description');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $sliders->descreption=$product_descreption_val;

        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img');
                $file->move($path, $imgname);
                $sliders->img = $imgname;
            }
        }
        $sliders->save();
        return redirect('/sliders')->with('update', 'data Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders=Slider::find($id);
        $sliders->destroy($id);
        return redirect('/sliders')->with('delete', 'Sliders deleted successfully');;
    }
}
