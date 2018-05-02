<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Blogs_controller extends Controller
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
        $blogs=Blog::all();
        return view('admin.blog.view',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $blogs=new Blog();
        $blogs->name=$request->input('name');
        $blogs->title=$request->input('title');
        $pro = $request->input('description');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $blogs->descreption=$product_descreption_val;
        $tem_member=$request->input('team_member');
        $tem =Team::all();
        foreach ($tem as $tems) {
            if ($tems->name == $tem_member) {
                $team_id = $tems->id;
                $blogs->teams_id = $team_id;
            }
        }
        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img/projects');
                $file->move($path, $imgname);
                $blogs->image = $imgname;
            }
        }
        $blogs->save();
        return redirect('/Blogs')->with('success', 'Add Blog successfully');
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
        $blog=Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
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
        $blogs=Blog::find($id);
        $blogs->name=$request->input('name');
        $blogs->title=$request->input('title');
        $pro = $request->input('description');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $blogs->descreption=$product_descreption_val;
        $tem_member=$request->input('team_member');
        $tem =Team::all();
        foreach ($tem as $tems) {
            if ($tems->name == $tem_member) {
                $team_id = $tems->id;
                $blogs->teams_id = $team_id;
            }
        }
        $images = $request->image;
        if (isset($request->image)) {
            foreach ($images as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = sha1($file->getClientOriginalName());
                $imgname = date('y-m-d') . $name . "." . $extension;
                $path = public_path('website/img/projects');
                $file->move($path, $imgname);
                $blogs->image = $imgname;
            }
        }
        $blogs->save();
        return redirect('/Blogs')->with('update', 'Blog Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs=Blog::find($id);
        $blogs->destroy($id);
        return redirect('/Blogs')->with('delete', 'Blogs deleted successfully');
    }
}
