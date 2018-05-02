<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account_Request;
use Illuminate\Http\Request;

class Acounts_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.accounts.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accounts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->password == $request->remember_token) {
                $is_admin_value=0;
                $is_admin=$request->privalege;
                if ($is_admin == 'admin')
                    $is_admin_value=1;
                $newaccount = new \App\User();
                $newaccount->name = $request->name;
                $newaccount->email = $request->email;
                $newaccount->Is_admin = $is_admin_value;
                $newaccount->password = bcrypt($request->password);
                $newaccount->remember_token = bcrypt($request->remember_token);
                $newaccount->save();
                if ($newaccount->save() == TRUE) {
                    return redirect('admins/accounts')->with('success', 'data inseret successfully');
                }
            } else {
                return redirect()->back()->with('pass', 'y');
            }
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
        $account=User::find($id);
        return view('admin.accounts.edit',compact('account'));
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

        $user=User::find($id);
        $is_admin_value=0;
        $is_admin=$request->privalege;
        if ($is_admin == 'admin')
            $is_admin_value=1;
        $user->Is_admin=$is_admin_value;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password= bcrypt($request->password);
        $user->save();
        if ($user->save() == TRUE) {
            return redirect('admins/accounts')->with('success', 'data inseret successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $users=User::find($id);
        $users->destroy($id);
        return redirect('admins/accounts')->with('delete', 'Account deleted successfully');
    }
}
