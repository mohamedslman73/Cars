<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\category;
class Product_controller extends Controller
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
        $product=Product::all();
        return view('admin.product.view',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->title=$request->input('title');
        $pro = $request->input('description');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $product->descreption=$product_descreption_val;
        $cat=$request->input('categore');
        $categore =category::all();
        foreach ($categore as $categores) {
            if ($categores->name == $cat) {
                $categore_id = $categores->id;
                $product->categories_id=$categore_id;
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
                $product->image = $imgname;
            }
        }
        $product->save();
        return redirect('/product')->with('success', 'data inseret successfully');
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
        $product=Product::find($id);
        return view('admin.product.edit', compact('product'));
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
        $product=Product::find($id);
        $product->title=$request->input('title');
        $pro = $request->input('description');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $product->descreption=$product_descreption_val;
        $cat=$request->input('categore');
        $categore =category::all();
        foreach ($categore as $categores) {
            if ($categores->name == $cat) {
                $categore_id = $categores->id;
                $product->categories_id=$categore_id;
            }
        }
        $product->save();
        return redirect('/product')->with('success', 'data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->destroy($id);
        return redirect('/product')->with('delete', 'Product deleted successfully');;
    }
}
