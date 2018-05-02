<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
class Logincontroller extends Controller
{

    public function index()
    {
        return view('admin.login.login');
    }
    public function login()
    {
        return redirect('/adminpanel');
    }

    public function postlogin(Request $request)
    {
         $email = $request->input('email');
            $password = $request->input('password');
            $login = User::where([['email', $email], ['password', $password]])->get();
            if (count($login) > 0) {
                Session::put('user_name', $login);
                return redirect('/adminpanel');
            } else {
                return redirect('/adminpanel/login');
                return 'false';
            }

    }
    public function logout()
    {
     //   return  'true';
        Auth::logout();
        Session::flush();
        return redirect(route('login'));
    }
}
