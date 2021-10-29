<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Hash; //password security
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:20'
        ]);
        $users = new Users();
        $users -> name = $request -> name;
        $users -> email = $request -> email;
        $users -> password = Hash::make($request -> password);
        $res = $users -> save();
        if($res) {
            return view('auth.login', compact('res'));
        } else {
            return back() -> with('fail','Wrong');
        }
    }

    public function loginUser(Request $request)
    {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:15'
        ]);
        $users = Users::where('email', '=', $request -> email) -> first();

        if($users) {
            if(Hash::check($request -> password, $users -> password)){
                $request -> session() -> put('loginId', $users -> id);
                return redirect('homePage');
            } else {
                return back() -> with('fail', 'Password not matches');
            }
        } else {
            return back() -> with('fail', 'This email is not registered');
        }
    }

    public function homePage()
    {
        $data = array();
        if(Session::has('loginId')) {
            $data = Users::where('id', '=', Session::get('loginId')) -> first();
        }
        return view('homePage', compact('data'));
    }
}
