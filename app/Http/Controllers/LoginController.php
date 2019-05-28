<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    //

    public function create(){
        return view('users.signup');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
                'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
            ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        Auth::login($user);

        return redirect('/products');
    }

    public function getlogin(){
        return view('users.login');
    }

    public function postlogin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect('/');
        }

        return redirect('/signin');
    }

    public function getlogout(){
        Auth::logout();
        return redirect('/');
    }
}
