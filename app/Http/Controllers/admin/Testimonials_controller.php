<?php

namespace App\Http\Controllers\admin;

use App\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Testimonials_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opinion = Testimonials::all();
        return view('admin.Testimonials.view', compact('opinion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Testimonials.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opinion=new Testimonials();
        $opinion->name=$request->input('name');
        $opinion->job=$request->input('title');
        $pro = $request->input('description');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $opinion->opinion=$product_descreption_val;
        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img/persons');
                $file->move($path, $imgname);
                $opinion->image = $imgname;
            }
        }
        $opinion->save();
        return redirect('/Testimonials')->with('success', 'data inseret successfully');
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
        $opinion=Testimonials::find($id);
        return view('admin.Testimonials.edit',compact('opinion'));
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
        $opinion=Testimonials::find($id);
        $opinion->name=$request->input('name');
        $opinion->job=$request->input('job');
        $pro = $request->input('opinion');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $opinion->opinion=$product_descreption_val;
        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img/persons');
                $file->move($path, $imgname);
                $opinion->image = $imgname;
            }
        }
        $opinion->save();
        return redirect('/Testimonials')->with('success', 'data inseret successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opinion=Testimonials::find($id);
        $opinion->destroy($id);
        return redirect('/Testimonials')->with('delete', 'informaion deleted successfully');
    }
}
