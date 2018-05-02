<?php

namespace App\Http\Controllers\admin;

use App\HomeContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $homecontents = HomeContent::all();
        return view('admin.homecontent.view', compact('homecontents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.homecontent.add');
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
        //
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);

        $homecontent =new HomeContent;
        $homecontent->title = $request->title;
        $homecontent->description = $request->description;
        $homecontent->image = $request->file('image')->store('homecontent');
        $homecontent->save();
        return redirect('admins/homecontent')->with('success', 'data insereted successfully');;
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
        $homecontent=HomeContent::find($id);
        return view('admin.homecontent.edit',compact('homecontent'));
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
        $homecontent =HomeContent::find($id);
        $homecontent->title = $request->title;
        $homecontent->description = $request->description;
       if ($request->hasFile('image')) {
           $homecontent->image = $request->file('image')->store('homecontent');
       }
        $homecontent->save();
        return redirect('admins/homecontent')->with('update', 'data Updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homecontent=HomeContent::find($id);
        $homecontent->destroy($id);
        return redirect('admins/homecontent')->with('delete', 'Account deleted successfully');

    }
}
