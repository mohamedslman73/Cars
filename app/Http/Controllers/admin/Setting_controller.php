<?php

namespace App\Http\Controllers\admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Setting_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $settings = Setting::all();
        return view('admin.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'facebook'=>'url',
           'twitter'=>'url',
           'linkedin'=>'url',
           'google+'=>'url',
           'instegram'=>'url',
            'image'=>'required|image|mimes:jpeg,jpg,png',
        ]);
        $setting = new Setting;
        $setting->facebook=$request->input('facebook');
        $setting->twitter=$request->input('twitter');
        $setting->linkedin=$request->input('linkedin');
        $setting['google+'] =$request->input('google+');
        $setting->instegram=$request->input('instegram');

      $setting->image = $request->file('image')->store('setting');
     //  dd($request->all());
        $setting->save();

        return redirect('admins/setting')->with('success', 'data created successfully');
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
        $setting=Setting::find($id);
        return view('admin.setting.edit',compact('setting'));
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
        $this->validate($request,[
            'facebook'=>'url',
            'twitter'=>'url',
            'linkedin'=>'url',
            'google+'=>'url',
            'instegram'=>'url',
            'image'=>'image|mimes:jpeg,jpg,png',
        ]);
        $setting=Setting::find($id);
        $setting->facebook=$request->input('facebook');
        $setting->twitter=$request->input('twitter');
        $setting->linkedin=$request->input('linkedin');
        $setting['google+'] =$request->input('google+');
        $setting->instegram=$request->input('instegram');
       /* if($request->hasFile('image')){
            $setting->image = $request->file('image')->store('/logos');
        }*/
       if ($request->hasFile('image')) {
           $setting->image = $request->file('image')->store('setting');
       }
        $setting->save();

        return redirect('admins/setting')->with('update', 'data Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $users=Setting::find($id);
        $users->destroy($id);
        return redirect('admins/setting')->with('delete', 'Account deleted successfully');
    }
}
