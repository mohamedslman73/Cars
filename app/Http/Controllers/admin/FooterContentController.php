<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FooterContent;
class FooterContentController extends Controller
{
    public function index()
    {
        $footercontents = FooterContent::all();
        return view('admin.footercontent.view', compact('footercontents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footercontent.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $footercontent = new FooterContent;
        $footercontent->title = $request->title;
        $footercontent->address = $request->address;
        $footercontent->phone = $request->phone;
        $footercontent->email = $request->email;

        $footercontent->save();

        return redirect('admins/footercontent')->with('success','footer content created successfully');
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
        $footercontent=FooterContent::find($id);
        return view('admin.footercontent.edit',compact('footercontent'));
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
        $footercontent =FooterContent::find($id);
        $footercontent->title = $request->title;
        $footercontent->address = $request->address;
        $footercontent->phone = $request->phone;
        $footercontent->email = $request->email;

        $footercontent->save();

        return redirect('admins/footercontent')->with('update','footer content updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $footercontent=FooterContent::find($id);
        $footercontent->destroy($id);
        return redirect('admins/footercontent')->with('delete', 'Account deleted successfully');
    }
}
