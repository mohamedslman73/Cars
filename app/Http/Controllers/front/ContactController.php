<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Car;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('website.contact');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $contact =new Contact ;
        $this->validate($request,[
            'name'=>'required',
            'message'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->phone = $request->phone;
        $contact->car_name = $request->car_name;
        $contact->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function contact($id)
    {
        $contact = Car::where('id',$id)->get();
        return view('website.contact-us',compact('contact'));
    }

    public function contactStore(Request $request)
    {
        $contact =new Contact ;
        $this->validate($request,[
            'name'=>'required',
            'message'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->phone = $request->phone;
        $contact->car_name = $request->car_name;
        $contact->save();
        return redirect('/');
    }

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
