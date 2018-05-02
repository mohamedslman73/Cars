<?php

namespace App\Http\Controllers\admin;

use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Jobs_controller extends Controller
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
        $job=Job::all();
        return view('admin.job.view',compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job=new Job();
        $job->name=$request->input('name');
        $job->title=$request->input('title');
        $pro = $request->input('description');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $job->descreption=$product_descreption_val;
        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img/job');
                $file->move($path, $imgname);
                $job->image = $imgname;
            }
        }
        $job->save();
        if($job->save()==true) {
            return redirect('/Jobs')->with('success', 'data inseret successfully');
        }
        else
        {
            return redirect()->back()->with('success', 'data inseret successfully');
        }
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
        $jobs=Job::find($id);
        return view('admin.job.edit',compact('jobs'));
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
        $job=Job::find($id);
        $job->name=$request->input('name');
        $job->title=$request->input('title');
        $pro = $request->input('description');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $job->descreption=$product_descreption_val;
        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img/job');
                $file->move($path, $imgname);
                $job->image = $imgname;
            }
        }
        $job->save();
        return redirect('/Jobs')->with('update', 'data inseret successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs=Job::find($id);
        $blogs->destroy($id);
        return redirect('/Jobs')->with('delete', 'Jobs deleted successfully');
    }
}
