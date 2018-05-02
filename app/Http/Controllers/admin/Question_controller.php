<?php

namespace App\Http\Controllers\admin;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Question_controller extends Controller
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
        $question=Question::all();
        return view('admin.question.view',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question=new Question();
        $pro = $request->input('question');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $question->question=$product_descreption_val;
        $ans = $request->input('answer');
        $ans_value = htmlspecialchars_decode($ans, ENT_COMPAT);
        $question->answer=$ans_value;
        $question->save();
        return redirect('/Question')->with('success', 'data inseret successfully');
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
        $question=Question::find($id);
        return view('admin.question.edit',compact('question'));
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
        $question=Question::find($id);
        $pro = $request->input('question');
        $product_descreption_val = htmlspecialchars_decode($pro, ENT_COMPAT);
        $question->question=$product_descreption_val;
        $ans = $request->input('answer');
        $ans_value = htmlspecialchars_decode($ans, ENT_COMPAT);
        $question->answer=$ans_value;
        $question->save();
        return redirect('/Question')->with('update', 'data inseret successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question=Question::find($id);
        $question->destroy($id);
        return redirect('/Question')->with('delete', 'Question deleted successfully');
    }
}
