<?php

namespace App\Http\Controllers\admin;
use App\Car;
use App\CarGalleryImage;
use App\Http\Controllers\Controller;
use App\AboutContent;
use Illuminate\Http\Request;

class AboutContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $maincontents = AboutContent::all();
        return view('admin.aboutcontent.view', compact('maincontents'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.aboutcontent.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $this->validate($request,[
            'title'      =>'required',
            'description'=>'required',
            'image'       =>'required|image|mimes:png,jpeg,jpg',
        ]);
       $maincontent =new AboutContent();
        $maincontent->title =$request->title;
        $maincontent->description =$request->description;
        $maincontent->image =$request->file('image')->store('aboutcontent');
       $maincontent->save();
//dd($request->all());
/*        if(count($request->images) != 0){
            foreach ($request->images as $image) {
                $car->cargallery()->create(['url' => $image->store('cars/gallery'),'car_id'=>$car->id]); }
        }

        if(count($request->access) != 0){
            foreach ($request->access as $accessory) {
                $car->accessories()->create(['accessory_name'=>$accessory,'car_id'=>$car->id]); }
        }*/


        // $car->cargallery()->save();
        return redirect('admins/aboutcontent')->with('success', 'data insereted successfully');

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
        $maincontent=AboutContent::find($id);
        return view('admin.aboutcontent.edit',compact('maincontent'));
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
        $maincontent=AboutContent::find($id);
        $maincontent->title =$request->title;
        $maincontent->description =$request->description;
        $maincontent->image =$request->file('image')->store('aboutcontent');
        $maincontent->save();

        return redirect('admins/aboutcontent')->with('update', 'data updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $maincontent=AboutContent::find($id);
        $maincontent->destroy($id);
        return redirect('admins/aboutcontent')->with('delete', 'Account deleted successfully');
    }
}
