<?php

namespace App\Http\Controllers\admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Team_controller extends Controller
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
        $team = Team::all();
        return view('admin.team.view', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team=new Team();
        $team->name=$request->input('name');
        $team->job=$request->input('job');

        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img/persons');
                $file->move($path, $imgname);
                $team->image = $imgname;
            }
        }
        $team->save();
        return redirect('/Team')->with('success', 'data inseret successfully');
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
        $team=Team::find($id);
        return view('admin.team.edit',compact('team'));
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
        $team=Team::find($id);
        $team->name=$request->input('name');
        $team->job=$request->input('job');

        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img/persons');
                $file->move($path, $imgname);
                $team->image = $imgname;
            }
        }
        $team->save();
        return redirect('/Team')->with('update', 'data inseret successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team=Team::find($id);
        $team->destroy($id);
        return redirect('/Team')->with('delete', 'informaion deleted successfully');
    }
}
